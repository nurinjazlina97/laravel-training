<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleTableSeeder extends Seeder
{
    public function run(): void
    {
        Schedule::create([
            'title' => 'Wash Car',
            'description' => 'Wash car at 5pm'
        ]);
    }
}
