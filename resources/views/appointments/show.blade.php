<x-app-layout>
    <div class="py-12">
        <div
            class="mx-auto max-w-2xl p-4 sm:p-8 bg-white border border-gray-200 sm:rounded-lg shadow-sm">
            <h1 class="text-xl font-semibold leading-tight text-gray-800">{{ $appointment->name }}
            </h1>

            <div class="text-gray-600 space-y-2 mt-6">
                <div>
                    <strong>Email:</strong> {{ $appointment->email }}
                </div>

                <div>
                    <strong>Address:</strong> {{ $appointment->address }}
                </div>

                <div>
                    <strong>Birth place:</strong> {{ $appointment->birth_place }}
                </div>

                <div>
                    <strong>Birth date:</strong> {{ $appointment->birth_date->format('M d, Y') }}
                </div>

                <div>
                    <strong>Civil status:</strong> {{ $appointment->civil_status }}
                </div>

                <div>
                    <strong>Gender:</strong> {{ $appointment->gender }}
                </div>

                <div>
                    <strong>Weight:</strong> {{ $appointment->weight }}
                </div>

                <div>
                    <strong>Height:</strong> {{ $appointment->height }}
                </div>

                <div>
                    <strong>Purpose:</strong> {{ $appointment->service->name }}
                </div>

                <div>
                    <strong>Date Requested:</strong>
                    {{ $appointment->created_at->format('m/d/y @ h:i A') }}
                </div>

                <div>
                    <strong>Status:</strong>
                    @if (!$appointment->is_approved)
                        <span class="text-yellow-500">Pending</span>
                    @else
                        <span class="text-teal-500">Approved</span>
                    @endif
                </div>
            </div>

            <div class="flex mt-6 justify-end">
                <a href="{{ url()->previous() }}">
                    <x-secondary-button>Return to appointments</x-secondary-button>
                </a>

                @if (!$appointment->is_approved)
                    <form
                        action="{{ route('approved-appointments.store', ['appointment_id' => $appointment->id]) }}"
                        method="post">
                        @csrf

                        <x-primary-button class="ms-3">Approve appointment</x-primary-button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
