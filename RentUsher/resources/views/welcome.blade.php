@extends('layouts.app')

@section('title', 'Welcome to RentUsher')

@section('content')
<style>
    html { scroll-behavior: smooth; }

    /* Hide scrollbars for horizontal scroll on most browsers */
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }

    /* Smooth hover scale for cards */
    .hover-scale:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
        box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
    }

    /* Tab active underline animation */
    nav a {
        position: relative;
        padding-bottom: 0.5rem;
    }
    nav a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 3px;
        background: #2563eb; /* Tailwind blue-600 */
        transition: width 0.3s ease, left 0.3s ease;
        border-radius: 2px;
    }
    nav a:hover::after,
    nav a.active::after {
        width: 100%;
        left: 0;
    }
</style>

<!-- Sticky Top Tab Navigation with active link highlight -->
<div class="sticky top-0 bg-white bg-opacity-95 shadow z-40">
    <nav id="top-nav" class="max-w-screen-xl mx-auto flex space-x-8 px-2 md:px-6 py-4 border-b border-gray-300 select-none">
        <a href="#home" class="text-blue-600 font-semibold active">Home</a>
        <a href="#features" class="text-gray-700 hover:text-blue-600">Features</a>
        <a href="#about" class="text-gray-700 hover:text-blue-600">About Us</a>
        <a href="#contact" class="text-gray-700 hover:text-blue-600">Contact</a>
    </nav>
</div>

<!-- Main Content -->
<div class="max-w-screen-xl mx-auto py-12 space-y-24 px-4 md:px-8">

    <!-- Home Section -->
    <section id="home" class="min-h-screen flex flex-col md:flex-row items-center justify-between bg-white bg-opacity-95 rounded-xl shadow-lg p-12 max-w-full mx-auto">
        <div class="flex-1 space-y-6">
            <h1 class="text-6xl font-extrabold text-blue-700 leading-tight drop-shadow-md">
                Welcome to <span class="text-indigo-600">RentUsher</span>
            </h1>
            <p class="text-gray-700 text-xl max-w-lg leading-relaxed">
                Manage your rent payments easily and securely. Track payments, receive reminders, and keep everything organized in one place.
            </p>
            <a href="{{ route('register') }}" class="inline-block bg-indigo-600 text-white px-10 py-4 rounded-lg font-semibold shadow-lg hover:bg-indigo-700 transition transform hover:scale-105">
                Get Started
            </a>
        </div>
        <div class="flex-1 flex justify-center mt-12 md:mt-0">
            <img src="/images/hero-rentusher.jpg" alt="RentUsher Hero" class="rounded-3xl shadow-2xl w-full max-w-lg object-cover">
        </div>
    </section>

    <!-- Features Section with Horizontal Scroll & Icons -->
    <section id="features" class="bg-white bg-opacity-95 rounded-xl shadow-lg p-12 max-w-full mx-auto">
        <h2 class="text-5xl font-bold mb-10 text-blue-700 text-center drop-shadow-sm">Features</h2>
        <div class="flex space-x-8 overflow-x-auto scrollbar-hide py-6 px-2">
            @foreach ([
                ['icon' => '💡', 'title' => 'Easy Tracking', 'desc' => 'Track rent payments effortlessly.'],
                ['icon' => '⏰', 'title' => 'Automated Reminders', 'desc' => 'Never miss a due date again.'],
                ['icon' => '🔒', 'title' => 'Secure Communication', 'desc' => 'Chat safely with tenants and landlords.'],
                ['icon' => '📊', 'title' => 'Reports & History', 'desc' => 'Detailed payment reports at your fingertips.'],
                ['icon' => '📱', 'title' => 'Mobile Friendly', 'desc' => 'Manage on the go with our responsive design.'],
            ] as $feature)
                <div class="min-w-[300px] bg-indigo-50 rounded-xl p-8 shadow-md flex-shrink-0 flex flex-col items-center text-center hover-scale cursor-pointer select-none">
                    <div class="text-6xl mb-6">{{ $feature['icon'] }}</div>
                    <h3 class="text-3xl font-semibold mb-3 text-indigo-700">{{ $feature['title'] }}</h3>
                    <p class="text-gray-700 text-lg">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- About Us Section with Image & Text -->
    <section id="about" class="bg-white bg-opacity-95 rounded-xl shadow-lg p-12 max-w-full mx-auto">
        <h2 class="text-5xl font-bold mb-10 text-blue-700 text-center drop-shadow-sm">About Us</h2>
        <div class="flex flex-col md:flex-row items-center gap-12 max-w-6xl mx-auto">
            <div class="flex-1 space-y-6">
                <p class="text-gray-700 text-xl leading-relaxed">
                    RentUsher was founded to simplify rent management for landlords and tenants. Our team is dedicated to building secure, user-friendly tools to make rental payments transparent and hassle-free.
                </p>
                <p class="text-gray-700 text-xl leading-relaxed">
                    We believe in clear communication, timely payments, and empowering property owners and renters with the best technology.
                </p>
            </div>
            <div class="flex-1">
                <img src="/images/about-us.jpg" alt="About Us" class="rounded-3xl shadow-xl object-cover w-full max-w-md mx-auto">
            </div>
        </div>
    </section>

    <!-- Contact Section with Form -->
    <section id="contact" class="bg-white bg-opacity-95 rounded-xl shadow-lg p-12 max-w-full mx-auto">
        <h2 class="text-5xl font-bold mb-10 text-blue-700 text-center drop-shadow-sm">Contact Us</h2>
        <div class="max-w-3xl mx-auto">
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Name</label>
                    <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition" placeholder="Your full name">
                </div>
                <div>
                    <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition" placeholder="you@example.com">
                </div>
                <div>
                    <label for="message" class="block text-lg font-medium text-gray-700 mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition" placeholder="Write your message here..."></textarea>
                </div>
                <button type="submit" class="bg-indigo-600 text-white px-8 py-4 rounded-lg font-semibold shadow-lg hover:bg-indigo-700 transition transform hover:scale-105">
                    Send Message
                </button>
            </form>
        </div>
    </section>

</div>

<script>
    // Highlight active nav link on scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('nav a');

    window.addEventListener('scroll', () => {
        let scrollY = window.pageYOffset;

        sections.forEach(section => {
            const sectionHeight = section.offsetHeight;
            const sectionTop = section.offsetTop - 100;
            const sectionId = section.getAttribute('id');

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + sectionId) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });
</script>

@endsection
