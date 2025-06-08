@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Login to your account</h2>

<form method="POST" action="{{ route('login') }}" class="space-y-6">
    @csrf

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
        @error('email')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input id="password" type="password" name="password" required
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
        @error('password')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-between">
        <label class="inline-flex items-center">
            <input type="checkbox" name="remember" class="form-checkbox text-blue-600" />
            <span class="ml-2 text-sm text-gray-600">Remember me</span>
        </label>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">
                Forgot your password?
            </a>
        @endif
    </div>

    <button type="submit"
        class="w-full bg-blue-600 text-white py-3 rounded-md font-semibold hover:bg-blue-700 transition">
        Log In
    </button>
</form>

<p class="mt-6 text-center text-sm text-gray-600">
    Don't have an account?
    <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register here</a>
</p>
@endsection
