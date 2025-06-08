@extends('layouts.app')

@section('title', 'Welcome to RentUsher')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-4">Welcome to RentUsher</h1>
        <p class="mb-6 text-gray-700">Manage your rent payments easily and securely.</p>
        <a href="{{ route('register') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
            Get Started
        </a>
    </div>
@endsection
