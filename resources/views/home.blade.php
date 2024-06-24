<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tizo Bank</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!-- TailwindCSS CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="p-4 text-center text-white bg-blue-600">
        <div class="container mx-auto">
            <img src="{{ asset('images/logo.png') }}" alt="Tizo Bank Logo" class="h-12 mx-auto">
            <h1 class="text-3xl font-bold">Tizo Bank</h1>
            <nav class="mt-2">
                <a href="/" class="px-4 text-white hover:text-gray-200">Home</a>
                <a href="/about" class="px-4 text-white hover:text-gray-200">About Us</a>
                <a href="/services" class="px-4 text-white hover:text-gray-200">Services</a>
                <a href="/contact" class="px-4 text-white hover:text-gray-200">Contact Us</a>
                <a href="{{ route('login') }}" class="px-4 text-white hover:text-gray-200">Login</a>
                <a href="{{ route('register') }}" class="px-4 text-white hover:text-gray-200">Register</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container px-4 py-8 mx-auto">
        <!-- Grid Section -->
        <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2 lg:grid-cols-5">
            @foreach (range(1, 10) as $index)
            <div class="p-6 bg-white rounded-lg shadow-md">
                <h3 class="mb-2 text-xl font-bold">Feature {{ $index }}</h3>
                <p class="text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, pulvinar facilisis justo mollis, auctor consequat urna.
                </p>
            </div>
            @endforeach
        </div>

        <!-- Security Center -->
        <div class="max-w-4xl p-6 mx-auto mb-8 overflow-hidden bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-2xl font-bold">Security Center</h2>
            <p class="mb-4 text-gray-700">
                Your security is our priority. Please ensure your account details are kept secure and never shared with anyone. If you suspect any unusual activity on your account, contact our support team immediately.
            </p>
            <a href="/security-tips" class="text-blue-500 hover:text-blue-600">Learn more about keeping your account secure</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="p-4 mt-8 text-white bg-blue-600">
        <div class="container mx-auto text-center">
            <h3 class="mb-2 text-xl font-bold">Contact Information</h3>
            <p class="mb-2"><i class="fas fa-envelope"></i> support@tizobank.com</p>
            <p class="mb-2"><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
            <p class="mb-2"><i class="fas fa-map-marker-alt"></i> 123 Tizo Bank Street, Financial District, New York, NY</p>
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
