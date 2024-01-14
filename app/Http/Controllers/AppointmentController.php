<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::where('is_approved', false)
            ->paginate();

        return view('dashboard', [
            'appointments' => $appointments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string',
            'email' => 'required|email',
            'birth_date' => 'required|date',
            'birth_place' => 'required|string',
            'address' => 'required|string',
            'weight' => 'required|decimal:0,2',
            'height' => 'required|decimal:0,2',
            'civil_status' => ['required', Rule::in(['Single', 'Married', 'Widowed'])],
            'gender' => ['required', Rule::in(['Male', 'Female'])],
        ]);

        $appointment = Appointment::create($validated);

        return redirect(route('create-appointment-success', [
            'appointment_id' => $appointment->id,
        ]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        return view('appointments.show', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
