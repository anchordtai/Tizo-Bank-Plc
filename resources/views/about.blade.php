<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Tizo Bank Plc</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
<!-- TailwindCSS CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<!--favicon-->
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
</head>

<body class="bg-gray-100">
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

    <!-- Main Content -->
    <div class="container px-4 py-8 mx-auto">
        <h1 class="mt-12 text-2xl font-bold text-center text-gray-800">About Tizo Bank Plc</h1>

        <div class="p-6 bg-white rounded-lg shadow-lg">
            <p class="text-lg leading-relaxed text-gray-700">
                Tizo Bank is committed to providing secure and reliable banking services to our customers. We are dedicated to helping our clients achieve their financial goals through personalized services and innovative solutions.
            </p>
            <p class="mt-4 text-lg leading-relaxed text-gray-700">
                Our mission is to empower individuals and businesses with innovative financial solutions. We aim to deliver a superior banking experience through our commitment to excellence, integrity, and customer satisfaction.
            </p>

            <h2 class="mt-6 mb-4 text-2xl font-bold text-gray-800">Our Values</h2>
            <ul class="text-lg text-gray-700 list-disc list-inside">
                <li class="mb-2">Customer Focus: We prioritize our customers' needs and strive to exceed their expectations.</li>
                <li class="mb-2">Integrity: We conduct our business with the highest standards of ethics and transparency.</li>
                <li class="mb-2">Innovation: We embrace change and seek innovative solutions to meet our customers' evolving needs.</li>
                <li class="mb-2">Excellence: We are committed to excellence in everything we do, from our products to our customer service.</li>
            </ul>

            <h2 class="mt-6 mb-4 text-2xl font-bold text-gray-800">Our History</h2>
            <p class="text-lg leading-relaxed text-gray-700">
                Founded in 1990, Tizo Bank has grown from a small regional bank to a leading financial institution with a global presence. Over the years, we have expanded our services and embraced new technologies to better serve our customers. Our journey has been marked by a relentless pursuit of innovation and excellence.
            </p>

            <h2 class="mt-6 mb-4 text-2xl font-bold text-gray-800">Our Team</h2>
            <p class="text-lg leading-relaxed text-gray-700">
                Our team comprises experienced professionals who are passionate about banking and dedicated to providing exceptional service. We believe in fostering a collaborative and inclusive work environment that encourages growth and development.
            </p>

            <h2 class="mt-6 mb-4 text-2xl font-bold text-gray-800">Contact Us</h2>
            <p class="text-lg leading-relaxed text-gray-700">
                We are here to assist you with all your banking needs. If you have any questions or require further information, please do not hesitate to contact us.
            </p>
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

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
