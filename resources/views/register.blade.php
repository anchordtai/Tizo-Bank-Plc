<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Tizo Bank</title>
    <!-- TailwindCSS CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    {!! NoCaptcha::renderJs() !!}
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="p-4 text-center text-white bg-blue-600">
        <div class="container mx-auto">
            <img src="{{ asset('/images/logo.png') }}" alt="Tizo Bank Logo" class="h-12 mx-auto">
            <h1 class="text-3xl font-bold">Tizo Bank</h1>
            <nav class="mt-2">
                <a href="/" class="px-4 text-white hover:text-gray-200">Home</a>
                <a href="/about" class="px-4 text-white hover:text-gray-200">About Us</a>
                <a href="/services" class="px-4 text-white hover:text-gray-200">Services</a>
                <a href="/contact" class="px-4 text-white hover:text-gray-200">Contact Us</a>
                <a href="{{ route('login') }}" class="px-4 text-white hover:text-gray-200">Login</a>
                
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container px-4 py-8 mx-auto">
        <div class="max-w-md p-8 mx-auto bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-2xl font-bold">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>

                <div class="mb-4">
                    {!! NoCaptcha::display() !!}
                </div>

                <button type="submit" class="w-full py-2 text-white transition duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                    Register
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="p-4 mt-8 text-white bg-blue-600">
        <div class="container mx-auto text-center">
            <h3 class="mb-2 text-xl font-bold">Contact Information</h3>
            <p class="mb-2"><i class="fas fa-envelope"></i> support@tizobank.com</p>
            <p class="mb-2"><i class="fas fa-phone"></i> +2 (348) 12222-3840</p>
            <p class="mb-2"><i class="fas fa-map-marker-alt"></i> 123 Tizo Bank Street, Nyanya Abuja, Nigeria. </p>
            <div class="mt-4">
                <a href="https://www.facebook.com" class="mx-2 text-white hover:text-gray-200"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com" class="mx-2 text-white hover:text-gray-200"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com" class="mx-2 text-white hover:text-gray-200"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com" class="mx-2 text-white hover:text-gray-200"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
