<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\HeroSection;
use App\Models\Stat;
use App\Models\Client;
use App\Models\Achievement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage
     */
    public function index()
    {
        // Get hero section data
        $heroSection = HeroSection::active()->first();

        // Get statistics for counters
        $stats = Stat::orderBy('order')->get();

        // Get featured services (limit 6)
        $services = Service::active()->featured()->limit(6)->get();

        // Get recent projects (limit 4)
        $recentProjects = Project::with('category')
            ->active()
            ->featured()
            ->latest()
            ->limit(4)
            ->get();

        // Get testimonials (limit 3)
        $testimonials = Testimonial::with('project')
            ->active()
            ->featured()
            ->latest()
            ->limit(3)
            ->get();

        // Get team members (limit 4)
        $teamMembers = TeamMember::active()
            ->orderBy('order')
            ->limit(4)
            ->get();

        // Get clients for logo showcase (limit 8)
        $clients = Client::active()
            ->orderBy('order')
            ->limit(8)
            ->get();

        // Get recent achievements (limit 3)
        $achievements = Achievement::orderBy('date_achieved', 'desc')
            ->limit(3)
            ->get();

        // Get project categories for filtering
        $categories = Category::active()->get();

        return view('home.index', compact(
            'heroSection',
            'stats',
            'services',
            'recentProjects',
            'testimonials',
            'teamMembers',
            'clients',
            'achievements',
            'categories'
        ));
    }

    /**
     * Display the about page
     */
    public function about()
    {
        // Get all team members
        $teamMembers = TeamMember::active()
            ->orderBy('order')
            ->get();

        // Get all achievements
        $achievements = Achievement::orderBy('year', 'desc')->get();

        // Get statistics
        $stats = Stat::orderBy('order')->get();

        // Get some testimonials
        $testimonials = Testimonial::with('project')
            ->active()
            ->featured()
            ->latest()
            ->limit(6)
            ->get();

        return view('pages.about', compact(
            'teamMembers',
            'achievements',
            'stats',
            'testimonials'
        ));
    }
}
