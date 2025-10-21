<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Skyline Residential Complex',
                'slug' => 'skyline-residential-complex',
                'short_description' => 'Modern 15-story residential complex with 200 luxury apartments',
                'full_description' => 'This prestigious residential project features state-of-the-art amenities including a rooftop garden, swimming pool, gym, and underground parking. The complex incorporates sustainable design principles with energy-efficient systems and green building materials.',
                'client_name' => 'Skyline Developers Ltd.',
                'location' => 'Dhaka, Bangladesh',
                'start_date' => '2023-01-15',
                'completion_date' => '2024-12-30',
                'project_value' => 15000000.00,
                'main_image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800',
                'gallery_images' => [
                    'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800',
                    'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=800',
                    'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800'
                ],
                'category_id' => 1, // Residential
                'status' => 'ongoing',
                'is_featured' => true,
                'is_active' => true,
                'order' => 1,
                'specifications' => [
                    'Total Area' => '50,000 sq ft',
                    'Floors' => '15',
                    'Apartments' => '200',
                    'Parking Spaces' => '150'
                ],
            ],
            [
                'title' => 'Metro Shopping Center',
                'slug' => 'metro-shopping-center',
                'short_description' => 'Large-scale commercial shopping center with retail and entertainment facilities',
                'full_description' => 'A comprehensive shopping and entertainment destination featuring 300 retail stores, a food court, cinema complex, and parking for 2000 vehicles. The design emphasizes natural lighting and modern architecture.',
                'client_name' => 'Metro Group',
                'location' => 'Chittagong, Bangladesh',
                'start_date' => '2022-06-01',
                'completion_date' => '2024-03-15',
                'project_value' => 25000000.00,
                'main_image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=800',
                'gallery_images' => [
                    'https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=800',
                    'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800',
                    'https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?w=800'
                ],
                'category_id' => 2, // Commercial
                'status' => 'completed',
                'is_featured' => true,
                'is_active' => true,
                'order' => 2,
                'specifications' => [
                    'Total Area' => '150,000 sq ft',
                    'Retail Stores' => '300',
                    'Parking Capacity' => '2000 vehicles',
                    'Cinema Screens' => '8'
                ],
            ],
            [
                'title' => 'Industrial Manufacturing Plant',
                'slug' => 'industrial-manufacturing-plant',
                'short_description' => 'Advanced textile manufacturing facility with modern production lines',
                'full_description' => 'State-of-the-art textile manufacturing plant designed for maximum efficiency and worker safety. Features include automated production lines, quality control laboratories, and environmentally friendly waste management systems.',
                'client_name' => 'Bengal Textiles Ltd.',
                'location' => 'Gazipur, Bangladesh',
                'start_date' => '2023-03-01',
                'completion_date' => '2024-08-30',
                'project_value' => 18000000.00,
                'main_image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800',
                'gallery_images' => [
                    'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800',
                    'https://images.unsplash.com/photo-1565016687453-d7d10ef9f6b9?w=800',
                    'https://images.unsplash.com/photo-1581090466336-39b9e1a41b3c?w=800'
                ],
                'category_id' => 3, // Industrial
                'status' => 'ongoing',
                'is_featured' => false,
                'is_active' => true,
                'order' => 3,
                'specifications' => [
                    'Total Area' => '80,000 sq ft',
                    'Production Lines' => '12',
                    'Daily Capacity' => '50,000 units',
                    'Workers' => '500'
                ],
            ],
            [
                'title' => 'Expressway Bridge Construction',
                'slug' => 'expressway-bridge-construction',
                'short_description' => 'Major bridge construction project connecting two major highways',
                'full_description' => 'This critical infrastructure project involves the construction of a 2.5km bridge designed to reduce traffic congestion and improve connectivity between major urban centers. The bridge features modern cable-stayed design and can accommodate both vehicular and pedestrian traffic.',
                'client_name' => 'Department of Roads & Highways',
                'location' => 'Dhaka-Chittagong Highway',
                'start_date' => '2022-01-01',
                'completion_date' => '2024-06-30',
                'project_value' => 45000000.00,
                'main_image' => 'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800',
                'gallery_images' => [
                    'https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800',
                    'https://images.unsplash.com/photo-1519931726-bfb2d49c3d88?w=800',
                    'https://images.unsplash.com/photo-1519931726-bfb2d49c3d88?w=800'
                ],
                'category_id' => 4, // Infrastructure
                'status' => 'completed',
                'is_featured' => true,
                'is_active' => true,
                'order' => 4,
                'specifications' => [
                    'Length' => '2.5 km',
                    'Width' => '32 meters',
                    'Lanes' => '6',
                    'Load Capacity' => '200 tons'
                ],
            ],
        ];

        foreach ($projects as $project) {
            \App\Models\Project::create($project);
        }
    }
}
