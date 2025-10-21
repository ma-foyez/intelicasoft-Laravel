<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('title', config('app.name', 'Intelica Soft') . ' - Intelligent Software Solutions')</title>
    <meta name="description" content="@yield('description', 'Intelica Soft provides innovative software solutions including web development, mobile apps, e-commerce platforms, and enterprise solutions in Khilkhet, Dhaka, Bangladesh.')">
    <meta name="keywords" content="@yield('keywords', 'software development, web development, mobile apps, e-commerce, enterprise solutions, Laravel, React, Android, iOS, Dhaka, Bangladesh')">
    <meta name="author" content="Intelica Soft">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', config('app.name', 'Intelica Soft'))">
    <meta property="og:description" content="@yield('og_description', 'Intelligent Software Solutions for Modern Businesses')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', config('app.name', 'Intelica Soft'))">
    <meta property="twitter:description" content="@yield('twitter_description', 'Intelligent Software Solutions for Modern Businesses')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('images/og-image.jpg'))">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Preconnect to external domains for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://kit.fontawesome.com">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a2b5e6b5f1.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Styles -->
    @stack('styles')

    <!-- Custom CSS for Intelica Soft Theme -->
    <style>
        /* Enhanced scrollbar styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #00b4ff, #00ff88);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #0090cc, #00cc6d);
        }

        /* Dark mode scrollbar */
        .dark ::-webkit-scrollbar-track {
            background: #1f2937;
        }

        /* Loading animation */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0a0f1e 0%, #1a1f3a 50%, #0f0a1e 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out;
        }

        .page-loader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .loader-spinner {
            width: 50px;
            height: 50px;
            border: 3px solid rgba(0, 180, 255, 0.3);
            border-top: 3px solid #00b4ff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="font-poppins bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 antialiased">
    <!-- Page Loader -->
    <div class="page-loader" id="pageLoader">
        <div class="text-center">
            <div class="loader-spinner mx-auto mb-4"></div>
            <div class="text-white">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-intelica-500/20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-rocket text-intelica-400"></i>
                    </div>
                    <span class="text-lg font-semibold">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Skip to main content (accessibility) -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-intelica-500 text-white px-4 py-2 rounded-lg z-50">
        Skip to main content
    </a>

    <!-- Header Navigation -->
    <x-intelica-header />

    <!-- Main Content -->
    <main id="main-content" class="min-h-screen pt-16 lg:pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-intelica-footer />

    <!-- Floating Action Button (Back to Top) -->
    <button
        id="backToTop"
        class="fixed bottom-6 right-6 w-12 h-12 bg-gradient-to-r from-intelica-500 to-intelica-600 hover:from-intelica-600 hover:to-intelica-700 text-white rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300 z-40 opacity-0 pointer-events-none"
        aria-label="Back to top"
    >
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Floating Orbs Container -->
    <div class="intelica-orbs-container fixed inset-0 overflow-hidden pointer-events-none z-0"></div>

    <!-- Toast Notifications Container -->
    <div id="toast-container" class="fixed top-4 right-4 z-50 space-y-2"></div>

    <!-- Scripts -->
    @stack('scripts')

    <!-- Initialize Theme Features -->
    <script>
        // Hide page loader when page is fully loaded
        window.addEventListener('load', function() {
            const loader = document.getElementById('pageLoader');
            loader.classList.add('hidden');
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        });

        // Back to top button functionality
        document.addEventListener('DOMContentLoaded', function() {
            const backToTopBtn = document.getElementById('backToTop');

            // Show/hide back to top button based on scroll position
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                    backToTopBtn.classList.add('opacity-100');
                } else {
                    backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
                    backToTopBtn.classList.remove('opacity-100');
                }
            });

            // Smooth scroll to top when clicked
            backToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });

        // Toast notification function
        window.showToast = function(type, title, message, duration = 5000) {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            const id = 'toast-' + Date.now();

            const typeClasses = {
                success: 'bg-green-500 border-green-600',
                error: 'bg-red-500 border-red-600',
                warning: 'bg-yellow-500 border-yellow-600',
                info: 'bg-intelica-500 border-intelica-600'
            };

            const typeIcons = {
                success: 'fas fa-check-circle',
                error: 'fas fa-exclamation-circle',
                warning: 'fas fa-exclamation-triangle',
                info: 'fas fa-info-circle'
            };

            toast.id = id;
            toast.className = `${typeClasses[type] || typeClasses.info} text-white px-6 py-4 rounded-lg shadow-lg border-l-4 transform translate-x-full transition-transform duration-300 max-w-sm`;

            toast.innerHTML = `
                <div class="flex items-start space-x-3">
                    <i class="${typeIcons[type] || typeIcons.info} text-lg mt-0.5"></i>
                    <div class="flex-1">
                        <h4 class="font-semibold text-sm">${title}</h4>
                        <p class="text-sm opacity-90 mt-1">${message}</p>
                    </div>
                    <button onclick="removeToast('${id}')" class="text-white/80 hover:text-white ml-2">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;

            container.appendChild(toast);

            // Animate in
            setTimeout(() => {
                toast.classList.remove('translate-x-full');
            }, 100);

            // Auto remove
            setTimeout(() => {
                removeToast(id);
            }, duration);
        };

        // Remove toast function
        window.removeToast = function(id) {
            const toast = document.getElementById(id);
            if (toast) {
                toast.classList.add('translate-x-full');
                setTimeout(() => {
                    toast.remove();
                }, 300);
            }
        };
    </script>

    <!-- Analytics (replace with your actual analytics code) -->
    @if(config('app.env') === 'production')
        <!-- Google Analytics -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'GA_MEASUREMENT_ID');
        </script> -->
    @endif
</body>
</html>
