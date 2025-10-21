<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the blog posts
     */
    public function index(Request $request)
    {
        $query = BlogPost::published();

        // Search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', "%{$searchTerm}%")
                  ->orWhere('excerpt', 'like', "%{$searchTerm}%")
                  ->orWhere('content', 'like', "%{$searchTerm}%")
                  ->orWhere('tags', 'like', "%{$searchTerm}%");
            });
        }

        // Filter by tag
        if ($request->filled('tag')) {
            $query->where('tags', 'like', "%{$request->tag}%");
        }

        // Sort by
        $sortBy = $request->get('sort', 'latest');
        switch ($sortBy) {
            case 'oldest':
                $query->oldest();
                break;
            case 'title':
                $query->orderBy('title');
                break;
            case 'latest':
            default:
                $query->latest();
                break;
        }

        $posts = $query->paginate(9);

        // Get popular tags
        $popularTags = BlogPost::published()
            ->whereNotNull('tags')
            ->pluck('tags')
            ->flatMap(function ($tags) {
                return json_decode($tags, true) ?? [];
            })
            ->countBy()
            ->sortDesc()
            ->take(10)
            ->keys();

        return view('blog.index', compact('posts', 'popularTags'));
    }

    /**
     * Show the form for creating a new blog post
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created blog post in storage
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'featured_image' => 'nullable|image|max:2048',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published',
            'is_featured' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        $data = $request->all();

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')
                ->store('blog', 'public');
        }

        // Convert tags array to JSON
        if ($request->has('tags')) {
            $data['tags'] = json_encode(array_filter($request->tags));
        }

        // Set published_at if status is published and no date is set
        if ($data['status'] === 'published' && !$data['published_at']) {
            $data['published_at'] = now();
        }

        // Add author (you might want to get this from auth)
        $data['author'] = 'Civil Engineer'; // Default author

        BlogPost::create($data);

        return redirect()->route('blog.index')
            ->with('success', 'Blog post created successfully.');
    }

    /**
     * Display the specified blog post
     */
    public function show(BlogPost $post)
    {
        // Increment view count
        $post->incrementViews();

        // Get related posts
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->latest()
            ->limit(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }

    /**
     * Show the form for editing the specified blog post
     */
    public function edit(BlogPost $post)
    {
        return view('blog.edit', compact('post'));
    }

    /**
     * Update the specified blog post in storage
     */
    public function update(Request $request, BlogPost $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'featured_image' => 'nullable|image|max:2048',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published',
            'is_featured' => 'boolean',
            'published_at' => 'nullable|date',
        ]);

        $data = $request->all();

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')
                ->store('blog', 'public');
        }

        // Convert tags array to JSON
        if ($request->has('tags')) {
            $data['tags'] = json_encode(array_filter($request->tags));
        }

        // Set published_at if status is published and no date is set
        if ($data['status'] === 'published' && !$data['published_at'] && $post->status !== 'published') {
            $data['published_at'] = now();
        }

        $post->update($data);

        return redirect()->route('blog.show', $post)
            ->with('success', 'Blog post updated successfully.');
    }

    /**
     * Remove the specified blog post from storage
     */
    public function destroy(BlogPost $post)
    {
        $post->delete();

        return redirect()->route('blog.index')
            ->with('success', 'Blog post deleted successfully.');
    }
}
