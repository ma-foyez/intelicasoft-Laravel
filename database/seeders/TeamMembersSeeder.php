<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => 'Dr. Ahmed Hassan',
                'position' => 'Senior Civil Engineer',
                'department' => 'Structural Engineering',
                'bio' => 'Dr. Hassan brings over 15 years of experience in structural engineering, specializing in high-rise buildings and bridge design. He holds a PhD in Civil Engineering and is a licensed Professional Engineer.',
                'email' => 'ahmed.hassan@civileng.com',
                'phone' => '+1-555-0101',
                'linkedin' => 'https://linkedin.com/in/ahmed-hassan-pe',
                'specializations' => json_encode(['Structural Analysis', 'Bridge Design', 'Seismic Engineering', 'Steel Structures']),
                'skills' => json_encode(['AutoCAD', 'SAP2000', 'ETABS', 'SAFE', 'Project Management']),
                'years_of_experience' => 15,
                'is_featured' => true,
                'order' => 1
            ],
            [
                'name' => 'Sarah Martinez',
                'position' => 'Transportation Engineer',
                'department' => 'Transportation Planning',
                'bio' => 'Sarah is a dedicated transportation engineer with expertise in traffic flow optimization and sustainable transportation solutions. She has led numerous urban planning projects.',
                'email' => 'sarah.martinez@civileng.com',
                'phone' => '+1-555-0102',
                'linkedin' => 'https://linkedin.com/in/sarah-martinez-te',
                'specializations' => json_encode(['Traffic Engineering', 'Urban Planning', 'Sustainable Transportation', 'Highway Design']),
                'skills' => json_encode(['VISSIM', 'Synchro', 'AutoCAD Civil 3D', 'GIS', 'Traffic Analysis']),
                'years_of_experience' => 8,
                'is_featured' => true,
                'order' => 2
            ],
            [
                'name' => 'Michael Chen',
                'position' => 'Environmental Engineer',
                'department' => 'Environmental Services',
                'bio' => 'Michael specializes in environmental impact assessment and sustainable engineering solutions. He has worked on numerous green building projects and environmental remediation sites.',
                'email' => 'michael.chen@civileng.com',
                'phone' => '+1-555-0103',
                'linkedin' => 'https://linkedin.com/in/michael-chen-env',
                'specializations' => json_encode(['Environmental Impact Assessment', 'Water Treatment', 'Waste Management', 'Green Building']),
                'skills' => json_encode(['Environmental Modeling', 'LEED Certification', 'Water Quality Analysis', 'Remediation Design']),
                'years_of_experience' => 12,
                'is_featured' => true,
                'order' => 3
            ],
            [
                'name' => 'Emily Johnson',
                'position' => 'Geotechnical Engineer',
                'department' => 'Geotechnical Services',
                'bio' => 'Emily is an expert in soil mechanics and foundation engineering. She has extensive experience in site investigation and foundation design for various types of structures.',
                'email' => 'emily.johnson@civileng.com',
                'phone' => '+1-555-0104',
                'linkedin' => 'https://linkedin.com/in/emily-johnson-geo',
                'specializations' => json_encode(['Soil Mechanics', 'Foundation Design', 'Site Investigation', 'Slope Stability']),
                'skills' => json_encode(['Geotechnical Software', 'Laboratory Testing', 'Field Investigation', 'Foundation Analysis']),
                'years_of_experience' => 10,
                'is_featured' => false,
                'order' => 4
            ]
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }
    }
}
