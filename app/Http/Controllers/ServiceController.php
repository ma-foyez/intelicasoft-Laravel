<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services
     */
    public function index(Request $request)
    {
        $query = Service::active();

        // Search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', "%{$searchTerm}%")
                  ->orWhere('description', 'like', "%{$searchTerm}%");
            });
        }

        // Sort by
        $sortBy = $request->get('sort', 'title');
        switch ($sortBy) {
            case 'price_low':
                $query->orderBy('price');
                break;
            case 'price_high':
                $query->orderByDesc('price');
                break;
            case 'newest':
                $query->latest();
                break;
            case 'title':
            default:
                $query->orderBy('title');
                break;
        }

        $services = $query->paginate(9);

        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new service
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created service in storage
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'short_description' => 'nullable|string|max:500',
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'price' => 'nullable|numeric|min:0',
            'features' => 'nullable|array',
            'features.*' => 'string|max:255',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('services', 'public');
        }

        // Convert features array to JSON
        if ($request->has('features')) {
            $data['features'] = json_encode(array_filter($request->features));
        }

        Service::create($data);

        return redirect()->route('services.index')
            ->with('success', 'Service created successfully.');
    }

    /**
     * Display the specified service
     */
    public function show(Service $service)
    {
        // Get related services
        $relatedServices = Service::active()
            ->where('id', '!=', $service->id)
            ->featured()
            ->limit(3)
            ->get();

        return view('services.show', compact('service', 'relatedServices'));
    }

    /**
     * Show the form for editing the specified service
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified service in storage
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'short_description' => 'nullable|string|max:500',
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'price' => 'nullable|numeric|min:0',
            'features' => 'nullable|array',
            'features.*' => 'string|max:255',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('services', 'public');
        }

        // Convert features array to JSON
        if ($request->has('features')) {
            $data['features'] = json_encode(array_filter($request->features));
        }

        $service->update($data);

        return redirect()->route('services.show', $service)
            ->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified service from storage
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully.');
    }
}
