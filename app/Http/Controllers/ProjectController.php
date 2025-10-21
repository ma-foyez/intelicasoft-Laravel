<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the projects
     */
    public function index(Request $request)
    {
        $query = Project::with('category')->published();

        // Filter by category if provided
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', "%{$searchTerm}%")
                  ->orWhere('description', 'like', "%{$searchTerm}%")
                  ->orWhere('location', 'like', "%{$searchTerm}%");
            });
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

        $projects = $query->paginate(12);
        $categories = Category::active()->get();

        return view('projects.index', compact('projects', 'categories'));
    }

    /**
     * Show the form for creating a new project
     */
    public function create()
    {
        $categories = Category::active()->get();
        return view('projects.create', compact('categories'));
    }

    /**
     * Store a newly created project in storage
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'location' => 'required|string|max:255',
            'client_name' => 'required|string|max:255',
            'budget' => 'nullable|numeric|min:0',
            'duration_months' => 'nullable|integer|min:1',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'featured_image' => 'nullable|image|max:2048',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'image|max:2048',
            'status' => 'required|in:draft,published',
            'is_featured' => 'boolean',
        ]);

        $data = $request->all();

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')
                ->store('projects', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery_images')) {
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $image) {
                $galleryImages[] = $image->store('projects/gallery', 'public');
            }
            $data['gallery_images'] = json_encode($galleryImages);
        }

        Project::create($data);

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified project
     */
    public function show(Project $project)
    {
        $project->load('category');

        // Get related projects from same category
        $relatedProjects = Project::with('category')
            ->where('category_id', $project->category_id)
            ->where('id', '!=', $project->id)
            ->published()
            ->latest()
            ->limit(3)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }

    /**
     * Show the form for editing the specified project
     */
    public function edit(Project $project)
    {
        $categories = Category::active()->get();
        return view('projects.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified project in storage
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'location' => 'required|string|max:255',
            'client_name' => 'required|string|max:255',
            'budget' => 'nullable|numeric|min:0',
            'duration_months' => 'nullable|integer|min:1',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'featured_image' => 'nullable|image|max:2048',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'image|max:2048',
            'status' => 'required|in:draft,published',
            'is_featured' => 'boolean',
        ]);

        $data = $request->all();

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')
                ->store('projects', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('gallery_images')) {
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $image) {
                $galleryImages[] = $image->store('projects/gallery', 'public');
            }
            $data['gallery_images'] = json_encode($galleryImages);
        }

        $project->update($data);

        return redirect()->route('projects.show', $project)
            ->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified project from storage
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
