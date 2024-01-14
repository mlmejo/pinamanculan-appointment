<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pinamanculan Appointment System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="pt-6 md:pb-6 mx-auto">
        <div class="text-center">
            <h1 class="text-gray-600">Pinamanculan Appointment System</h1>
            <h2 class="text-xl font-semibold text-gray-800 leading-tight">Create Appointment</h2>
        </div>
        <div
            class="w-full sm:max-w-lg mx-auto bg-white border py-4 px-6 sm:rounded-lg shadow-md overflow-hidden mt-6">

            <form action="{{ route('appointments.store') }}" method="post" class="mt-6 space-y-6">
                @csrf

                <div class="flex items-center">
                    <div class="w-4/12 md:w-3/12">
                        <x-input-label for="service_id" :value="'Purpose'" />
                    </div>
                    <div class="w-8/12 md:w-9/12">
                        <x-select-input name="service_id" id="service_id" class="block w-full">
                            <option selected disabled>Select option</option>
                            @foreach (\App\Models\Service::all() as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </x-select-input>
                        <x-input-error :messages="$errors->get('service_id')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-4/12 md:w-3/12">
                        <x-input-label for="name" :value="'Name'" />
                    </div>
                    <div class="w-8/12 md:w-9/12">
                        <x-text-input name="name" id="name" class="block w-full" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-4/12 md:w-3/12">
                        <x-input-label for="email" :value="'Email'" />
                    </div>
                    <div class="w-8/12 md:w-9/12">
                        <x-text-input type="email" name="email" id="email"
                            class="block w-full" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-4/12 md:w-3/12">
                        <x-input-label for="birth_place" :value="'Birth place'" />
                    </div>
                    <div class="w-8/12 md:w-9/12">
                        <x-text-input name="birth_place" id="birth_place" class="block w-full" />
                        <x-input-error :messages="$errors->get('birth_place')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-4/12 md:w-3/12">
                        <x-input-label for="birth_date" :value="'Birth date'" />
                    </div>
                    <div class="w-8/12 md:w-9/12">
                        <x-text-input type="date" name="birth_date" id="birth_date"
                            class="block w-full" />
                        <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-4/12 md:w-3/12">
                        <x-input-label for="address" :value="'Address'" />
                    </div>
                    <div class="w-8/12 md:w-9/12">
                        <x-text-input name="address" id="address" class="block w-full" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-4/12 md:w-3/12">
                        <x-input-label for="height" :value="'Height (cm)'" />
                    </div>
                    <div class="w-8/12 md:w-9/12">
                        <x-text-input name="height" id="height" class="block w-full" />
                        <x-input-error :messages="$errors->get('height')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-4/12 md:w-3/12">
                        <x-input-label for="weight" :value="'Weight (kg)'" />
                    </div>
                    <div class="w-8/12 md:w-9/12">
                        <x-text-input name="weight" id="weight" class="block w-full" />
                        <x-input-error :messages="$errors->get('weight')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-4/12 md:w-3/12">
                        <x-input-label for="gender" :value="'Gender'" />
                    </div>
                    <div class="w-8/12 md:w-9/12">
                        <x-select-input name="gender" id="gender" class="block w-full">
                            <option selected disabled>Select option</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </x-select-input>
                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-4/12 md:w-3/12">
                        <x-input-label for="civil_status" :value="'Civil status'" />
                    </div>
                    <div class="w-8/12 md:w-9/12">
                        <x-select-input name="civil_status" id="civil_status" class="block w-full">
                            <option selected disabled>Select option</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                        </x-select-input>
                        <x-input-error :messages="$errors->get('civil_status')" class="mt-2" />
                    </div>
                </div>

                <div class="flex justify-end">
                    <x-primary-button>Create appointment</x-primary-button-wide>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
