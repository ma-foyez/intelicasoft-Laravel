<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroSections = [
            [
                'title' => 'Building the Spaces Where Memories Are Made',
                'subtitle' => 'Excellence in Civil Engineering',
                'description' => 'Transforming visions into reality through innovative engineering solutions. We specialize in residential, commercial, and infrastructure projects that stand the test of time.',
                'primary_button_text' => 'View Our Projects',
                'primary_button_url' => '/projects',
                'secondary_button_text' => 'Get Quote',
                'secondary_button_url' => '/contact',
                'background_type' => 'image',
                'background_color' => null,
                'is_active' => true,
                'priority' => 1,
                'background_image_id' => null,
                'background_video_id' => null,
            ],
        ];

        foreach ($heroSections as $hero) {
            \App\Models\HeroSection::create($hero);
        }
    }
}
