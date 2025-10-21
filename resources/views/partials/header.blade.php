<!-- Header -->
<header class="bg-white shadow-lg sticky top-0 z-40 transition-all duration-300" id="main-header">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="w-12 h-12 bg-primary-500 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-hard-hat text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">Elite Civil</h1>
                        <p class="text-sm text-gray-600">Engineering</p>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                   class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}"
                   class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
                <div class="relative group">
                    <a href="{{ route('projects.index') }}"
                       class="nav-link {{ request()->routeIs('projects.*') ? 'active' : '' }} flex items-center">
                        Projects
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <!-- Projects Dropdown -->
                    <div class="absolute top-full left-0 w-64 bg-white shadow-xl rounded-lg py-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                        <a href="{{ route('projects.index') }}"
                           class="block px-6 py-2 text-gray-700 hover:text-primary-500 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-th-large mr-2 text-primary-500"></i>
                            All Projects
                        </a>
                        <hr class="my-2">
                        <a href="{{ route('projects.category', 'residential') }}"
                           class="block px-6 py-2 text-gray-700 hover:text-primary-500 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-home mr-2 text-primary-500"></i>
                            Residential
                        </a>
                        <a href="{{ route('projects.category', 'commercial') }}"
                           class="block px-6 py-2 text-gray-700 hover:text-primary-500 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-building mr-2 text-primary-500"></i>
                            Commercial
                        </a>
                        <a href="{{ route('projects.category', 'industrial') }}"
                           class="block px-6 py-2 text-gray-700 hover:text-primary-500 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-industry mr-2 text-primary-500"></i>
                            Industrial
                        </a>
                        <a href="{{ route('projects.category', 'infrastructure') }}"
                           class="block px-6 py-2 text-gray-700 hover:text-primary-500 hover:bg-gray-50 transition-colors">
                            <i class="fas fa-road mr-2 text-primary-500"></i>
                            Infrastructure
                        </a>
                    </div>
                </div>
                <a href="{{ route('services.index') }}"
                   class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">
                    Services
                </a>
                <a href="{{ route('blog.index') }}"
                   class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }}">
                    Blog
                </a>
                <a href="{{ route('contact') }}"
                   class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </nav>

            <!-- CTA Button & Mobile Menu Button -->
            <div class="flex items-center space-x-4">
                <!-- CTA Button (Desktop) -->
                <a href="{{ route('contact') }}"
                   class="hidden lg:inline-flex btn btn-primary">
                    <i class="fas fa-phone mr-2"></i>
                    Get Quote
                </a>

                <!-- Mobile Menu Button -->
                <button onclick="toggleMobileMenu()"
                        class="lg:hidden text-gray-700 hover:text-primary-500 transition-colors"
                        id="hamburger">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 py-4">
            <nav class="space-y-4">
                <a href="{{ route('home') }}"
                   class="block py-2 text-gray-700 hover:text-primary-500 transition-colors {{ request()->routeIs('home') ? 'text-primary-500 font-medium' : '' }}">
                    <i class="fas fa-home mr-3"></i>Home
                </a>
                <a href="{{ route('about') }}"
                   class="block py-2 text-gray-700 hover:text-primary-500 transition-colors {{ request()->routeIs('about') ? 'text-primary-500 font-medium' : '' }}">
                    <i class="fas fa-info-circle mr-3"></i>About
                </a>

                <!-- Projects Mobile Submenu -->
                <div class="py-2">
                    <a href="{{ route('projects.index') }}"
                       class="flex items-center justify-between text-gray-700 hover:text-primary-500 transition-colors {{ request()->routeIs('projects.*') ? 'text-primary-500 font-medium' : '' }}">
                        <span><i class="fas fa-building mr-3"></i>Projects</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </a>
                    <div class="ml-6 mt-2 space-y-2">
                        <a href="{{ route('projects.index') }}"
                           class="block py-1 text-sm text-gray-600 hover:text-primary-500 transition-colors">
                            All Projects
                        </a>
                        <a href="{{ route('projects.category', 'residential') }}"
                           class="block py-1 text-sm text-gray-600 hover:text-primary-500 transition-colors">
                            Residential
                        </a>
                        <a href="{{ route('projects.category', 'commercial') }}"
                           class="block py-1 text-sm text-gray-600 hover:text-primary-500 transition-colors">
                            Commercial
                        </a>
                        <a href="{{ route('projects.category', 'industrial') }}"
                           class="block py-1 text-sm text-gray-600 hover:text-primary-500 transition-colors">
                            Industrial
                        </a>
                        <a href="{{ route('projects.category', 'infrastructure') }}"
                           class="block py-1 text-sm text-gray-600 hover:text-primary-500 transition-colors">
                            Infrastructure
                        </a>
                    </div>
                </div>

                <a href="{{ route('services.index') }}"
                   class="block py-2 text-gray-700 hover:text-primary-500 transition-colors {{ request()->routeIs('services.*') ? 'text-primary-500 font-medium' : '' }}">
                    <i class="fas fa-cogs mr-3"></i>Services
                </a>
                <a href="{{ route('blog.index') }}"
                   class="block py-2 text-gray-700 hover:text-primary-500 transition-colors {{ request()->routeIs('blog.*') ? 'text-primary-500 font-medium' : '' }}">
                    <i class="fas fa-blog mr-3"></i>Blog
                </a>
                <a href="{{ route('contact') }}"
                   class="block py-2 text-gray-700 hover:text-primary-500 transition-colors {{ request()->routeIs('contact') ? 'text-primary-500 font-medium' : '' }}">
                    <i class="fas fa-envelope mr-3"></i>Contact
                </a>

                <!-- Mobile CTA -->
                <div class="pt-4 border-t border-gray-200">
                    <a href="{{ route('contact') }}"
                       class="btn btn-primary w-full justify-center">
                        <i class="fas fa-phone mr-2"></i>
                        Get Free Quote
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>

<style>
.nav-link {
    @apply text-gray-700 hover:text-primary-500 font-medium transition-colors duration-300 relative;
}

.nav-link.active {
    @apply text-primary-500;
}

.nav-link.active::after {
    content: '';
    @apply absolute bottom-0 left-0 w-full h-0.5 bg-primary-500;
    transform: translateY(25px);
}

#main-header.scrolled {
    @apply bg-white/95 backdrop-blur-sm;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
}
</style>

<script>
// Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.getElementById('main-header');
    if (window.scrollY > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
</script>
