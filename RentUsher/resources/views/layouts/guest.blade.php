<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'RentUsher')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-50 flex flex-col justify-center items-center px-4">

    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <div class="mb-6 text-center">
            <a href="{{ url('/') }}" class="text-3xl font-bold text-blue-600 hover:text-blue-700 transition">
                RentUsher
            </a>
        </div>

        @yield('content')
    </div>

    <footer class="mt-8 text-center text-gray-500 text-sm select-none">
        &copy; {{ date('Y') }} RentUsher. All rights reserved.
    </footer>

</body>
</html>
