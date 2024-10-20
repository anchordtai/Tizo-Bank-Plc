<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Open Bank Account | Tizo-Bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <style>
        body {
            background: linear-gradient(135deg, #f0f0f0, #c0c0c0);
        }
        .form-container {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="p-4 bg-gray-800">
        <div class="container flex items-center justify-between mx-auto">
            <a href="{{ route('home') }}" class="text-lg font-semibold text-white">Tizo-Bank</a>
            <div class="flex items-center space-x-4">
                <a href="{{ route('home') }}" class="text-white hover:underline">Home</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-white hover:underline">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Flash Message -->
    <div class="container mx-auto mt-6">
        @if(session('success'))
            <div class="p-4 text-white bg-green-500 rounded-lg shadow-lg">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <!-- Form Container -->
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-lg p-8 bg-white rounded-lg shadow-lg form-container">
            <h2 class="mb-6 text-2xl font-bold text-center">Open a Bank Account</h2>
            <form action="{{ route('account.open') }}" method="POST">
                @csrf
                <!-- Full Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" required class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" id="phone" name="phone" required class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                </div>

                <!-- Account Type -->
                <div class="mb-4">
                    <label for="account_type" class="block text-sm font-medium text-gray-700">Account Type</label>
                    <select id="account_type" name="account_type" required class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                        <option value="savings">Savings Account</option>
                        <option value="current">Current Account</option>
                        <option value="business">Business Account</option>
                    </select>
                </div>

                <!-- BVN -->
                <div class="mb-4">
                    <label for="bvn" class="block text-sm font-medium text-gray-700">BVN</label>
                    <input type="text" id="bvn" name="bvn" required class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" minlength="11" maxlength="11">
                </div>

                <!-- Identity Card Selection -->
                <div class="mb-4">
                    <label for="identity_card" class="block text-sm font-medium text-gray-700">Identity Card</label>
                    <select id="identity_card" name="identity_card" required class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                        <option value="nin">NIN</option>
                        <option value="voters_card">Voter's Card</option>
                        <option value="passport">International Passport</option>
                    </select>
                </div>

                <!-- Identity Number -->
                <div class="mb-4">
                    <label for="identity_number" class="block text-sm font-medium text-gray-700">Identity Number</label>
                    <input type="text" id="identity_number" name="identity_number" required class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full px-4 py-2 font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-700">Open Account</button>
            </form>
        </div>
    </div>

    
</body>
</html>
