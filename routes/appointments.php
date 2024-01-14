<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

Route::controller(AppointmentController::class)->group(function () {
    Route::get('/', 'create');
    Route::post('/appointments', 'store')->name('appointments.store');
    Route::get('/appointments/{appointment}', 'show')->name('appointments.show');
});
