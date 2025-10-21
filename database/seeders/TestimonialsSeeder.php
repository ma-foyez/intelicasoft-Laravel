<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'John Smith',
                'client_position' => 'Project Manager',
                'client_company' => 'ABC Construction Ltd.',
                'content' => 'Working with this civil engineering firm has been an absolute pleasure. Their attention to detail and innovative solutions exceeded our expectations. The team delivered our commercial building project on time and within budget.',
                'rating' => 5.0,
                'client_location' => 'New York, USA',
                'is_featured' => true,
                'order' => 1
            ],
            [
                'client_name' => 'Sarah Johnson',
                'client_position' => 'Development Director',
                'client_company' => 'Urban Developers Inc.',
                'content' => 'The structural engineering expertise demonstrated throughout our residential complex project was outstanding. Professional, reliable, and innovative - exactly what we needed for this challenging project.',
                'rating' => 5.0,
                'client_location' => 'Los Angeles, CA',
                'is_featured' => true,
                'order' => 2
            ],
            [
                'client_name' => 'Michael Chen',
                'client_position' => 'Infrastructure Manager',
                'client_company' => 'Metro Transit Authority',
                'content' => 'Their transportation engineering solutions have transformed our transit system. The team\'s deep understanding of urban infrastructure challenges resulted in a highly efficient and sustainable design.',
                'rating' => 4.8,
                'client_location' => 'Chicago, IL',
                'is_featured' => true,
                'order' => 3
            ],
            [
                'client_name' => 'Emily Rodriguez',
                'client_position' => 'Environmental Coordinator',
                'client_company' => 'Green City Planning',
                'content' => 'The environmental engineering approach was comprehensive and forward-thinking. They successfully integrated sustainability principles while maintaining cost-effectiveness and functionality.',
                'rating' => 4.9,
                'client_location' => 'Seattle, WA',
                'is_featured' => false,
                'order' => 4
            ],
            [
                'client_name' => 'David Williams',
                'client_position' => 'Operations Manager',
                'client_company' => 'Industrial Solutions Corp.',
                'content' => 'Exceptional geotechnical engineering services. Their soil analysis and foundation recommendations were spot-on, preventing potential issues and saving us significant costs down the line.',
                'rating' => 5.0,
                'client_location' => 'Houston, TX',
                'is_featured' => false,
                'order' => 5
            ],
            [
                'client_name' => 'Lisa Thompson',
                'client_position' => 'Municipal Engineer',
                'client_company' => 'City of Springfield',
                'content' => 'Their water resources engineering expertise helped us design a flood management system that has protected our community through multiple severe weather events. Highly recommended!',
                'rating' => 4.7,
                'client_location' => 'Springfield, MA',
                'is_featured' => false,
                'order' => 6
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
