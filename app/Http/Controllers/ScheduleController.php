<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Storage;
use File;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->keyword) {
            $schedules = Schedule::where('title', 'LIKE', '%'.$request->keyword.'%')
                         ->paginate(3);
        } else {
            $schedules = Schedule::paginate(3);
        }

        return view('schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('schedules.create');
    }

    public function store(Request $request)
    {
        $schedule = Schedule::create($request->all());

        if ($request->hasFile('attachment')) {
            $filename = $schedule->id.'-'.date('Y-m-d').'-'.$request->attachment->getClientOriginalExtension();
            Storage::disk('public')->put('attachments/'.$filename, File::get($request->attachment));

            $schedule->attachment = $filename;
            $schedule->save();
        }

        return redirect()->route('schedules.index');
    }

    public function show(Schedule $schedule)
    {
        return view('schedules.show', compact('schedule'));
    }

    public function edit(Schedule $schedule)
    {
        return view('schedules.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $schedule->update($request->all());

        return redirect()->route('schedules.index');
    }

    public function destroy(Schedule $schedule)
    {
        if ($request->attachment) {
            Storage::disk('public')->delete($schedule->attachment);
        }
        $schedule->delete();

        return redirect()->route('schedules.index');
    }
}
