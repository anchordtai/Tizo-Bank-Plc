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
<!--favicon-->
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="py-4 bg-white shadow-lg">
        <div class="container flex items-center justify-between mx-auto">
            <a href="{{ url('/') }}" class="text-xl font-bold">Tizo-Bank</a>
            <ul class="flex space-x-6">
                <li><a href="/services" class="hover:text-blue-500">Services</a></li>
                <li><a href="/about" class="hover:text-blue-500">About</a></li>
                <li><a href="/contact" class="hover:text-blue-500">Contact</a></li>
                @guest
                    <li><a href="{{ route('login') }}" class="hover:text-blue-500">Login</a></li>
                    <li><a href="{{ route('register') }}" class="hover:text-blue-500">Register</a></li>
                @else
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="hover:text-blue-500">Logout</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>


     <!-- Flash Message -->
     @if(session('success'))
     <div class="container mx-auto mt-4">
         <div class="p-4 text-white bg-green-500 rounded-lg shadow-lg">
             {{ session('success') }}
         </div>
     </div>
 @endif
    <!-- Hero Slider -->
    <section id="hero" class="py-20 text-white bg-blue-600">
        <div class="container mx-auto text-center">
            <div class="slider">
                <div class="slide">
                    <h1 class="text-4xl font-bold">Global Banking Solutions</h1>
                    <p class="mt-4">Innovative, secure, and personalized banking.</p>
                    <a href="{{ route('account.open') }}" class="inline-block px-6 py-3 mt-6 text-blue-600 bg-white rounded-full">Open an Account</a>
                </div>
                <div class="slide">
                    <h1 class="text-4xl font-bold">Fast and Secure Transactions</h1>
                    <p class="mt-4">Your financial freedom at your fingertips.</p>
                    <a href="/services" class="inline-block px-6 py-3 mt-6 text-blue-600 bg-white rounded-full">Explore Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">About Tizo-Bank</h2>
            <p class="mt-4">Tizo-Bank is a leading global bank, offering secure and convenient financial services for individuals and businesses around the world.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Our Services</h2>
            <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-3">
                <div class="p-6 bg-white shadow-lg service-card">
                    <h3 class="text-xl font-bold">Personal Banking</h3>
                    <p class="mt-4">Secure, flexible, and easy-to-use personal banking services tailored for you.</p>
                </div>
                <div class="p-6 bg-white shadow-lg service-card">
                    <h3 class="text-xl font-bold">Business Banking</h3>
                    <p class="mt-4">Customized banking solutions to help your business grow globally.</p>
                </div>
                <div class="p-6 bg-white shadow-lg service-card">
                    <h3 class="text-xl font-bold">Mobile Banking</h3>
                    <p class="mt-4">Stay connected with our mobile banking app, available 24/7.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">What Our Clients Say</h2>
            <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2">
                <div class="p-6 bg-white shadow-lg testimonial">
                    <p>"Tizo-Bank has transformed my business with fast and reliable banking solutions."</p>
                    <h4 class="mt-4 font-bold">- John Doe, Business Owner</h4>
                </div>
                <div class="p-6 bg-white shadow-lg testimonial">
                    <p>"I love how easy it is to manage my personal finances with Tizo-Bank's mobile app."</p>
                    <h4 class="mt-4 font-bold">- Jane Smith, Customer</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action: Subscribe to Our News -->
<section id="cta" class="py-20 text-center text-white bg-blue-600">
    <h2 class="text-3xl font-bold">Subscribe to Our News</h2>
    <p class="mt-4">Stay updated with the latest news and updates from Tizo-Bank. Sign up for our newsletter today!</p>

    <!-- Subscription Form -->
    <form action="{{ route('subscribe') }}" method="POST" class="flex justify-center mt-6 space-x-4">
        @csrf
        <input type="email" name="email" placeholder="Enter your email" required
               class="px-4 py-2 text-black rounded-full focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
        <button type="submit" class="px-6 py-2 text-blue-600 bg-white rounded-full hover:bg-gray-200">
            Subscribe
        </button>
    </form>

    <!-- Subscription confirmation message -->
    @if(session('success'))
        <p class="mt-4 text-green-400">{{ session('success') }}</p>
    @endif
</section>

    <!-- Footer -->
    <footer class="py-10 text-white bg-gray-800">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Tizo-Bank. All rights reserved.</p>
            <ul class="flex justify-center mt-4 space-x-4">
                <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                <li><a href="#" class="hover:underline">Terms of Service</a></li>
                <li><a href="/contact" class="hover:underline">Contact Us</a></li>
            </ul>
        </div>
    </footer>

    <!-- JavaScript for Slider (example using basic JS or you can use a slider library) -->
    <script>
        let slides = document.querySelectorAll('.slide');
        let index = 0;

        function showSlide() {
            slides.forEach((slide, i) => {
                slide.style.display = i === index ? 'block' : 'none';
            });
            index = (index + 1) % slides.length;
        }

        setInterval(showSlide, 5000); // Change slide every 5 seconds
    </script>
</body>
</html>
