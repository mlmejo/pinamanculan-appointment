@props([
    'appointments',
])

<div class="overflow-auto bg-white pt-6 shadow-sm sm:rounded-lg">
    <div class="flex items-center justify-between px-6 mt-2">
        <div>
            <x-select-input class="text-sm leading-5">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </x-select-input>
            <span class="text-sm text-gray-600">appointments per page</span>
        </div>

        <div>
            <div class="relative max-w-xs">
                <label for="q" class="sr-only">Search</label>
                <x-text-input class="ps-9 text-sm"
                    placeholder="Search for appointments" />
                <div
                    class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                    <svg class="h-4 w-4 text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <table class="divide-y-200 mt-3 min-w-full divide-y">
        <thead>
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-600">
                    Name
                </th>
                <th scope="col"
                    class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-600">
                    Address
                </th>
                <th scope="col"
                    class="px-6 py-3 text-center text-xs font-medium uppercase text-gray-600">
                    Purpose
                </th>
                <th scope="col"
                    class="px-6 py-3 text-center text-xs font-medium uppercase text-gray-600">
                    Date requested
                </th>
                <th scope="col"
                    class="px-6 py-3 text-end text-xs font-medium uppercase text-gray-600">
                    Status
                </th>
            </tr>
        </thead>
        <tbody x-data class="divide-y divide-gray-200">
            @forelse ($appointments as $appointment)
                <tr class="hover:bg-gray-100 transition-colors cursor-pointer"
                    x-on:click="window.location.href = '{{ route('appointments.show', $appointment) }}'">
                    <td
                        class="px-6 py-4 text-sm whitespace-nowrap font-medium text-gray-800">
                        {{ $appointment->name }}
                    </td>
                    <td
                        class="px-6 py-4 text-sm whitespace-nowrap font-medium text-gray-800 text-start">
                        {{ $appointment->address }}
                    </td>
                    <td
                        class="px-6 py-4 text-sm whitespace-nowrap font-medium text-gray-800 text-center">
                        {{ $appointment->service->name }}
                    </td>
                    <td
                        class="px-6 py-4 text-sm whitespace-nowrap font-medium text-gray-800 text-center">
                        {{ $appointment->created_at->format('m/d/y @ h:i A') }}
                    </td>
                    <td
                        class="px-6 py-4 text-sm whitespace-nowrap font-medium text-gray-800 text-end">
                        @if (!$appointment->is_approved)
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Pending
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </span>
                        @else
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800">
                                Approved
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5"
                        class="px-6 pt-6 text-sm whitespace-nowrap font-medium text-gray-600 text-center">
                        No appointments available
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="text-end px-6">
        {{ $appointments->links() }}
    </div>
</div>
