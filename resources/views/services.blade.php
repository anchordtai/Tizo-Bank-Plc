<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Tizo Bank</title>
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
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container px-4 py-8 mx-auto">
        <div class="max-w-4xl p-6 mx-auto overflow-hidden bg-white rounded-lg shadow-md">
            <h2 class="mb-4 text-2xl font-bold">Our Services</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div class="p-4 bg-gray-100 rounded-lg shadow">
                    <h3 class="mb-2 text-xl font-bold">Personal Banking</h3>
                    <p class="text-gray-700">
                        Our personal banking services include savings accounts, checking accounts, personal loans, and more. We offer a range of products to help you manage your finances effectively.
                    </p>
                </div>
                <div class="p-4 bg-gray-100 rounded-lg shadow">
                    <h3 class="mb-2 text-xl font-bold">Business Banking</h3>
                    <p class="text-gray-700">
                        Our business banking services are designed to help businesses of all sizes. We offer business accounts, commercial loans, cash management solutions, and more to support your business growth.
                    </p>
                </div>
                <div class="p-4 bg-gray-100 rounded-lg shadow">
                    <h3 class="mb-2 text-xl font-bold">Investment Services</h3>
                    <p class="text-gray-700">
                        Our investment services include wealth management, retirement planning, and investment advisory services. We provide tailored solutions to help you achieve your financial goals.
                    </p>
                </div>
                <div class="p-4 bg-gray-100 rounded-lg shadow">
                    <h3 class="mb-2 text-xl font-bold">Online Banking</h3>
                    <p class="text-gray-700">
                        Our online banking platform allows you to manage your accounts, pay bills, transfer funds, and more from the comfort of your home. Enjoy secure and convenient banking with Tizo Bank.
                    </p>
                </div>
                <div class="p-4 bg-gray-100 rounded-lg shadow">
                    <h3 class="mb-2 text-xl font-bold">Credit Cards</h3>
                    <p class="text-gray-700">
                        We offer a range of credit cards with various benefits and rewards. Whether you are looking for cashback, travel rewards, or low interest rates, we have a card that suits your needs.
                    </p>
                </div>
                <div class="p-4 bg-gray-100 rounded-lg shadow">
                    <h3 class="mb-2 text-xl font-bold">Mortgage Services</h3>
                    <p class="text-gray-700">
                        Our mortgage services include home loans, refinancing options, and home equity lines of credit. We provide competitive rates and personalized service to help you purchase or refinance your home.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Security Center -->
    <div class="container px-4 py-8 mx-auto">
        <div class="max-w-4xl p-6 mx-auto overflow-hidden bg-white rounded-lg shadow-md">
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
