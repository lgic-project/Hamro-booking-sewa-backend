<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hamro Booking Sewa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ url('/') }}" class="text-xl font-bold text-gray-900">Hamro Booking Sewa</a>
                    </div>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                        <script>
                            window.location.href = "{{ url('/add') }}";
                        </script>
                        @else
                        <a href="{{ route('login') }}" class="text-gray-800 hover:text-gray-600">Login</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-800 hover:text-gray-600">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-white shadow-2xl rounded-lg p-10 m-8 max-w-xl mx-auto text-center transform transition duration-500 hover:scale-105">
        <h1 class="text-4xl font-extrabold mb-6 drop-shadow-lg">Welcome to Hamro Booking Sewa</h1>
        <p class="text-lg font-medium">Please Login/Register to continue</p>
    </div>

</body>

</html>