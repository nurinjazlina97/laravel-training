<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/schedules', [App\Http\Controllers\ScheduleController::class,'index'])->name('schedules.index');

Route::get('schedules/create', [App\Http\Controllers\ScheduleController::class, 'create'])->name('schedules.create');

Route::post('/schedules/create', [App\Http\Controllers\ScheduleController::class, 'store'])->name('schedules.store');

Route::get('/schedules/{schedule}', [App\Http\Controllers\ScheduleController::class, 'show'])->name('schedules.show');

Route::get('/schedules/{schedule}/edit', [App\Http\Controllers\ScheduleController::class, 'edit'])->name('schedules.edit');

Route::post('/schedules/{schedule}/edit', [App\Http\Controllers\ScheduleController::class, 'update'])->name('schedules.update');
