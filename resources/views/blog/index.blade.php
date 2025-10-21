@extends('layouts.main')

@section('title', 'Our Blog - Engineering Insights & Updates')

@section('content')
<div class="min-h-screen bg-gray-50">
    {{-- Hero Section --}}
    <section class="bg-primary text-white py-20">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-6">Engineering Insights</h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    Stay updated with the latest trends, techniques, and innovations in civil engineering
                </p>
            </div>
        </div>
    </section>

    {{-- Blog Content --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            {{-- Search and Filter Bar --}}
            <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                <form method="GET" action="{{ route('blog.index') }}" class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1">
                        <input
                            type="text"
                            name="search"
                            placeholder="Search articles..."
                            value="{{ request('search') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                        >
                    </div>
                    <div class="flex gap-4">
                        <select name="sort" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="latest" {{ request('sort') === 'latest' ? 'selected' : '' }}>Latest</option>
                            <option value="oldest" {{ request('sort') === 'oldest' ? 'selected' : '' }}>Oldest</option>
                            <option value="title" {{ request('sort') === 'title' ? 'selected' : '' }}>Title</option>
                        </select>
                        <button type="submit" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-primary-dark transition-colors">
                            Search
                        </button>
                    </div>
                </form>
            </div>

            <div class="grid lg:grid-cols-4 gap-8">
                {{-- Main Content --}}
                <div class="lg:col-span-3">
                    @if($posts->count() > 0)
                        {{-- Blog Posts Grid --}}
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                            @foreach($posts as $post)
                                <article class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                                    {{-- Featured Image --}}
                                    <div class="h-48 bg-gray-200 overflow-hidden">
                                        @if($post->featured_image)
                                            <img
                                                src="{{ asset('storage/' . $post->featured_image) }}"
                                                alt="{{ $post->title }}"
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
                                        {{-- Meta --}}
                                        <div class="flex items-center text-sm text-gray-500 mb-3">
                                            <span>{{ $post->published_at->format('M d, Y') }}</span>
                                            <span class="mx-2">•</span>
                                            <span>{{ $post->author }}</span>
                                            @if($post->views > 0)
                                                <span class="mx-2">•</span>
                                                <span>{{ $post->views }} {{ $post->views === 1 ? 'view' : 'views' }}</span>
                                            @endif
                                        </div>

                                        {{-- Title --}}
                                        <h3 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                                            <a href="{{ route('blog.show', $post) }}" class="hover:text-primary transition-colors">
                                                {{ $post->title }}
                                            </a>
                                        </h3>

                                        {{-- Excerpt --}}
                                        <p class="text-gray-600 mb-4 line-clamp-3">
                                            {{ $post->excerpt ?: Str::limit(strip_tags($post->content), 120) }}
                                        </p>

                                        {{-- Tags --}}
                                        @if($post->tags_array && is_array($post->tags_array) && count($post->tags_array) > 0)
                                            <div class="flex flex-wrap gap-2 mb-4">
                                                @foreach(array_slice($post->tags_array, 0, 3) as $tag)
                                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">
                                                        {{ $tag }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        @endif

                                        {{-- Read More --}}
                                        <a href="{{ route('blog.show', $post) }}" class="text-primary font-medium hover:text-primary-dark transition-colors">
                                            Read More <i class="fas fa-arrow-right ml-1"></i>
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        </div>

                        {{-- Pagination --}}
                        {{ $posts->links() }}
                    @else
                        {{-- No Posts Found --}}
                        <div class="text-center py-12">
                            <i class="fas fa-newspaper text-6xl text-gray-300 mb-4"></i>
                            <h3 class="text-2xl font-semibold text-gray-600 mb-2">No articles found</h3>
                            <p class="text-gray-500">
                                @if(request('search'))
                                    Try adjusting your search terms or filters.
                                @else
                                    Check back later for new engineering insights and updates.
                                @endif
                            </p>
                        </div>
                    @endif
                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-1">
                    {{-- Popular Tags --}}
                    @if($popularTags->count() > 0)
                        <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Popular Tags</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($popularTags as $tag)
                                    <a
                                        href="{{ route('blog.index', ['tag' => $tag]) }}"
                                        class="text-sm bg-gray-100 hover:bg-primary hover:text-white text-gray-600 px-3 py-1 rounded transition-colors"
                                    >
                                        {{ $tag }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Recent Posts --}}
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Articles</h3>
                        @php
                            $recentPosts = App\Models\BlogPost::published()->latest()->limit(5)->get();
                        @endphp

                        @forelse($recentPosts as $recentPost)
                            <div class="flex gap-3 mb-4 pb-4 {{ !$loop->last ? 'border-b border-gray-100' : '' }}">
                                <div class="w-16 h-16 bg-gray-200 rounded overflow-hidden flex-shrink-0">
                                    @if($recentPost->featured_image)
                                        <img
                                            src="{{ asset('storage/' . $recentPost->featured_image) }}"
                                            alt="{{ $recentPost->title }}"
                                            class="w-full h-full object-cover"
                                        >
                                    @else
                                        <div class="w-full h-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                                            <i class="fas fa-newspaper text-white"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-sm font-medium text-gray-900 line-clamp-2 mb-1">
                                        <a href="{{ route('blog.show', $recentPost) }}" class="hover:text-primary transition-colors">
                                            {{ $recentPost->title }}
                                        </a>
                                    </h4>
                                    <p class="text-xs text-gray-500">
                                        {{ $recentPost->published_at->format('M d, Y') }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 text-sm">No recent articles available.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
