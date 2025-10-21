@extends('layouts.main')

@section('title', 'About Us - Elite Civil Engineering Team & Company History')
@section('description', 'Learn about Elite Civil Engineering - our experienced team, company history, mission, values, and commitment to delivering exceptional construction and infrastructure projects.')

@section('content')

<!-- Page Header -->
<section class="relative py-20 bg-gradient-to-r from-primary-500 to-primary-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold mb-4" data-aos="fade-up">About Elite Civil Engineering</h1>
        <p class="text-xl text-primary-100 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Building tomorrow's infrastructure with today's innovation and expertise
        </p>
    </div>
</section>

<!-- Company Story -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Founded in 2008, Elite Civil Engineering began as a small team of passionate engineers with a vision to transform the construction industry through innovative solutions and unwavering commitment to quality.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Over the past 15 years, we've grown from a boutique firm to a recognized leader in civil engineering, completing over 500 projects across residential, commercial, industrial, and infrastructure sectors.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Our success stems from our core belief that every project, regardless of size, deserves the highest level of professional expertise, innovative thinking, and meticulous attention to detail.
                </p>

                <!-- Mission & Vision -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="p-6 bg-primary-50 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Our Mission</h3>
                        <p class="text-gray-600">To deliver exceptional civil engineering solutions that exceed client expectations while contributing to sustainable community development.</p>
                    </div>
                    <div class="p-6 bg-secondary-50 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Our Vision</h3>
                        <p class="text-gray-600">To be the most trusted and innovative civil engineering firm, shaping the built environment for future generations.</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=400&fit=crop"
                     alt="Our Team"
                     class="rounded-lg shadow-lg w-full">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
@if($stats->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up">Our Track Record</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Numbers that reflect our commitment to excellence and client satisfaction
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($stats as $stat)
            <div class="text-center p-6 bg-white rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chart-line text-primary-500 text-2xl"></i>
                </div>
                <div class="text-4xl font-bold text-primary-500 mb-2">
                    <span data-counter="{{ $stat->value }}">0</span>{{ $stat->suffix }}
                </div>
                <p class="text-gray-600">{{ $stat->label }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Team Section -->
@if($teamMembers->count() > 0)
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up">Meet Our Expert Team</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Our diverse team of licensed professionals brings decades of combined experience to every project
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($teamMembers as $member)
            <div class="card text-center group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="card-body">
                    <div class="w-24 h-24 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-500 transition-colors">
                        @if($member->photo)
                        <img src="{{ asset('storage/' . $member->photo) }}"
                             alt="{{ $member->name }}"
                             class="w-24 h-24 rounded-full object-cover">
                        @else
                        <span class="text-primary-500 group-hover:text-white text-2xl font-bold transition-colors">
                            {{ substr($member->name, 0, 1) }}
                        </span>
                        @endif
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-1">{{ $member->name }}</h3>
                    <p class="text-primary-500 font-medium mb-2">{{ $member->position }}</p>
                    <p class="text-gray-600 text-sm mb-4">{{ $member->bio }}</p>
                    @if($member->linkedin || $member->email)
                    <div class="flex justify-center space-x-3">
                        @if($member->email)
                        <a href="mailto:{{ $member->email }}" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fas fa-envelope"></i>
                        </a>
                        @endif
                        @if($member->linkedin)
                        <a href="{{ $member->linkedin }}" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Values Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up">Our Core Values</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                The principles that guide every decision we make and every project we undertake
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body">
                    <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-primary-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Integrity</h3>
                    <p class="text-gray-600">We conduct our business with the highest ethical standards, transparency, and honesty in all our interactions.</p>
                </div>
            </div>

            <div class="card text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body">
                    <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-primary-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Innovation</h3>
                    <p class="text-gray-600">We embrace cutting-edge technology and creative solutions to solve complex engineering challenges.</p>
                </div>
            </div>

            <div class="card text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="card-body">
                    <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-award text-primary-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Excellence</h3>
                    <p class="text-gray-600">We strive for perfection in every project, delivering results that exceed expectations and industry standards.</p>
                </div>
            </div>

            <div class="card text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="card-body">
                    <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-leaf text-primary-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Sustainability</h3>
                    <p class="text-gray-600">We're committed to environmentally responsible practices and sustainable development for future generations.</p>
                </div>
            </div>

            <div class="card text-center" data-aos="fade-up" data-aos-delay="500">
                <div class="card-body">
                    <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-primary-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Collaboration</h3>
                    <p class="text-gray-600">We believe in the power of teamwork, partnering closely with clients, contractors, and stakeholders.</p>
                </div>
            </div>

            <div class="card text-center" data-aos="fade-up" data-aos-delay="600">
                <div class="card-body">
                    <div class="w-16 h-16 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-clock text-primary-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Reliability</h3>
                    <p class="text-gray-600">We deliver on our promises, meeting deadlines and budgets while maintaining the highest quality standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements Section -->
@if($achievements->count() > 0)
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up">Awards & Recognition</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Our commitment to excellence has been recognized by industry leaders and professional organizations
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($achievements as $achievement)
            <div class="card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="card-body text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-trophy text-yellow-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $achievement->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $achievement->description }}</p>
                    <div class="text-primary-500 font-semibold">{{ $achievement->year }}</div>
                    @if($achievement->organization)
                    <div class="text-gray-500 text-sm mt-1">{{ $achievement->organization }}</div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Testimonials Section -->
@if($testimonials->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4" data-aos="fade-up">Client Testimonials</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Hear what our clients have to say about their experience working with us
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
                    <p class="text-gray-600 mb-6 italic">"{{ $testimonial->content }}"</p>
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
            Let's Build Something Amazing Together
        </h2>
        <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Ready to start your next project? Our team is here to help you bring your vision to life.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('contact') }}"
               class="btn bg-white text-primary-500 hover:bg-gray-100 btn-lg px-8 py-4">
                <i class="fas fa-phone mr-2"></i>
                Start Your Project
            </a>
            <a href="{{ route('projects.index') }}"
               class="btn btn-secondary btn-lg px-8 py-4">
                <i class="fas fa-eye mr-2"></i>
                View Our Work
            </a>
        </div>
    </div>
</section>

@endsection
