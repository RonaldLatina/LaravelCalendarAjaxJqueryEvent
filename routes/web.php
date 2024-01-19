<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalendarController;

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

Route::get('/getevent', [FullCalendarController::class, 'getEvent'])->name('getEvent');
Route::post('/createevent', [FullCalendarController::class, 'createEvent'])->name('createevent');
Route::post('/deleteevent', [FullCalendarController::class, 'deleteEvent'])->name('deleteevent');