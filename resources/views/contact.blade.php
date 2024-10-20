<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Tizo Bank</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
<!-- TailwindCSS CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<!--favicon-->
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="p-4 text-center text-white bg-blue-600">
        <div class="container mx-auto">
            <img src="{{ asset('images/tizo-logo.png') }}" alt="Tizo Bank Logo" class="h-12 mx-auto">
            <h1 class="text-3xl font-bold">Tizo Bank</h1>
            <nav class="mt-2">
                <a href="/home" class="px-4 text-white hover:text-gray-200">Home</a>
                <a href="/about" class="px-4 text-white hover:text-gray-200">About Us</a>
                <a href="/services" class="px-4 text-white hover:text-gray-200">Our Services</a>
            </nav>
        </div>
    </header>

    <div class="container px-4 py-8 mx-auto">
        <div class="max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-md">
            <div class="p-6">
                <h2 class="mb-4 text-2xl font-bold">Contact Us</h2>
                <p class="mb-4 text-gray-700">Have questions or need assistance? Reach out to us using the form below.</p>
                @if (session('success'))
                    <div class="p-2 mb-4 text-white bg-green-500 rounded">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 text-white transition duration-300 bg-blue-500 rounded hover:bg-blue-600">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="p-4 mt-8 text-white bg-blue-600">
        <div class="container mx-auto text-center">
            <h3 class="mb-2 text-xl font-bold">Contact Information</h3>
            <p class="mb-2"><i class="fas fa-envelope"></i> support@tizobank.com</p>
            <p class="mb-2"><i class="fas fa-phone"></i> +2 (348) 12222-3840</p>
            <p class="mb-2"><i class="fas fa-map-marker-alt"></i> 123 Tizo Bank Street, Financial District, New York, NY</p>
            <div class="mt-4">
                <a href="#" class="px-2 text-white hover:text-gray-200"><i class="fab fa-facebook"></i></a>
                <a href="#" class="px-2 text-white hover:text-gray-200"><i class="fab fa-twitter"></i></a>
                <a href="#" class="px-2 text-white hover:text-gray-200"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="px-2 text-white hover:text-gray-200"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="mt-4">&copy; 2024 Tizo Bank Plc. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
