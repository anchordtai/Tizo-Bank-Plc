<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Tizo Bank</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
<!-- TailwindCSS CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-900">
    <!-- Video background -->
    <video class="video-background" src="{{ asset('videos/tizo-bank-background.mp4') }}" autoplay loop muted>
        Your browser does not support the video tag.
    </video>

    <!-- Navigation bar -->
    <nav class="navbar">
        <div class="flex items-center">
            <img src="{{ asset('images/tizo-logo.png') }}" alt="Tizo Bank Logo" class="mr-3 logo">
            <span class="text-2xl font-bold text-white">Tizo Bank Plc</span>
        </div>
        <div>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="content">
        <h1 class="mb-6 text-4xl font-bold">Welcome to Tizo Bank Plc</h1>
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="inline-block px-4 py-2 text-white transition duration-300 bg-blue-500 rounded hover:bg-blue-600">Login</a>
            <a href="{{ route('register') }}" class="inline-block px-4 py-2 text-white transition duration-300 bg-green-500 rounded hover:bg-green-600">Register</a>
        </div>
    </div>

    <!--ourservices-->



    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
