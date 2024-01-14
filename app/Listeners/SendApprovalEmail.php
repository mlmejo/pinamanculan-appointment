<?php

namespace App\Listeners;

use App\Events\AppointmentApproved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendApprovalEmail
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AppointmentApproved $event): void
    {
        $appointment = $event->appointment;

        Mail::to($appointment->email)->send(new \App\Mail\AppointmentApproved($appointment));
    }
}
