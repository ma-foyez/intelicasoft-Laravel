@props([
    'transparent' => false,
    'fixed' => true,
    'class' => '',
])

@php
$classes = collect([
    'w-full transition-all duration-300 z-50',
    $fixed ? 'fixed top-0 left-0 right-0' : '',
    $transparent ? 'bg-transparent' : 'bg-white/90 dark:bg-gray-900/90 backdrop-blur-md border-b border-gray-200/20 dark:border-gray-700/20',
    'intelica-navbar',
    $class,
])->filter()->implode(' ');
@endphp

<header {{ $attributes->merge(['class' => $classes]) }}>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 lg:h-20">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="intelica-icon-glow">
                        <i class="fas fa-rocket text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="text-xl lg:text-2xl font-bold intelica-gradient-text">
                            {{ config('app.name', 'Intelica Soft') }}
                        </h1>
                        <p class="text-xs text-gray-600 dark:text-gray-400 hidden lg:block">
                            <i class="fas fa-code mr-1"></i>
                            Intelligent Software Solutions
                        </p>
                    </div>
                </a>
            </div>

            <!-- Navigation Menu (Desktop) -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
                <a href="{{ route('services.index') }}" class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">
                    Services
                </a>
                <a href="{{ route('projects.index') }}" class="nav-link {{ request()->routeIs('projects.*') ? 'active' : '' }}">
                    Portfolio
                </a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </nav>

            <!-- Right Side Actions -->
            <div class="flex items-center space-x-4">
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

                <!-- Get Quote Button -->
                <x-intelica-button
                    href="{{ route('contact') }}"
                    size="sm"
                    class="hidden lg:inline-flex"
                >
                    Get Quote
                </x-intelica-button>

                <!-- Mobile Menu Toggle -->
                <button
                    type="button"
                    class="md:hidden p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                >
                    <i class="fas fa-bars" x-show="!mobileMenuOpen"></i>
                    <i class="fas fa-times" x-show="mobileMenuOpen" x-cloak></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div
        class="md:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 shadow-lg"
        x-data="{ mobileMenuOpen: false }"
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        x-cloak
    >
        <nav class="px-4 py-6 space-y-4">
            <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                <i class="fas fa-home mr-3"></i>
                Home
            </a>
            <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                <i class="fas fa-user mr-3"></i>
                About
            </a>
            <a href="{{ route('services.index') }}" class="mobile-nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">
                <i class="fas fa-cogs mr-3"></i>
                Services
            </a>
            <a href="{{ route('projects.index') }}" class="mobile-nav-link {{ request()->routeIs('projects.*') ? 'active' : '' }}">
                <i class="fas fa-briefcase mr-3"></i>
                Portfolio
            </a>
            <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                <i class="fas fa-envelope mr-3"></i>
                Contact
            </a>

            <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                <x-intelica-button href="{{ route('contact') }}" class="w-full">
                    Get Quote
                </x-intelica-button>
            </div>
        </nav>
    </div>
</header>

<style>
.nav-link {
    @apply text-gray-700 dark:text-gray-300 hover:text-intelica-500 dark:hover:text-intelica-400 font-medium transition-colors duration-200 relative;
}

.nav-link.active {
    @apply text-intelica-500 dark:text-intelica-400;
}

.nav-link.active::after {
    content: '';
    @apply absolute -bottom-1 left-0 right-0 h-0.5 bg-gradient-to-r from-intelica-500 to-accent-500 rounded-full;
}

.mobile-nav-link {
    @apply flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:text-intelica-500 dark:hover:text-intelica-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg font-medium transition-all duration-200;
}

.mobile-nav-link.active {
    @apply text-intelica-500 dark:text-intelica-400 bg-intelica-50 dark:bg-intelica-900/20;
}

.intelica-navbar.scrolled {
    @apply bg-white/95 dark:bg-gray-900/95 shadow-lg;
}
</style>
