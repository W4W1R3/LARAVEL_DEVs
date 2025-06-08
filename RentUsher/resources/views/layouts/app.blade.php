<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'RentUsher')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[url('/images/background.jpg')] bg-cover bg-center bg-no-repeat font-sans leading-normal tracking-normal">

    <nav class="bg-white bg-opacity-80 shadow p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-blue-600">RentUsher</a>

            <div>
                @auth
                    <!-- Authenticated user dropdown here -->
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 mr-4">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-10 px-4 bg-white bg-opacity-80 rounded-lg p-6 shadow-lg">
        @yield('content')
    </main>

</body>
</html>
