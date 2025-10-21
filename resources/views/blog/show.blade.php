@extends('layouts.main')

@section('title', $post->meta_title ?: $post->title)
@section('description', $post->meta_description ?: $post->excerpt)

@section('content')
<div class="min-h-screen bg-gray-50">
    {{-- Article Header --}}
    <section class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-4xl mx-auto">
                {{-- Breadcrumb --}}
                <nav class="text-sm text-gray-500 mb-6">
                    <a href="{{ route('home') }}" class="hover:text-primary">Home</a>
                    <span class="mx-2">/</span>
                    <a href="{{ route('blog.index') }}" class="hover:text-primary">Blog</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-900">{{ $post->title }}</span>
                </nav>

                {{-- Article Meta --}}
                <div class="flex flex-wrap items-center text-sm text-gray-500 mb-4">
                    <span>{{ $post->published_at->format('F d, Y') }}</span>
                    <span class="mx-2">•</span>
                    <span>{{ $post->author }}</span>
                    @if($post->views > 0)
                        <span class="mx-2">•</span>
                        <span>{{ $post->views }} {{ $post->views === 1 ? 'view' : 'views' }}</span>
                    @endif
                    <span class="mx-2">•</span>
                    <span>{{ $post->reading_time }} min read</span>
                </div>

                {{-- Article Title --}}
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    {{ $post->title }}
                </h1>

                {{-- Article Excerpt --}}
                @if($post->excerpt)
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        {{ $post->excerpt }}
                    </p>
                @endif

                {{-- Tags --}}
                @if($post->tags_array && is_array($post->tags_array) && count($post->tags_array) > 0)
                    <div class="flex flex-wrap gap-2 mb-8">
                        @foreach($post->tags_array as $tag)
                            <a
                                href="{{ route('blog.index', ['tag' => $tag]) }}"
                                class="text-sm bg-primary/10 hover:bg-primary hover:text-white text-primary px-3 py-1 rounded transition-colors"
                            >
                                {{ $tag }}
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- Featured Image --}}
    @if($post->featured_image)
        <section class="relative">
            <div class="h-96 bg-gray-200 overflow-hidden">
                <img
                    src="{{ asset('storage/' . $post->featured_image) }}"
                    alt="{{ $post->title }}"
                    class="w-full h-full object-cover"
                >
            </div>
        </section>
    @endif

    {{-- Article Content --}}
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="grid lg:grid-cols-4 gap-12">
                    {{-- Main Content --}}
                    <div class="lg:col-span-3">
                        <div class="prose prose-lg max-w-none">
                            {!! nl2br(e($post->content)) !!}
                        </div>

                        {{-- Share Buttons --}}
                        <div class="border-t border-gray-200 pt-8 mt-12">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Share this article</h3>
                            <div class="flex gap-4">
                                <a
                                    href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(request()->url()) }}"
                                    target="_blank"
                                    class="flex items-center gap-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors"
                                >
                                    <i class="fab fa-twitter"></i>
                                    Twitter
                                </a>
                                <a
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                    target="_blank"
                                    class="flex items-center gap-2 bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 transition-colors"
                                >
                                    <i class="fab fa-facebook-f"></i>
                                    Facebook
                                </a>
                                <a
                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}"
                                    target="_blank"
                                    class="flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors"
                                >
                                    <i class="fab fa-linkedin-in"></i>
                                    LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Sidebar --}}
                    <div class="lg:col-span-1">
                        {{-- Author Card --}}
                        <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">About the Author</h3>
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-white text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">{{ $post->author }}</h4>
                                    <p class="text-sm text-gray-500">Civil Engineer</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600">
                                Experienced civil engineer passionate about sharing knowledge and insights
                                about modern engineering practices and innovations.
                            </p>
                        </div>

                        {{-- Table of Contents (if content has headings) --}}
                        <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Navigation</h3>
                            <div class="space-y-2">
                                <a href="{{ route('blog.index') }}" class="block text-primary hover:text-primary-dark transition-colors">
                                    ← Back to Blog
                                </a>
                                <button
                                    onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
                                    class="block text-gray-600 hover:text-primary transition-colors"
                                >
                                    ↑ Back to Top
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Articles --}}
    @if($relatedPosts->count() > 0)
        <section class="bg-white py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Related Articles</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        @foreach($relatedPosts as $relatedPost)
                            <article class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                                {{-- Featured Image --}}
                                <div class="h-48 bg-gray-200 overflow-hidden">
                                    @if($relatedPost->featured_image)
                                        <img
                                            src="{{ asset('storage/' . $relatedPost->featured_image) }}"
                                            alt="{{ $relatedPost->title }}"
                                            class="w-full h-full object-cover"
                                        >
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                                            <i class="fas fa-newspaper text-4xl text-white"></i>
                                        </div>
                                    @endif
                                </div>

                                {{-- Content --}}
                                <div class="p-6">
                                    <div class="text-sm text-gray-500 mb-2">
                                        {{ $relatedPost->published_at->format('M d, Y') }}
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                                        <a href="{{ route('blog.show', $relatedPost) }}" class="hover:text-primary transition-colors">
                                            {{ $relatedPost->title }}
                                        </a>
                                    </h3>
                                    <p class="text-gray-600 mb-4 line-clamp-3">
                                        {{ $relatedPost->excerpt ?: Str::limit(strip_tags($relatedPost->content), 100) }}
                                    </p>
                                    <a href="{{ route('blog.show', $relatedPost) }}" class="text-primary font-medium hover:text-primary-dark transition-colors">
                                        Read More <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
@endsection
