<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = [
            [
                'title' => 'Professional Engineer License',
                'description' => 'Licensed Professional Engineer (PE) in Civil Engineering with specialization in Structural Engineering.',
                'achievement_type' => 'certification',
                'issued_by' => 'State Board of Professional Engineers',
                'date_achieved' => '2015-06-15',
                'badge_icon' => 'fas fa-certificate',
                'badge_color' => '#059669',
                'is_featured' => true,
                'order' => 1
            ],
            [
                'title' => 'LEED Accredited Professional',
                'description' => 'Leadership in Energy and Environmental Design (LEED) Accredited Professional certification.',
                'achievement_type' => 'certification',
                'issued_by' => 'U.S. Green Building Council',
                'date_achieved' => '2018-03-20',
                'badge_icon' => 'fas fa-leaf',
                'badge_color' => '#10B981',
                'is_featured' => true,
                'order' => 2
            ],
            [
                'title' => 'Excellence in Engineering Award',
                'description' => 'Recognized for outstanding engineering design in the Metro Transit Bridge Project.',
                'achievement_type' => 'award',
                'issued_by' => 'American Society of Civil Engineers',
                'date_achieved' => '2022-11-10',
                'badge_icon' => 'fas fa-trophy',
                'badge_color' => '#F59E0B',
                'is_featured' => true,
                'order' => 3
            ],
            [
                'title' => '100+ Projects Completed',
                'description' => 'Successfully completed over 100 civil engineering projects across various sectors.',
                'achievement_type' => 'milestone',
                'issued_by' => 'Professional Portfolio',
                'date_achieved' => '2023-05-30',
                'badge_icon' => 'fas fa-building',
                'badge_color' => '#3B82F6',
                'is_featured' => false,
                'order' => 4
            ],
            [
                'title' => 'Structural Engineering Excellence',
                'description' => 'Recognition for innovative structural engineering solutions in high-rise construction.',
                'achievement_type' => 'recognition',
                'issued_by' => 'International Association of Structural Engineers',
                'date_achieved' => '2021-08-05',
                'badge_icon' => 'fas fa-hammer',
                'badge_color' => '#DC2626',
                'is_featured' => false,
                'order' => 5
            ],
            [
                'title' => 'Safety Engineering Certification',
                'description' => 'Advanced certification in construction safety and risk management.',
                'achievement_type' => 'certification',
                'issued_by' => 'National Safety Council',
                'date_achieved' => '2020-02-14',
                'badge_icon' => 'fas fa-shield-alt',
                'badge_color' => '#7C3AED',
                'is_featured' => false,
                'order' => 6
            ]
        ];

        foreach ($achievements as $achievement) {
            Achievement::create($achievement);
        }
    }
}
