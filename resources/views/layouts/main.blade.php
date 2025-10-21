<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Elite Civil Engineering - Professional Construction & Infrastructure Solutions')</title>
    <meta name="description" content="@yield('description', 'Leading civil engineering firm specializing in residential, commercial, and infrastructure projects. Expert construction management and engineering solutions.')">
    <meta name="keywords" content="@yield('keywords', 'civil engineering, construction, infrastructure, residential projects, commercial construction, project management')">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="@yield('og_title', 'Elite Civil Engineering')">
    <meta property="og:description" content="@yield('og_description', 'Professional civil engineering and construction services')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom Global CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                        'serif': ['Playfair Display', 'Georgia', 'serif'],
                    },
                    colors: {
                        primary: {
                            50: '#fff2ed',
                            100: '#ffe2d1',
                            200: '#ffb588',
                            300: '#ff8a5c',
                            400: '#ff6b35',
                            500: '#e55a2b',
                            600: '#cc4a1f',
                            700: '#b33a13',
                            800: '#992a07',
                            900: '#7f1a00',
                        },
                        secondary: {
                            50: '#e6fffe',
                            100: '#ccfffc',
                            200: '#99fff9',
                            300: '#70d7ce',
                            400: '#4ecdc4',
                            500: '#3ba99f',
                            600: '#2d8a7a',
                            700: '#1f6b55',
                            800: '#114c30',
                            900: '#032d0b',
                        },
                    }
                }
            }
        }
    </script>

    @stack('styles')
</head>
<body class="font-sans antialiased">
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 z-50 flex items-center justify-center bg-white">
        <div class="flex flex-col items-center">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-primary-500"></div>
            <p class="mt-4 text-gray-600 font-medium">Loading...</p>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div id="page-wrapper" class="min-h-screen bg-gray-50 opacity-0 transition-opacity duration-500">

        <!-- Header -->
        @include('partials.header')

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('partials.footer')

    </div>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="scroll-to-top hidden">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div id="success-toast" class="fixed top-4 right-4 z-50 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-2"></i>
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div id="error-toast" class="fixed top-4 right-4 z-50 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg">
            <div class="flex items-center">
                <i class="fas fa-exclamation-circle mr-2"></i>
                {{ session('error') }}
            </div>
        </div>
    @endif

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Loading screen
        window.addEventListener('load', function() {
            const loadingScreen = document.getElementById('loading-screen');
            const pageWrapper = document.getElementById('page-wrapper');

            setTimeout(() => {
                loadingScreen.style.opacity = '0';
                pageWrapper.style.opacity = '1';

                setTimeout(() => {
                    loadingScreen.style.display = 'none';
                }, 500);
            }, 800);
        });

        // Scroll to top functionality
        const scrollToTopBtn = document.getElementById('scroll-to-top');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('hidden');
            } else {
                scrollToTopBtn.classList.add('hidden');
            }
        });

        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Auto-hide toast messages
        const successToast = document.getElementById('success-toast');
        const errorToast = document.getElementById('error-toast');

        if (successToast) {
            setTimeout(() => {
                successToast.style.opacity = '0';
                setTimeout(() => successToast.remove(), 300);
            }, 5000);
        }

        if (errorToast) {
            setTimeout(() => {
                errorToast.style.opacity = '0';
                setTimeout(() => errorToast.remove(), 300);
            }, 5000);
        }

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburger = document.getElementById('hamburger');

            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                hamburger.innerHTML = '<i class="fas fa-times"></i>';
            } else {
                mobileMenu.classList.add('hidden');
                hamburger.innerHTML = '<i class="fas fa-bars"></i>';
            }
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Counter animation
        function animateCounters() {
            const counters = document.querySelectorAll('[data-counter]');

            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-counter'));
                const increment = target / 100;
                let current = 0;

                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };

                // Start animation when element is in view
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                });

                observer.observe(counter);
            });
        }

        // Initialize counter animation
        document.addEventListener('DOMContentLoaded', animateCounters);
    </script>

    @stack('scripts')
</body>
</html>
