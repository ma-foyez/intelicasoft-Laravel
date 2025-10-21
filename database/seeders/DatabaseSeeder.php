<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RolePermissionSeeder::class,
            SettingsSeeder::class,
            ContentSeeder::class,
            // CivilEngineerContentSeeder::class, // Disabled due to portfolio_projects table removal
            // PortfolioSeeder::class, // Disabled due to portfolio_projects table removal

            // New civil engineer website seeders
            CategorySeeder::class,
            ProjectSeeder::class,
            ServiceSeeder::class,
            HeroSectionSeeder::class,
            StatSeeder::class,
            TestimonialsSeeder::class,
            TeamMembersSeeder::class,
            ClientsSeeder::class,
            AchievementsSeeder::class,
            // AboutSectionSeeder::class,
        ]);
    }
}
