<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Structural Design',
                'slug' => 'structural-design',
                'short_description' => 'Professional structural engineering design services for all types of buildings',
                'full_description' => 'Our structural design services include comprehensive analysis and design of residential, commercial, and industrial structures. We use advanced software tools and follow international codes to ensure safety and efficiency.',
                'icon' => 'fas fa-drafting-compass',
                'image' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=400',
                'features' => [
                    'Structural Analysis & Design',
                    'Foundation Design',
                    'Seismic Analysis',
                    'Load Calculations',
                    'Construction Drawings',
                    'Code Compliance Review'
                ],
                'starting_price' => 5000.00,
                'price_unit' => 'per project',
                'is_featured' => true,
                'is_active' => true,
                'order' => 1,
            ],
            [
                'title' => 'Construction Supervision',
                'slug' => 'construction-supervision',
                'short_description' => 'Expert supervision and quality control throughout the construction process',
                'full_description' => 'Professional construction supervision services to ensure your project is built according to specifications, on time, and within budget. Our experienced engineers provide regular site inspections and progress monitoring.',
                'icon' => 'fas fa-hard-hat',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=400',
                'features' => [
                    'Daily Site Supervision',
                    'Quality Control Inspections',
                    'Progress Monitoring',
                    'Safety Compliance',
                    'Material Testing Coordination',
                    'Regular Progress Reports'
                ],
                'starting_price' => 3000.00,
                'price_unit' => 'per month',
                'is_featured' => true,
                'is_active' => true,
                'order' => 2,
            ],
            [
                'title' => 'Project Management',
                'slug' => 'project-management',
                'short_description' => 'Complete project management from planning to completion',
                'full_description' => 'Comprehensive project management services covering all phases of construction projects. We coordinate between all stakeholders, manage timelines, budgets, and ensure successful project delivery.',
                'icon' => 'fas fa-tasks',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400',
                'features' => [
                    'Project Planning & Scheduling',
                    'Budget Management',
                    'Stakeholder Coordination',
                    'Risk Management',
                    'Resource Allocation',
                    'Progress Tracking & Reporting'
                ],
                'starting_price' => 8000.00,
                'price_unit' => 'per project',
                'is_featured' => true,
                'is_active' => true,
                'order' => 3,
            ],
            [
                'title' => 'Feasibility Studies',
                'slug' => 'feasibility-studies',
                'short_description' => 'Comprehensive project feasibility analysis and recommendations',
                'full_description' => 'Detailed feasibility studies to assess the viability of your construction projects. We analyze technical, economic, and environmental factors to provide informed recommendations.',
                'icon' => 'fas fa-chart-line',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400',
                'features' => [
                    'Technical Feasibility Analysis',
                    'Economic Viability Assessment',
                    'Environmental Impact Study',
                    'Risk Assessment',
                    'Market Analysis',
                    'Detailed Recommendations'
                ],
                'starting_price' => 2500.00,
                'price_unit' => 'per study',
                'is_featured' => false,
                'is_active' => true,
                'order' => 4,
            ],
            [
                'title' => '3D Modeling & Visualization',
                'slug' => '3d-modeling-visualization',
                'short_description' => 'Advanced 3D modeling and visualization for better project understanding',
                'full_description' => 'Professional 3D modeling and visualization services to help clients visualize their projects before construction. We create detailed 3D models and renderings for better decision making.',
                'icon' => 'fas fa-cube',
                'image' => 'https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=400',
                'features' => [
                    '3D Structural Models',
                    'Architectural Visualization',
                    'Virtual Walkthroughs',
                    'Animation & Renderings',
                    'VR/AR Presentations',
                    'Design Optimization'
                ],
                'starting_price' => 1500.00,
                'price_unit' => 'per model',
                'is_featured' => false,
                'is_active' => true,
                'order' => 5,
            ],
            [
                'title' => 'Infrastructure Design',
                'slug' => 'infrastructure-design',
                'short_description' => 'Specialized design services for roads, bridges, and public infrastructure',
                'full_description' => 'Expert infrastructure design services including roads, bridges, drainage systems, and other public infrastructure projects. We ensure compliance with local and international standards.',
                'icon' => 'fas fa-road',
                'image' => 'https://images.unsplash.com/photo-1519931726-bfb2d49c3d88?w=400',
                'features' => [
                    'Highway & Road Design',
                    'Bridge Design',
                    'Drainage Systems',
                    'Traffic Engineering',
                    'Utility Planning',
                    'Environmental Compliance'
                ],
                'starting_price' => 10000.00,
                'price_unit' => 'per km',
                'is_featured' => true,
                'is_active' => true,
                'order' => 6,
            ],
        ];

        foreach ($services as $service) {
            \App\Models\Service::create($service);
        }
    }
}
