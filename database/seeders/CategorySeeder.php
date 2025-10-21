<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Residential',
                'slug' => 'residential',
                'description' => 'Residential construction and design projects',
                'icon' => 'fas fa-home',
                'color' => '#FF6B35',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Commercial',
                'slug' => 'commercial',
                'description' => 'Commercial building and infrastructure projects',
                'icon' => 'fas fa-building',
                'color' => '#4ECDC4',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Industrial',
                'slug' => 'industrial',
                'description' => 'Industrial facilities and manufacturing plants',
                'icon' => 'fas fa-industry',
                'color' => '#45B7D1',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Infrastructure',
                'slug' => 'infrastructure',
                'description' => 'Roads, bridges, and public infrastructure',
                'icon' => 'fas fa-road',
                'color' => '#F7931E',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Structural Design',
                'slug' => 'structural-design',
                'description' => 'Structural engineering and analysis projects',
                'icon' => 'fas fa-drafting-compass',
                'color' => '#9B59B6',
                'order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
