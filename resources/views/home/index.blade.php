@extends('layouts.intelica')

@section('title', 'Intelica Soft - Intelligent Software Solutions')
@section('description', 'Professional software development company in Khilkhet, Dhaka, Bangladesh. We specialize in web development, mobile apps, e-commerce platforms, and enterprise solutions with cutting-edge technology.')
@section('keywords', 'software development, web development, mobile apps, e-commerce, Laravel, React, Android, iOS, enterprise solutions, Dhaka, Bangladesh')

@section('og_title', 'Intelica Soft - Intelligent Software Solutions')
@section('og_description', 'Transform your business with our innovative software solutions. Expert development team delivering web, mobile, and enterprise applications.')
@section('twitter_title', 'Intelica Soft - Intelligent Software Solutions')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden intelica-dark-bg">
    <!-- Floating Orbs Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 -right-20 w-96 h-96 bg-intelica-500/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-accent-500/20 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-10 w-64 h-64 bg-intelica-400/10 rounded-full blur-3xl animate-float" style="animation-delay: -6s;"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 text-center text-white">
        <div class="max-w-5xl mx-auto">
            <!-- Logo Icon -->
            <div class="mb-8" data-aos="zoom-in">
                <div class="intelica-icon-glow mx-auto text-6xl mb-4">
                    <i class="fas fa-rocket"></i>
                </div>
                <h1 class="text-2xl font-bold intelica-gradient-text mb-2">Intelica Soft</h1>
                <p class="text-gray-300 text-lg">
                    <i class="fas fa-code mr-2"></i>
                    Intelligent Software Solutions
                </p>
            </div>

            <!-- Main Heading -->
            <h2 class="text-5xl md:text-7xl font-bold mb-6 leading-tight" data-aos="fade-up" data-aos-delay="200">
                We're Building Something
                <span class="intelica-gradient-text typing-animation">Amazing</span>
                <span class="text-4xl">🚀</span>
            </h2>

            <p class="text-xl md:text-2xl mb-8 text-gray-300 leading-relaxed max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                Our team is crafting innovative software solutions that transform how businesses operate.
                From web development to mobile apps, we deliver excellence in every project.
            </p>

            <!-- Feature Highlights -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-2xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="600">
                <div class="intelica-feature-card">
                    <div class="intelica-icon-glow text-2xl mb-3">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="text-white font-semibold">Lightning Fast</h3>
                </div>
                <div class="intelica-feature-card">
                    <div class="intelica-icon-glow text-2xl mb-3">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-white font-semibold">Secure</h3>
                </div>
                <div class="intelica-feature-card">
                    <div class="intelica-icon-glow text-2xl mb-3">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-white font-semibold">Scalable</h3>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6 mb-12" data-aos="fade-up" data-aos-delay="800">
                <x-intelica-button
                    href="{{ route('projects.index') }}"
                    size="lg"
                    icon="fas fa-briefcase"
                >
                    View Our Work
                </x-intelica-button>
                <x-intelica-button
                    href="{{ route('contact') }}"
                    variant="outline"
                    size="lg"
                    icon="fas fa-envelope"
                >
                    Get Free Quote
                </x-intelica-button>
            </div>

            <!-- Status Indicator -->
            <div class="flex items-center justify-center space-x-2 text-gray-400" data-aos="fade-up" data-aos-delay="1000">
                <div class="intelica-status-dot"></div>
                <span>Website under active development</span>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <i class="fas fa-chevron-down text-white text-2xl opacity-70"></i>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gradient-to-r from-intelica-500 to-accent-500 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="grid grid-cols-8 gap-4 h-full">
                @for($i = 0; $i < 32; $i++)
                    <div class="bg-white/5 animate-pulse" style="animation-delay: {{ $i * 100 }}ms;"></div>
                @endfor
            </div>
        </div>
    </div>

    <div class="relative container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl md:text-5xl font-bold mb-2">
                    <span data-counter="15">0</span>+
                </div>
                <p class="text-white/90 text-lg">Years Experience</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl md:text-5xl font-bold mb-2">
                    <span data-counter="250">0</span>+
                </div>
                <p class="text-white/90 text-lg">Projects Delivered</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl md:text-5xl font-bold mb-2">
                    <span data-counter="180">0</span>+
                </div>
                <p class="text-white/90 text-lg">Happy Clients</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="text-4xl md:text-5xl font-bold mb-2">
                    <span data-counter="25">0</span>+
                </div>
                <p class="text-white/90 text-lg">Team Members</p>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <div class="mb-6">
                    <span class="inline-block px-4 py-2 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-sm font-medium mb-4">
                        About Intelica Soft
                    </span>
                    <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">
                        Building Excellence Since
                        <span class="intelica-gradient-text">2008</span>
                    </h2>
                </div>

                <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-6">
                    Intelica Soft stands as a pillar of innovation and reliability in the software development industry.
                    With over 15 years of experience, we've successfully delivered hundreds of projects ranging from
                    simple websites to complex enterprise solutions.
                </p>
                <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-8">
                    Our team of certified developers and experienced project managers ensures every project meets the
                    highest standards of quality, security, and scalability using cutting-edge technologies.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                    <div class="flex items-start space-x-4">
                        <div class="intelica-icon-glow bg-intelica-100 dark:bg-intelica-900/20 text-intelica-500">
                            <i class="fas fa-certificate text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Certified Developers</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Professional & Expert Team</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="intelica-icon-glow bg-accent-100 dark:bg-accent-900/20 text-accent-500">
                            <i class="fas fa-award text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Quality Assured</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">ISO 27001 Certified</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="intelica-icon-glow bg-intelica-100 dark:bg-intelica-900/20 text-intelica-500">
                            <i class="fas fa-clock text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-1">24/7 Support</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Round-the-clock assistance</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="intelica-icon-glow bg-accent-100 dark:bg-accent-900/20 text-accent-500">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Latest Technology</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Cutting-edge solutions</p>
                        </div>
                    </div>
                </div>

                <x-intelica-button
                    href="{{ route('about') }}"
                    icon="fas fa-info-circle"
                >
                    Learn More About Us
                </x-intelica-button>
            </div>

            <div data-aos="fade-left">
                <div class="relative">
                    <!-- Main Tech Image -->
                    <x-intelica-card variant="gradient" class="p-8 text-center">
                        <div class="space-y-6">
                            <div class="text-6xl mb-4">
                                <i class="fas fa-laptop-code text-intelica-500"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white">
                                Modern Development
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Using latest technologies and best practices
                            </p>
                        </div>
                    </x-intelica-card>

                    <!-- Floating Technology Icons -->
                    <div class="absolute -top-4 -right-4 intelica-feature-card animate-float">
                        <i class="fas fa-mobile-alt text-intelica-500 text-2xl"></i>
                    </div>
                    <div class="absolute -bottom-4 -left-4 intelica-feature-card animate-float" style="animation-delay: -2s;">
                        <i class="fas fa-server text-accent-500 text-2xl"></i>
                    </div>
                    <div class="absolute top-1/2 -left-8 intelica-feature-card animate-float" style="animation-delay: -4s;">
                        <i class="fas fa-cloud text-intelica-400 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-sm font-medium mb-4" data-aos="fade-up">
                Our Services
            </span>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4" data-aos="fade-up" data-aos-delay="100">
                Our Professional <span class="intelica-gradient-text">Services</span>
            </h2>
            <p class="text-gray-600 dark:text-gray-300 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                We offer comprehensive software development solutions tailored to transform your business
                with cutting-edge technology and innovative approaches.
            </p>
        </div>

        <div class="intelica-grid">
            <!-- Web Development -->
            <x-intelica-card variant="default" class="group hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="intelica-icon-glow bg-intelica-100 dark:bg-intelica-900/20 text-intelica-500 text-3xl mb-6 mx-auto group-hover:shadow-intelica-500/40">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Web Development</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        Custom websites and web applications built with modern frameworks like Laravel, React, and Vue.js.
                        Responsive, fast, and SEO-optimized solutions.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-xs">Laravel</span>
                        <span class="px-3 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-xs">React</span>
                        <span class="px-3 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-xs">Vue.js</span>
                    </div>
                    <div class="text-2xl font-bold intelica-gradient-text mb-4">Starting at $1,500</div>
                </div>
            </x-intelica-card>

            <!-- Mobile App Development -->
            <x-intelica-card variant="default" class="group hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="intelica-icon-glow bg-accent-100 dark:bg-accent-900/20 text-accent-500 text-3xl mb-6 mx-auto group-hover:shadow-accent-500/40">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Mobile App Development</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        Native and cross-platform mobile applications for Android and iOS. Built with React Native,
                        Flutter, and native development for optimal performance.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded-full text-xs">React Native</span>
                        <span class="px-3 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded-full text-xs">Flutter</span>
                        <span class="px-3 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded-full text-xs">Native</span>
                    </div>
                    <div class="text-2xl font-bold intelica-gradient-text mb-4">Starting at $3,000</div>
                </div>
            </x-intelica-card>

            <!-- E-commerce Solutions -->
            <x-intelica-card variant="default" class="group hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="intelica-icon-glow bg-intelica-100 dark:bg-intelica-900/20 text-intelica-500 text-3xl mb-6 mx-auto group-hover:shadow-intelica-500/40">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">E-commerce Solutions</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        Complete e-commerce platforms with payment integration, inventory management, and analytics.
                        Multi-vendor marketplaces and B2B solutions.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-xs">WooCommerce</span>
                        <span class="px-3 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-xs">Shopify</span>
                        <span class="px-3 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-xs">Custom</span>
                    </div>
                    <div class="text-2xl font-bold intelica-gradient-text mb-4">Starting at $2,500</div>
                </div>
            </x-intelica-card>

            <!-- Enterprise Solutions -->
            <x-intelica-card variant="default" class="group hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="intelica-icon-glow bg-accent-100 dark:bg-accent-900/20 text-accent-500 text-3xl mb-6 mx-auto group-hover:shadow-accent-500/40">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Enterprise Solutions</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        Scalable enterprise applications, CRM systems, ERP solutions, and business process automation.
                        Built for large-scale operations and high performance.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded-full text-xs">CRM</span>
                        <span class="px-3 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded-full text-xs">ERP</span>
                        <span class="px-3 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded-full text-xs">Automation</span>
                    </div>
                    <div class="text-2xl font-bold intelica-gradient-text mb-4">Starting at $5,000</div>
                </div>
            </x-intelica-card>

            <!-- UI/UX Design -->
            <x-intelica-card variant="default" class="group hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                <div class="text-center">
                    <div class="intelica-icon-glow bg-intelica-100 dark:bg-intelica-900/20 text-intelica-500 text-3xl mb-6 mx-auto group-hover:shadow-intelica-500/40">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">UI/UX Design</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        User-centered design solutions focusing on usability, accessibility, and visual appeal.
                        Wireframing, prototyping, and complete design systems.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-xs">Figma</span>
                        <span class="px-3 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-xs">Adobe XD</span>
                        <span class="px-3 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-xs">Prototyping</span>
                    </div>
                    <div class="text-2xl font-bold intelica-gradient-text mb-4">Starting at $800</div>
                </div>
            </x-intelica-card>

            <!-- Cloud & DevOps -->
            <x-intelica-card variant="default" class="group hover:-translate-y-2 transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
                <div class="text-center">
                    <div class="intelica-icon-glow bg-accent-100 dark:bg-accent-900/20 text-accent-500 text-3xl mb-6 mx-auto group-hover:shadow-accent-500/40">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Cloud & DevOps</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        Cloud infrastructure setup, CI/CD pipelines, containerization, and deployment automation.
                        AWS, Google Cloud, and Azure solutions.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded-full text-xs">AWS</span>
                        <span class="px-3 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded-full text-xs">Docker</span>
                        <span class="px-3 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded-full text-xs">CI/CD</span>
                    </div>
                    <div class="text-2xl font-bold intelica-gradient-text mb-4">Starting at $1,200</div>
                </div>
            </x-intelica-card>
        </div>

        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="700">
            <x-intelica-button
                href="{{ route('services.index') }}"
                size="lg"
                icon="fas fa-cogs"
            >
                View All Services
            </x-intelica-button>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded-full text-sm font-medium mb-4" data-aos="fade-up">
                Our Portfolio
            </span>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4" data-aos="fade-up" data-aos-delay="100">
                Our Latest <span class="intelica-gradient-text">Projects</span>
            </h2>
            <p class="text-gray-600 dark:text-gray-300 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Discover our portfolio of successful software development projects that showcase our technical expertise
                and innovative solutions across various platforms.
            </p>
        </div>

        <!-- Portfolio Filter -->
        <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="300">
            <button class="portfolio-filter-btn active" data-filter="all">All Projects</button>
            <button class="portfolio-filter-btn" data-filter="web">Web Development</button>
            <button class="portfolio-filter-btn" data-filter="mobile">Mobile Apps</button>
            <button class="portfolio-filter-btn" data-filter="admin">Admin Panels</button>
            <button class="portfolio-filter-btn" data-filter="enterprise">Enterprise</button>
        </div>

        <div class="intelica-grid" id="portfolio-grid">
            <!-- Web Development Project -->
            <div class="portfolio-item web" data-aos="fade-up" data-aos-delay="100">
                <x-intelica-card variant="default" class="group overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <div class="intelica-gradient-bg absolute inset-0 opacity-20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-intelica-500 opacity-60">
                                <i class="fab fa-html5"></i>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                            <x-intelica-button
                                href="#"
                                variant="white"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 mr-2"
                            >
                                View Project
                            </x-intelica-button>
                            <x-intelica-button
                                href="#"
                                variant="outline"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                            >
                                Live Demo
                            </x-intelica-button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-intelica-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Web Development
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">E-commerce Platform</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            A comprehensive e-commerce solution with multi-vendor support, advanced analytics, and mobile-responsive design.
                        </p>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                            <i class="fas fa-user mr-1"></i>
                            Client: TechMart Solutions
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                            <i class="fas fa-calendar mr-1"></i>
                            Completed: Nov 2024
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded text-xs">Laravel</span>
                            <span class="px-2 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded text-xs">Vue.js</span>
                            <span class="px-2 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded text-xs">Stripe</span>
                        </div>
                    </div>
                </x-intelica-card>
            </div>

            <!-- Mobile App Project -->
            <div class="portfolio-item mobile" data-aos="fade-up" data-aos-delay="200">
                <x-intelica-card variant="default" class="group overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <div class="accent-gradient-bg absolute inset-0 opacity-20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-accent-500 opacity-60">
                                <i class="fab fa-android"></i>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                            <x-intelica-button
                                href="#"
                                variant="white"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 mr-2"
                            >
                                View Project
                            </x-intelica-button>
                            <x-intelica-button
                                href="#"
                                variant="outline"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                            >
                                App Store
                            </x-intelica-button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-accent-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Mobile App
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Fitness Tracking App</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Cross-platform fitness app with workout tracking, nutrition planning, and social features for iOS and Android.
                        </p>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                            <i class="fas fa-user mr-1"></i>
                            Client: FitLife Inc.
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                            <i class="fas fa-calendar mr-1"></i>
                            Completed: Oct 2024
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded text-xs">React Native</span>
                            <span class="px-2 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded text-xs">Firebase</span>
                            <span class="px-2 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded text-xs">Redux</span>
                        </div>
                    </div>
                </x-intelica-card>
            </div>

            <!-- Admin Panel Project -->
            <div class="portfolio-item admin" data-aos="fade-up" data-aos-delay="300">
                <x-intelica-card variant="default" class="group overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <div class="intelica-gradient-bg absolute inset-0 opacity-20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-intelica-500 opacity-60">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                            <x-intelica-button
                                href="#"
                                variant="white"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 mr-2"
                            >
                                View Project
                            </x-intelica-button>
                            <x-intelica-button
                                href="#"
                                variant="outline"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                            >
                                Live Demo
                            </x-intelica-button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-intelica-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Admin Panel
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">School Management System</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Comprehensive school management dashboard with student records, grade tracking, and parent communication features.
                        </p>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                            <i class="fas fa-user mr-1"></i>
                            Client: EduTech Academy
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                            <i class="fas fa-calendar mr-1"></i>
                            Completed: Sep 2024
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded text-xs">Laravel</span>
                            <span class="px-2 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded text-xs">Livewire</span>
                            <span class="px-2 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded text-xs">MySQL</span>
                        </div>
                    </div>
                </x-intelica-card>
            </div>

            <!-- Enterprise Project -->
            <div class="portfolio-item enterprise" data-aos="fade-up" data-aos-delay="400">
                <x-intelica-card variant="default" class="group overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <div class="accent-gradient-bg absolute inset-0 opacity-20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-accent-500 opacity-60">
                                <i class="fas fa-building"></i>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                            <x-intelica-button
                                href="#"
                                variant="white"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 mr-2"
                            >
                                View Project
                            </x-intelica-button>
                            <x-intelica-button
                                href="#"
                                variant="outline"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                            >
                                Case Study
                            </x-intelica-button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-accent-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Enterprise
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">CRM & ERP System</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Enterprise-level CRM and ERP solution with advanced reporting, workflow automation, and multi-department integration.
                        </p>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                            <i class="fas fa-user mr-1"></i>
                            Client: GlobalTech Corp
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                            <i class="fas fa-calendar mr-1"></i>
                            Completed: Aug 2024
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded text-xs">Laravel</span>
                            <span class="px-2 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded text-xs">PostgreSQL</span>
                            <span class="px-2 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded text-xs">Redis</span>
                        </div>
                    </div>
                </x-intelica-card>
            </div>

            <!-- More Web Projects -->
            <div class="portfolio-item web" data-aos="fade-up" data-aos-delay="500">
                <x-intelica-card variant="default" class="group overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <div class="intelica-gradient-bg absolute inset-0 opacity-20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-intelica-500 opacity-60">
                                <i class="fab fa-react"></i>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                            <x-intelica-button
                                href="#"
                                variant="white"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 mr-2"
                            >
                                View Project
                            </x-intelica-button>
                            <x-intelica-button
                                href="#"
                                variant="outline"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                            >
                                Live Demo
                            </x-intelica-button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-intelica-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Web Development
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">SaaS Analytics Platform</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Advanced analytics SaaS platform with real-time data visualization, custom dashboards, and API integrations.
                        </p>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                            <i class="fas fa-user mr-1"></i>
                            Client: DataViz Pro
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                            <i class="fas fa-calendar mr-1"></i>
                            Completed: Jul 2024
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded text-xs">React</span>
                            <span class="px-2 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded text-xs">Node.js</span>
                            <span class="px-2 py-1 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded text-xs">MongoDB</span>
                        </div>
                    </div>
                </x-intelica-card>
            </div>

            <!-- Mobile iOS Project -->
            <div class="portfolio-item mobile" data-aos="fade-up" data-aos-delay="600">
                <x-intelica-card variant="default" class="group overflow-hidden hover:-translate-y-2 transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <div class="accent-gradient-bg absolute inset-0 opacity-20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-accent-500 opacity-60">
                                <i class="fab fa-apple"></i>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                            <x-intelica-button
                                href="#"
                                variant="white"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 mr-2"
                            >
                                View Project
                            </x-intelica-button>
                            <x-intelica-button
                                href="#"
                                variant="outline"
                                size="sm"
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                            >
                                App Store
                            </x-intelica-button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-accent-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                iOS App
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Food Delivery App</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Native iOS food delivery application with real-time tracking, payment integration, and restaurant management.
                        </p>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                            <i class="fas fa-user mr-1"></i>
                            Client: QuickEats
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                            <i class="fas fa-calendar mr-1"></i>
                            Completed: Jun 2024
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded text-xs">Swift</span>
                            <span class="px-2 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded text-xs">CoreData</span>
                            <span class="px-2 py-1 bg-accent-100 dark:bg-accent-900/20 text-accent-600 dark:text-accent-400 rounded text-xs">MapKit</span>
                        </div>
                    </div>
                </x-intelica-card>
            </div>
        </div>

        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="700">
            <x-intelica-button
                href="{{ route('projects.index') }}"
                size="lg"
                icon="fas fa-briefcase"
            >
                View All Projects
            </x-intelica-button>
        </div>
    </div>
