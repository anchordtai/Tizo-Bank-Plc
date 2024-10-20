<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tizo Bank</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
<!-- TailwindCSS CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

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
                <a href="/contact" class="px-4 text-white hover:text-gray-200">Contact Us</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container px-4 py-8 mx-auto">
        <div class="max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-md">
            <div class="p-6">
                <h2 class="mb-4 text-2xl font-bold">Login to Tizo Bank</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 text-white transition duration-300 bg-blue-500 rounded hover:bg-blue-600">Login</button>
                    </div>
                </form>
                <div class="mt-4">
                    <a href="{{ route('password.request') }}" class="text-blue-500 hover:text-blue-600">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Security Center -->
    <div class="container px-4 py-8 mx-auto">
        <div class="max-w-md p-6 mx-auto overflow-hidden bg-white rounded-lg shadow-md">
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
            <p class="mb-2"><i class="fas fa-phone"></i> +2 (348) 12222-3840</p>
            <p class="mb-2"><i class="fas fa-map-marker-alt"></i> 123 Tizo Bank Street, Financial District, New York, NY</p>
            <div class="mt-4">
            </div>
        </div>
    </footer>
    </html>
