<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Panel') - {{ config('app.name', 'Intelica Soft') }}</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a2b5e6b5f1.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')

    <style>
        /* Admin Panel Specific Styles */
        .admin-wrapper {
            min-height: 100vh;
            display: flex;
        }

        .admin-content {
            flex: 1;
            margin-left: 16rem; /* 256px / 16 = 16rem */
            transition: margin-left 0.3s ease;
        }

        .admin-content.collapsed {
            margin-left: 4rem; /* 64px / 16 = 4rem */
        }

        @media (max-width: 768px) {
            .admin-content {
                margin-left: 0;
            }
        }

        /* Custom scrollbar for admin panel */
        .admin-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .admin-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        .admin-scrollbar::-webkit-scrollbar-thumb {
            background: #00b4ff;
            border-radius: 3px;
        }

        .dark .admin-scrollbar::-webkit-scrollbar-track {
            background: #374151;
        }
    </style>
</head>
<body class="font-poppins bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 antialiased" x-data="{ sidebarCollapsed: false }">
    <div class="admin-wrapper">
        <!-- Sidebar -->
        <x-intelica-sidebar />

        <!-- Mobile Sidebar Overlay -->
        <div
            class="fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden"
            x-show="!sidebarCollapsed"
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="sidebarCollapsed = true"
        ></div>

        <!-- Main Content Area -->
        <div class="admin-content" :class="{ 'collapsed': sidebarCollapsed }">
            <!-- Top Header Bar -->
            <header class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 px-6 py-4">
                <div class="flex items-center justify-between">
                    <!-- Page Title and Breadcrumb -->
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                            @yield('page-title', 'Dashboard')
                        </h1>
                        @hasSection('breadcrumb')
                            <nav class="mt-1">
                                <ol class="flex items-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
                                    @yield('breadcrumb')
                                </ol>
                            </nav>
                        @endif
                    </div>

                    <!-- Header Actions -->
                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <div class="relative" x-data="{ open: false }">
                            <button
                                type="button"
                                class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors relative"
                                @click="open = !open"
                            >
                                <i class="fas fa-bell text-gray-600 dark:text-gray-400"></i>
                                @if ($unreadNotifications = 3) {{-- Replace with actual count --}}
                                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">
                                        {{ $unreadNotifications }}
                                    </span>
                                @endif
                            </button>

                            <!-- Notifications Dropdown -->
                            <div
                                class="absolute right-0 mt-2 w-80 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 z-50"
                                x-show="open"
                                x-transition
                                @click.away="open = false"
                                style="display: none;"
                            >
                                <div class="p-4 border-b border-gray-200 dark:border-gray-700">
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Notifications</h3>
                                </div>
                                <div class="max-h-64 overflow-y-auto">
                                    <!-- Sample notification -->
                                    <div class="p-4 border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-2 h-2 bg-intelica-500 rounded-full mt-2"></div>
                                            <div>
                                                <p class="text-sm text-gray-900 dark:text-white">New contact message received</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">2 minutes ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-t border-gray-200 dark:border-gray-700">
                                    <a href="#" class="text-sm text-intelica-500 hover:text-intelica-600">View all notifications</a>
                                </div>
                            </div>
                        </div>

                        <!-- Theme Toggle -->
                        <button
                            id="theme-toggle"
                            type="button"
                            class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors"
                            aria-label="Toggle theme"
                        >
                            <i class="fas fa-sun dark:hidden text-yellow-500"></i>
                            <i class="fas fa-moon hidden dark:block text-blue-400"></i>
                        </button>

                        <!-- View Site -->
                        <a
                            href="{{ route('home') }}"
                            target="_blank"
                            class="flex items-center space-x-2 px-4 py-2 bg-intelica-500 hover:bg-intelica-600 text-white rounded-lg transition-colors"
                        >
                            <i class="fas fa-external-link-alt text-sm"></i>
                            <span class="hidden sm:inline">View Site</span>
                        </a>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6 admin-scrollbar" style="min-height: calc(100vh - 89px);">
                <!-- Flash Messages -->
                @if(session('success'))
                    <div class="mb-6 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-700 text-green-800 dark:text-green-200 px-4 py-3 rounded-lg flex items-center space-x-2">
                        <i class="fas fa-check-circle"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-700 text-red-800 dark:text-red-200 px-4 py-3 rounded-lg flex items-center space-x-2">
                        <i class="fas fa-exclamation-circle"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                @endif

                @if(session('warning'))
                    <div class="mb-6 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-700 text-yellow-800 dark:text-yellow-200 px-4 py-3 rounded-lg flex items-center space-x-2">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>{{ session('warning') }}</span>
                    </div>
                @endif

                @if(session('info'))
                    <div class="mb-6 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-700 text-blue-800 dark:text-blue-200 px-4 py-3 rounded-lg flex items-center space-x-2">
                        <i class="fas fa-info-circle"></i>
                        <span>{{ session('info') }}</span>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Toast Notifications Container -->
    <div id="toast-container" class="fixed top-4 right-4 z-50 space-y-2"></div>

    @stack('scripts')

    <script>
        // Initialize theme toggle
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('theme-toggle');
            const html = document.documentElement;

            // Check for saved theme preference or default to light mode
            const savedTheme = localStorage.getItem('theme') || 'light';
            if (savedTheme === 'dark') {
                html.classList.add('dark');
            }

            // Toggle theme
            themeToggle.addEventListener('click', function() {
                html.classList.toggle('dark');
                const theme = html.classList.contains('dark') ? 'dark' : 'light';
                localStorage.setItem('theme', theme);
            });
        });

        // Auto-hide flash messages
        document.addEventListener('DOMContentLoaded', function() {
            const flashMessages = document.querySelectorAll('[class*="bg-green-50"], [class*="bg-red-50"], [class*="bg-yellow-50"], [class*="bg-blue-50"]');
            flashMessages.forEach(function(message) {
                setTimeout(function() {
                    message.style.transition = 'opacity 0.5s ease-out';
                    message.style.opacity = '0';
                    setTimeout(function() {
                        message.remove();
                    }, 500);
                }, 5000);
            });
        });
    </script>
</body>
</html>