</section>

<!-- Portfolio Filter JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.portfolio-filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;

            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Filter items
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});
</script>

<style>
.portfolio-filter-btn {
    @apply px-6 py-2 rounded-full border-2 border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 font-medium transition-all duration-300 hover:border-intelica-500 hover:text-intelica-500;
}

.portfolio-filter-btn.active {
    @apply bg-intelica-500 border-intelica-500 text-white;
}

.portfolio-item {
    transition: opacity 0.3s ease, transform 0.3s ease;
}
</style>

<!-- Testimonials Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-intelica-100 dark:bg-intelica-900/20 text-intelica-600 dark:text-intelica-400 rounded-full text-sm font-medium mb-4" data-aos="fade-up">
                Client Reviews
            </span>
            <h2 class="text-4xl font-bold text-gray-900 dark:text-white mb-4" data-aos="fade-up" data-aos-delay="100">
                What Our <span class="intelica-gradient-text">Clients Say</span>
            </h2>
            <p class="text-gray-600 dark:text-gray-300 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Don't just take our word for it. Here's what our satisfied clients have to say about our
                software development expertise and project delivery.
            </p>
        </div>

        <div class="intelica-grid">
            <!-- Testimonial 1 - E-commerce Client -->
            <x-intelica-card variant="default" class="group hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star text-yellow-400 text-lg"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 italic leading-relaxed">
                        "Intelica Soft exceeded our expectations with their e-commerce platform. The team's attention to detail,
                        technical expertise, and ability to deliver on time made all the difference. Our sales increased by 300% after launch."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-intelica-100 dark:bg-intelica-900/20 rounded-full flex items-center justify-center mr-4">
                            <span class="text-intelica-600 dark:text-intelica-400 font-semibold text-lg">
                                S
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Sarah Johnson</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">CEO, TechMart Solutions</p>
                            <p class="text-intelica-500 text-sm">E-commerce Platform</p>
                        </div>
                    </div>
                </div>
            </x-intelica-card>

            <!-- Testimonial 2 - Mobile App Client -->
            <x-intelica-card variant="default" class="group hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star text-yellow-400 text-lg"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 italic leading-relaxed">
                        "The mobile app they developed for us is outstanding. Clean UI, smooth performance, and all features work perfectly.
                        Their React Native expertise really shows in the final product. Highly recommend!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-accent-100 dark:bg-accent-900/20 rounded-full flex items-center justify-center mr-4">
                            <span class="text-accent-600 dark:text-accent-400 font-semibold text-lg">
                                M
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Michael Chen</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Founder, FitLife Inc.</p>
                            <p class="text-accent-500 text-sm">Fitness Tracking App</p>
                        </div>
                    </div>
                </div>
            </x-intelica-card>

            <!-- Testimonial 3 - Enterprise Client -->
            <x-intelica-card variant="default" class="group hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star text-yellow-400 text-lg"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 italic leading-relaxed">
                        "Working with Intelica Soft on our CRM system was a game-changer. Their Laravel expertise and understanding of
                        enterprise requirements resulted in a robust, scalable solution that transformed our operations."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-intelica-100 dark:bg-intelica-900/20 rounded-full flex items-center justify-center mr-4">
                            <span class="text-intelica-600 dark:text-intelica-400 font-semibold text-lg">
                                D
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">David Rodriguez</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">CTO, GlobalTech Corp</p>
                            <p class="text-intelica-500 text-sm">CRM & ERP System</p>
                        </div>
                    </div>
                </div>
            </x-intelica-card>

            <!-- Testimonial 4 - Admin Panel Client -->
            <x-intelica-card variant="default" class="group hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star text-yellow-400 text-lg"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 italic leading-relaxed">
                        "The school management system they built for us is incredibly user-friendly and feature-rich.
                        Teachers, students, and parents love the interface. Great work from the Intelica Soft team!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-accent-100 dark:bg-accent-900/20 rounded-full flex items-center justify-center mr-4">
                            <span class="text-accent-600 dark:text-accent-400 font-semibold text-lg">
                                L
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Lisa Thompson</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Principal, EduTech Academy</p>
                            <p class="text-accent-500 text-sm">School Management System</p>
                        </div>
                    </div>
                </div>
            </x-intelica-card>

            <!-- Testimonial 5 - SaaS Client -->
            <x-intelica-card variant="default" class="group hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star text-yellow-400 text-lg"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 italic leading-relaxed">
                        "Amazing work on our analytics platform! The real-time dashboards and data visualization features are exactly
                        what we needed. The React implementation is fast and responsive."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-intelica-100 dark:bg-intelica-900/20 rounded-full flex items-center justify-center mr-4">
                            <span class="text-intelica-600 dark:text-intelica-400 font-semibold text-lg">
                                J
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">James Wilson</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">VP Engineering, DataViz Pro</p>
                            <p class="text-intelica-500 text-sm">SaaS Analytics Platform</p>
                        </div>
                    </div>
                </div>
            </x-intelica-card>

            <!-- Testimonial 6 - iOS App Client -->
            <x-intelica-card variant="default" class="group hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="600">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star text-yellow-400 text-lg"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 italic leading-relaxed">
                        "The native iOS app they developed for our food delivery service is fantastic. Swift development,
                        great UI/UX, and all the complex features like real-time tracking work flawlessly."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-accent-100 dark:bg-accent-900/20 rounded-full flex items-center justify-center mr-4">
                            <span class="text-accent-600 dark:text-accent-400 font-semibold text-lg">
                                A
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Alex Kumar</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Co-founder, QuickEats</p>
                            <p class="text-accent-500 text-sm">Food Delivery App</p>
                        </div>
                    </div>
                </div>
            </x-intelica-card>
        </div>

        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="700">
            <x-intelica-button
                href="{{ route('contact') }}"
                variant="outline"
                size="lg"
                icon="fas fa-comments"
            >
                Share Your Review
            </x-intelica-button>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 relative overflow-hidden">
    <!-- Background with gradients -->
    <div class="absolute inset-0 intelica-gradient-bg"></div>
    <div class="absolute inset-0 opacity-10">
        <!-- Floating orbs for visual appeal -->
        <div class="absolute top-10 left-10 w-32 h-32 bg-white rounded-full animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 bg-accent-400 rounded-full animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full animate-ping"></div>
    </div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <span class="inline-block px-4 py-2 bg-white/20 text-white rounded-full text-sm font-medium mb-4" data-aos="fade-up">
            Get Started Today
        </span>
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up" data-aos-delay="100">
            Ready to Transform Your
            <span class="text-accent-300">Business</span>?
        </h2>
        <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            Let's discuss your vision and bring it to life with our cutting-edge software development expertise,
            innovative solutions, and proven project delivery methodology.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6" data-aos="fade-up" data-aos-delay="300">
            <x-intelica-button
                href="{{ route('contact') }}"
                variant="white"
                size="lg"
                icon="fas fa-phone"
                class="px-8 py-4"
            >
                Get Free Consultation
            </x-intelica-button>
            <x-intelica-button
                href="{{ route('projects.index') }}"
                variant="outline"
                size="lg"
                icon="fas fa-briefcase"
                class="px-8 py-4 border-white text-white hover:bg-white hover:text-intelica-600"
            >
                View Our Portfolio
            </x-intelica-button>
        </div>

        <!-- Contact info -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="400">
            <div class="flex items-center justify-center text-white/80">
                <i class="fas fa-envelope mr-3 text-accent-300"></i>
                <span>info@intelicasoft.com</span>
            </div>
            <div class="flex items-center justify-center text-white/80">
                <i class="fas fa-phone mr-3 text-accent-300"></i>
                <span>+1 (555) 123-4567</span>
            </div>
            <div class="flex items-center justify-center text-white/80">
                <i class="fas fa-clock mr-3 text-accent-300"></i>
                <span>24/7 Support Available</span>
            </div>
        </div>
    </div>
</section>

@endsection
