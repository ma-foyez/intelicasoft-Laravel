<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'Metro Construction',
                'company_name' => 'Metro Construction Ltd.',
                'website' => 'https://metroconstruction.com',
                'description' => 'Leading construction company specializing in commercial and residential projects.',
                'industry' => 'Construction',
                'location' => 'New York, NY',
                'partnership_start' => '2020-01-15',
                'is_featured' => true,
                'order' => 1
            ],
            [
                'name' => 'Urban Developers',
                'company_name' => 'Urban Developers Inc.',
                'website' => 'https://urbandevelopers.com',
                'description' => 'Real estate development company focusing on sustainable urban projects.',
                'industry' => 'Real Estate Development',
                'location' => 'Los Angeles, CA',
                'partnership_start' => '2019-06-20',
                'is_featured' => true,
                'order' => 2
            ],
            [
                'name' => 'City Transit Authority',
                'company_name' => 'Metropolitan Transit Authority',
                'website' => 'https://citytransit.gov',
                'description' => 'Public transportation agency managing city-wide transit systems.',
                'industry' => 'Public Transportation',
                'location' => 'Chicago, IL',
                'partnership_start' => '2018-03-10',
                'is_featured' => true,
                'order' => 3
            ],
            [
                'name' => 'Green Energy Corp',
                'company_name' => 'Green Energy Corporation',
                'website' => 'https://greenenergycorp.com',
                'description' => 'Renewable energy company developing wind and solar projects.',
                'industry' => 'Renewable Energy',
                'location' => 'Seattle, WA',
                'partnership_start' => '2021-09-05',
                'is_featured' => false,
                'order' => 4
            ],
            [
                'name' => 'Industrial Solutions',
                'company_name' => 'Industrial Solutions Corp.',
                'website' => 'https://industrialsolutions.com',
                'description' => 'Industrial engineering and manufacturing solutions provider.',
                'industry' => 'Industrial Manufacturing',
                'location' => 'Houston, TX',
                'partnership_start' => '2020-11-30',
                'is_featured' => false,
                'order' => 5
            ],
            [
                'name' => 'Springfield Municipality',
                'company_name' => 'City of Springfield',
                'website' => 'https://springfield.gov',
                'description' => 'Municipal government focused on infrastructure development and public works.',
                'industry' => 'Government',
                'location' => 'Springfield, MA',
                'partnership_start' => '2017-08-12',
                'is_featured' => false,
                'order' => 6
            ]
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
