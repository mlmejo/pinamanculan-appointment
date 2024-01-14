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

<body class="font-sans text-gray-900 antialiased">
    <div class="flex md:items-center md:justify-center h-screen pt-6 md:pt-0">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
            <h1 class="text-gray-600 text-lg">Pinamanculan Appointment System</h1>

            <div class="mx-auto max-w-xl mt-6 bg-white border border-gray-200 rounded-lg shadow-sm p-6 sm:text-center">
                <h2 class="font-semibold text-gray-800 text-3xl leading-tight">
                    Appointment request received
                </h2>
                <p class="mt-4 text-gray-600">
                    Your appointment has been successfully created. We have received your information, and we will send you an email confirmation as soon as possible.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
