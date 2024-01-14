<?php

use App\Http\Controllers\ApprovedAppointmentController;
use Illuminate\Support\Facades\Route;

Route::controller(ApprovedAppointmentController::class)->group(function () {
    Route::get('/approved-appointments', 'index')
        ->name('approved-appointments.index')
        ->middleware('auth');

    Route::post('/approved-appointments', 'store')
        ->name('approved-appointments.store')
        ->middleware('auth');
});
