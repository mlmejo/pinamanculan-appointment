<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Http\Request;
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

Route::get('/create-appointment-success', function (Request $request) {
    if (! $request->has('appointment_id')) {
        return abort(404);
    }

    $appointment = \App\Models\Appointment::findOrFail($request->input('appointment_id'));

    return view('create-appointment-success', [
        'appointment' => $appointment,
    ]);
})->name('create-appointment-success');

Route::get('admin', [AppointmentController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
require __DIR__.'/appointments.php';
require __DIR__.'/approved-appointments.php';
