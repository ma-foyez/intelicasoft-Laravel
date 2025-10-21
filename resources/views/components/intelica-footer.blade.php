@props([
    'class' => '',
])

@php
$classes = collect([
    'bg-gray-900 dark:bg-black text-white py-12 lg:py-16',
    $class,
])->filter()->implode(' ');
@endphp

<footer {{ $attributes->merge(['class' => $classes]) }}>
    <!-- Floating Orbs Background -->
    <div class="intelica-orbs-container absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 -right-20 w-64 h-64 bg-intelica-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-accent-500/10 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            <!-- Company Info -->
            <div class="lg:col-span-2" data-aos="fade-up">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="intelica-icon-glow bg-intelica-500/20 text-intelica-400">
                        <i class="fas fa-rocket text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold intelica-gradient-text">
                            {{ config('app.name', 'Intelica Soft') }}
                        </h3>
                        <p class="text-sm text-gray-400">
                            <i class="fas fa-code mr-1"></i>
                            Intelligent Software Solutions
                        </p>
                    </div>
                </div>

                <p class="text-gray-300 mb-6 max-w-md leading-relaxed">
                    We craft innovative software solutions that transform how businesses operate.
                    From web development to mobile apps, we deliver excellence in every project.
                </p>

                <!-- Social Links -->
                <div class="flex space-x-4">
                    <a href="#" class="social-link" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div data-aos="fade-up" data-aos-delay="100">
                <h4 class="text-lg font-semibold mb-6 text-white">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="footer-link">Home</a></li>
                    <li><a href="{{ route('about') }}" class="footer-link">About Us</a></li>
                    <li><a href="{{ route('services.index') }}" class="footer-link">Services</a></li>
                    <li><a href="{{ route('projects.index') }}" class="footer-link">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-lg font-semibold mb-6 text-white">Our Services</h4>
                <ul class="space-y-3">
                    <li><span class="footer-text">Web Development</span></li>
                    <li><span class="footer-text">Mobile Apps</span></li>
                    <li><span class="footer-text">E-commerce</span></li>
                    <li><span class="footer-text">Enterprise Solutions</span></li>
                    <li><span class="footer-text">Product Design</span></li>
                </ul>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="mt-12 pt-8 border-t border-gray-800" data-aos="fade-up" data-aos-delay="300">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-intelica-500/20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-map-marker-alt text-intelica-400"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Location</p>
                        <p class="text-white">Khilkhet, Dhaka-1227, Bangladesh</p>
                    </div>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-accent-500/20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-envelope text-accent-400"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Email</p>
                        <a href="mailto:info@intelicasoft.com" class="text-white hover:text-intelica-400 transition-colors">
                            info@intelicasoft.com
                        </a>
                    </div>
                </div>

                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-intelica-500/20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-phone text-intelica-400"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Phone</p>
                        <a href="tel:+8801234567890" class="text-white hover:text-accent-400 transition-colors">
                            +880 123 456 7890
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center" data-aos="fade-up" data-aos-delay="400">
            <div class="flex items-center space-x-2 mb-4 md:mb-0">
                <div class="intelica-status-dot"></div>
                <span class="text-gray-400 text-sm">Website under active development</span>
            </div>

            <p class="text-gray-400 text-sm">
                © <span id="current-year">{{ date('Y') }}</span> {{ config('app.name', 'Intelica Soft') }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>

<style>
.social-link {
    @apply w-12 h-12 bg-gray-800 hover:bg-intelica-500 text-gray-400 hover:text-white rounded-lg flex items-center justify-center transition-all duration-300 transform hover:scale-110 hover:shadow-lg hover:shadow-intelica-500/25;
}

.footer-link {
    @apply text-gray-300 hover:text-intelica-400 transition-colors duration-200 flex items-center;
}

.footer-link::before {
    content: '→';
    @apply opacity-0 -translate-x-2 transition-all duration-200 mr-2;
}

.footer-link:hover::before {
    @apply opacity-100 translate-x-0;
}

.footer-text {
    @apply text-gray-300 flex items-center;
}

.footer-text::before {
    content: '•';
    @apply text-intelica-400 mr-2;
}
</style>
