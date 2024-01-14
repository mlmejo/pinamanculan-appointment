<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Pinamanculan Appointment System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-2xl font-bold mb-4">Greetings, {{ $appointment->name }},</h1>

    <p class="mb-4">
        We hope this message finds you well. We're delighted to inform you that your appointment request, submitted on
        {{ $appointment->created_at->format('F j, Y \a\t g:i A') }}, with the purpose of
        <strong class="text-blue-500">{{ $appointment->service->name }}</strong>,
        has been successfully approved.
    </p>

    <p class="mb-4">
        To finalize the appointment, we kindly request you to visit the Barangay Hall at your earliest convenience. Our team is ready to assist you and ensure a smooth process.
    </p>

    <p class="mb-4">
        Should you have any questions or require further assistance, feel free to contact us. We look forward to seeing you at the Barangay Hall.
    </p>

    <p>
        Best regards,<br>
        Pinamanculan Barangay Council
    </p>
</body>
</html>
