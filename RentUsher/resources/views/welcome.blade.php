@extends('layouts.app')

@section('title', 'Welcome to RentUsher')

@section('content')
<style>
    html { scroll-behavior: smooth; }
    /* Optional: Hide scrollbars for horizontal scroll sections */
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<!-- Sticky Top Tab Navigation -->
<div class="sticky top-0 bg-white bg-opacity-90 shadow z-30">
    <nav class="container mx-auto flex space-x-8 px-4 py-3 border-b border-gray-200">
        <a href="#home" class="text-blue-600 font-semibold hover:text-blue-800 pb-2 border-b-2 border-blue-600">Home</a>
        <a href="#features" class="text-gray-700 hover:text-blue-600 pb-2">Features</a>
        <a href="#about" class="text-gray-700 hover:text-blue-600 pb-2">About Us</a>
        <a href="#testimonials" class="text-gray-700 hover:text-blue-600 pb-2">Testimonials</a>
        <a href="#contact" class="text-gray-700 hover:text-blue-600 pb-2">Contact</a>
    </nav>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-8 space-y-16">

    <!-- Home Section -->
    <section id="home" class="min-h-screen flex flex-col md:flex-row items-center justify-between bg-white bg-opacity-95 rounded-lg shadow-lg p-8">
        <div class="flex-1">
            <h1 class="text-5xl font-bold mb-6 text-blue-700">Welcome to RentUsher</h1>
            <p class="mb-6 text-gray-700 text-lg">Manage your rent payments easily and securely. Track payments, receive reminders, and keep everything organized in one place.</p>
            <a href="{{ route('register') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition">Get Started</a>
        </div>
        <div class="flex-1 flex justify-center mt-8 md:mt-0">
            <img src="/images/hero-rentusher.jpg" alt="RentUsher Hero" class="rounded-xl shadow-lg w-full max-w-md">
        </div>
    </section>

    <!-- Features Section with Horizontal Scroll -->
    <section id="features" class="bg-white bg-opacity-95 rounded-lg shadow-lg p-8">
        <h2 class="text-4xl font-semibold mb-6 text-blue-600">Features</h2>
        <div class="flex space-x-6 overflow-x-auto scrollbar-hide py-4">
            @foreach ([
                ['img' => '/images/feature1.png', 'title' => 'Easy Tracking', 'desc' => 'Track rent payments effortlessly.'],
                ['img' => '/images/feature2.png', 'title' => 'Automated Reminders', 'desc' => 'Never miss a due date again.'],
                ['img' => '/images/feature3.png', 'title' => 'Secure Communication', 'desc' => 'Chat safely with tenants and landlords.'],
                ['img' => '/images/feature4.png', 'title' => 'Reports & History', 'desc' => 'Detailed payment reports at your fingertips.'],
                ['img' => '/images/feature5.png', 'title' => 'Mobile Friendly', 'desc' => 'Manage on the go with our responsive design.'],
            ] as $feature)
                <div class="min-w-[280px] bg-blue-50 rounded-lg p-6 shadow-md flex-shrink-0 flex flex-col items-center">
                    <img src="{{ $feature['img'] }}" alt="{{ $feature['title'] }}" class="w-20 h-20 mb-4">
                    <h3 class="text-2xl font-bold mb-2 text-blue-700">{{ $feature['title'] }}</h3>
                    <p class="text-gray-700 text-center">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="bg-white bg-opacity-95 rounded-lg shadow-lg p-8">
        <h2 class="text-4xl font-semibold mb-6 text-blue-600">About Us</h2>
        <div class="flex flex-col md:flex-row items-center">
            <div class="flex-1 mb-6 md:mb-0">
                <p class="text-gray-700 text-lg mb-4">
                    RentUsher was founded to simplify rent management for landlords and tenants. Our team is dedicated to building secure, user-friendly tools to make rental payments transparent and hassle-free.
                </p>
                <p class="text-gray-700 text-lg">
                    We believe in clear communication, timely payments, and empowering property owners and renters with the best technology.
                </p>
            </div>
            <div class="flex-1 flex justify-center">
                <img src="/images/about-us.jpg" alt="About Us" class="rounded-xl shadow-lg w-full max-w-sm">
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-white bg-opacity-95 rounded-lg shadow-lg p-8">
        <h2 class="text-4xl font-semibold mb-6 text-blue-600">Testimonials</h2>
        <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-8">
            <blockquote class="border-l-4 border-blue-600 pl-6 italic text-gray-700 bg-blue-50 rounded-lg p-4 flex-1">
                "RentUsher has made managing my rental properties so much easier. I never miss a payment now!" – Jane D.
            </blockquote>
            <blockquote class="border-l-4 border-blue-600 pl-6 italic text-gray-700 bg-blue-50 rounded-lg p-4 flex-1">
                "The reminders and payment tracking saved me countless hours. Highly recommended." – Mark S.
            </blockquote>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-white bg-opacity-95 rounded-lg shadow-lg p-8">
        <h2 class="text-4xl font-semibold mb-6 text-blue-600">Contact Us</h2>
        <p class="text-gray-700 text-lg">
            Have questions? Reach out to our support team at
            <a href="mailto:support@rentusher.com" class="text-blue-600 underline">support@rentusher.com</a>.
        </p>
    </section>

</div>
@endsection
