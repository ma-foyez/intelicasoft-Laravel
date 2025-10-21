<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'title' => 'Years of Experience',
                'value' => '15',
                'suffix' => '+',
                'icon' => 'fas fa-calendar-alt',
                'color' => '#FF6B35',
                'is_active' => true,
                'order' => 1,
            ],
            [
                'title' => 'Projects Completed',
                'value' => '250',
                'suffix' => '+',
                'icon' => 'fas fa-building',
                'color' => '#4ECDC4',
                'is_active' => true,
                'order' => 2,
            ],
            [
                'title' => 'Happy Clients',
                'value' => '180',
                'suffix' => '+',
                'icon' => 'fas fa-users',
                'color' => '#45B7D1',
                'is_active' => true,
                'order' => 3,
            ],
            [
                'title' => 'Awards Won',
                'value' => '25',
                'suffix' => '+',
                'icon' => 'fas fa-trophy',
                'color' => '#F7931E',
                'is_active' => true,
                'order' => 4,
            ],
        ];

        foreach ($stats as $stat) {
            \App\Models\Stat::create($stat);
        }
    }
}
