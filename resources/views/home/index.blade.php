@extends('layouts.main')

@section('title', 'Elite Civil Engineering - Professional Construction & Infrastructure Solutions')
@section('description', 'Leading civil engineering firm specializing in residential, commercial, and infrastructure projects. Expert construction management and engineering solutions with 15+ years of experience.')

@section('content')

<!-- Hero Section -->
@if($heroSection)
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
        @if($heroSection->background_image)
            <img src="{{ asset('storage/' . $heroSection->background_image) }}"
                 alt="Civil Engineering Projects"
                 class="w-full h-full object-cover">
        @else
            <div class="w-full h-full bg-gradient-to-br from-gray-900 via-gray-800 to-primary-900"></div>
        @endif
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 text-center text-white">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight" data-aos="fade-up">
                {{ $heroSection->title }}
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-200 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                {{ $heroSection->subtitle }}
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('projects.index') }}"
                   class="btn btn-primary btn-lg px-8 py-4 text-lg">
                    <i class="fas fa-eye mr-2"></i>
                    View Our Work
                </a>
                <a href="{{ route('contact') }}"
                   class="btn btn-secondary btn-lg px-8 py-4 text-lg">
                    <i class="fas fa-phone mr-2"></i>
                    Get Free Quote
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <div class="animate-bounce">
            <i class="fas fa-chevron-down text-white text-2xl"></i>
        </div>
    </div>
</section>
@endif

<!-- Stats Section -->
@if($stats->count() > 0)
<section class="py-20 bg-primary-500 text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($stats as $stat)
            <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="text-4xl md:text-5xl font-bold mb-2">
                    <span data-counter="{{ $stat->value }}">0</span>{{ $stat->suffix }}
                </div>
                <p class="text-primary-100 text-lg">{{ $stat->label }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- About Preview Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Building Excellence Since 2008
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Elite Civil Engineering stands as a pillar of innovation and reliability in the construction industry. With over 15 years of experience, we've successfully completed hundreds of projects ranging from residential developments to large-scale infrastructure.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Our team of licensed professional engineers and certified project managers ensures every project meets the highest standards of quality, safety, and sustainability.
                </p>
                <div class="flex flex-wrap gap-4 mb-8">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-certificate text-primary-500 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Licensed Engineers</h4>
                            <p class="text-gray-600 text-sm">Professional & Certified</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-award text-primary-500 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Quality Assured</h4>
                            <p class="text-gray-600 text-sm">ISO 9001:2015 Certified</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn btn-primary">
                    <i class="fas fa-info-circle mr-2"></i>
                    Learn More About Us
                </a>
            </div>
            <div data-aos="fade-left">
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1541976590-713941681591?w=400&h=300&fit=crop"
                         alt="Construction Site"
                         class="rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=400&h=300&fit=crop"
                         alt="Engineering Team"
                         class="rounded-lg shadow-lg mt-8">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=400&h=300&fit=crop"
                         alt="Modern Building"
                         class="rounded-lg shadow-lg -mt-8">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&h=300&fit=crop"
                         alt="Infrastructure"
                         class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
@if($services->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up">
                Our Professional Services
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                We offer comprehensive civil engineering solutions tailored to meet your project requirements with precision and excellence.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="card group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                @if($service->image)
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('storage/' . $service->image) }}"
                         alt="{{ $service->title }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                @endif
                <div class="card-body">
                    <div class="flex items-center mb-4">
                        @if($service->icon)
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                            <i class="{{ $service->icon }} text-primary-500 text-xl"></i>
                        </div>
                        @endif
                        <h3 class="text-xl font-semibold text-gray-900">{{ $service->title }}</h3>
                    </div>
                    <p class="text-gray-600 mb-4">{{ $service->short_description ?: Str::limit($service->full_description, 120) }}</p>
                    @if($service->starting_price)
                    <div class="text-2xl font-bold text-primary-500 mb-4">
                        Starting at ${{ number_format($service->starting_price) }}
                    </div>
                    @endif
                    <a href="{{ route('services.show', $service) }}"
                       class="text-primary-500 hover:text-primary-600 font-medium">
                        Learn More <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('services.index') }}" class="btn btn-primary">
                <i class="fas fa-eye mr-2"></i>
                View All Services
            </a>
        </div>
    </div>
</section>
@endif

<!-- Recent Projects Section -->
@if($recentProjects->count() > 0)
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up">
                Featured Projects
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Explore our latest completed projects showcasing our expertise across various sectors and project scales.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            @foreach($recentProjects as $project)
            <div class="card group overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="relative h-64 overflow-hidden">
                    @if($project->main_image)
                    <img src="{{ asset('storage/' . $project->main_image) }}"
                         alt="{{ $project->title }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    @else
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-building text-gray-400 text-4xl"></i>
                    </div>
                    @endif
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-primary-500 text-white text-sm rounded-full">
                            {{ $project->category->name }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $project->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($project->short_description ?: $project->full_description, 120) }}</p>
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                        <span><i class="fas fa-map-marker-alt mr-1"></i>{{ $project->location }}</span>
                        @if($project->project_value)
                        <span><i class="fas fa-dollar-sign mr-1"></i>${{ number_format($project->project_value) }}</span>
                        @endif
                    </div>
                    <a href="{{ route('projects.show', $project) }}"
                       class="text-primary-500 hover:text-primary-600 font-medium">
                        View Project Details <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('projects.index') }}" class="btn btn-primary">
                <i class="fas fa-eye mr-2"></i>
                View All Projects
            </a>
        </div>
    </div>
</section>
@endif

<!-- Testimonials Section -->
@if($testimonials->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up">
                What Our Clients Say
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Don't just take our word for it. Here's what our satisfied clients have to say about working with us.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="card-body">
                    <div class="flex items-center mb-4">
                        @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 mb-6 italic">"{{ $testimonial->testimonial }}"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-primary-500 font-semibold">
                                {{ substr($testimonial->client_name, 0, 1) }}
                            </span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">{{ $testimonial->client_name }}</h4>
                            <p class="text-gray-600 text-sm">{{ $testimonial->client_position }}</p>
                            @if($testimonial->project)
                            <p class="text-primary-500 text-sm">{{ $testimonial->project->title }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-primary-500 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">
            Ready to Start Your Next Project?
        </h2>
        <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Let's discuss your vision and bring it to life with our expert engineering solutions and proven project management.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('contact') }}"
               class="btn bg-white text-primary-500 hover:bg-gray-100 btn-lg px-8 py-4">
                <i class="fas fa-phone mr-2"></i>
                Get Free Consultation
            </a>
            <a href="{{ route('projects.index') }}"
               class="btn btn-secondary btn-lg px-8 py-4">
                <i class="fas fa-eye mr-2"></i>
                View Our Portfolio
            </a>
        </div>
    </div>
</section>

@endsection
