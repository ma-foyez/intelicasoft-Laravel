<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Modern Bridge Design: Innovations in Structural Engineering',
                'slug' => 'modern-bridge-design-innovations-structural-engineering',
                'excerpt' => 'Exploring the latest advances in bridge engineering, including cable-stayed designs, smart materials, and sustainable construction practices.',
                'content' => 'The field of bridge engineering has witnessed remarkable innovations in recent decades. From the iconic cable-stayed bridges that span great distances to the integration of smart materials that self-monitor structural health, modern bridge design represents the pinnacle of engineering achievement.

Cable-stayed bridges have become increasingly popular due to their aesthetic appeal and structural efficiency. The cable-stay system allows for longer spans with less material, making them both economical and environmentally friendly.

Smart materials, including shape-memory alloys and fiber-optic sensors, are revolutionizing how we monitor bridge health. These technologies enable real-time assessment of structural integrity, preventing catastrophic failures and extending bridge lifespan.

Sustainability is another crucial aspect of modern bridge design. Engineers are now incorporating recycled materials, optimizing designs for minimal environmental impact, and considering the entire lifecycle of the structure.

The future of bridge engineering lies in the integration of artificial intelligence for predictive maintenance, advanced composite materials for enhanced durability, and modular construction techniques for faster deployment.',
                'author_name' => 'Dr. Sarah Engineering',
                'status' => 'published',
                'is_featured' => true,
                'published_at' => now()->subDays(2),
                'tags' => json_encode(['Bridge Design', 'Structural Engineering', 'Innovation', 'Sustainability']),
                'views_count' => 245,
            ],
            [
                'title' => 'Sustainable Construction Materials: The Future of Green Building',
                'slug' => 'sustainable-construction-materials-future-green-building',
                'excerpt' => 'An in-depth look at eco-friendly construction materials that are reshaping the industry and reducing environmental impact.',
                'content' => 'The construction industry is undergoing a green revolution, with sustainable materials leading the charge toward environmental responsibility. As climate change concerns intensify, engineers and architects are embracing innovative materials that minimize environmental impact without compromising structural integrity.

Recycled concrete aggregate represents one of the most promising developments. By crushing and reusing existing concrete, we can reduce waste while creating high-quality construction material. This process can reduce CO2 emissions by up to 30% compared to traditional concrete production.

Bamboo has emerged as a remarkable alternative to steel reinforcement in certain applications. Its tensile strength rivals that of steel, while its rapid growth rate makes it infinitely renewable. In regions where bamboo is abundant, it offers a cost-effective and sustainable solution.

Cross-laminated timber (CLT) is revolutionizing high-rise construction. This engineered wood product can replace concrete and steel in many applications, significantly reducing the carbon footprint of buildings while providing excellent structural performance.

Bio-based materials, including mycelium-based insulation and algae-derived plastics, represent the cutting edge of sustainable construction. These materials grow rather than being manufactured, offering truly renewable alternatives to traditional building materials.

The integration of these materials requires careful consideration of local climate, building codes, and long-term performance. However, the benefits – both environmental and economic – make sustainable materials an essential component of future construction projects.',
                'author_name' => 'Prof. Michael Green',
                'status' => 'published',
                'is_featured' => true,
                'published_at' => now()->subDays(5),
                'tags' => json_encode(['Sustainable Materials', 'Green Building', 'Environmental Engineering', 'Innovation']),
                'views_count' => 189,
            ],
            [
                'title' => 'Smart Cities: Infrastructure Technology for Urban Development',
                'slug' => 'smart-cities-infrastructure-technology-urban-development',
                'excerpt' => 'How technology is transforming urban infrastructure to create more efficient, sustainable, and livable cities.',
                'content' => 'Smart cities represent the convergence of urban planning, engineering excellence, and cutting-edge technology. As urban populations continue to grow, the need for intelligent infrastructure becomes increasingly critical.

Internet of Things (IoT) sensors are the nervous system of smart cities. These devices monitor everything from traffic flow to air quality, providing real-time data that enables responsive city management. Traffic lights that adapt to current conditions, streetlights that dim when no one is around, and parking systems that guide drivers to available spaces all contribute to more efficient urban living.

Smart water management systems use advanced sensors and AI to detect leaks instantly, monitor water quality continuously, and optimize distribution networks. This technology can reduce water waste by up to 40% while ensuring consistent quality and pressure throughout the system.

Energy-efficient buildings are integral to smart city design. Building management systems that automatically adjust heating, cooling, and lighting based on occupancy and weather conditions can reduce energy consumption by 30-50%.

Transportation infrastructure is being revolutionized through intelligent traffic management systems. These systems coordinate traffic signals, manage congestion, and provide real-time information to commuters, reducing travel times and emissions.

The challenges of implementing smart city technology include cybersecurity concerns, the need for robust data privacy protection, and ensuring equitable access to technology benefits across all socioeconomic groups.

The future of smart cities lies in the integration of artificial intelligence, advanced materials, and renewable energy systems to create truly sustainable urban environments.',
                'author_name' => 'Dr. Lisa Technology',
                'status' => 'published',
                'is_featured' => false,
                'published_at' => now()->subDays(8),
                'tags' => json_encode(['Smart Cities', 'Urban Planning', 'IoT', 'Technology', 'Infrastructure']),
                'views_count' => 156,
            ],
            [
                'title' => 'Seismic Engineering: Designing Earthquake-Resistant Structures',
                'slug' => 'seismic-engineering-designing-earthquake-resistant-structures',
                'excerpt' => 'Understanding the principles and techniques used to design buildings and infrastructure that can withstand seismic forces.',
                'content' => 'Seismic engineering is a critical discipline that saves lives and protects infrastructure in earthquake-prone regions. The goal is not to create structures that remain completely undamaged during earthquakes, but rather to ensure they do not collapse and can be safely evacuated.

Base isolation is one of the most effective seismic protection technologies. By placing flexible bearings between a building and its foundation, the structure can move independently of ground motion, dramatically reducing seismic forces transmitted to the building.

Damping systems absorb and dissipate seismic energy. Tuned mass dampers, viscous dampers, and friction dampers all serve to reduce building vibrations during earthquakes. The Taipei 101 tower famously uses a massive tuned mass damper to control both seismic and wind-induced motions.

Ductile design principles ensure that structures can deform without losing their load-bearing capacity. Steel and properly reinforced concrete exhibit excellent ductile behavior, allowing buildings to sway and bend without catastrophic failure.

Performance-based seismic design represents the modern approach to earthquake engineering. Rather than following prescriptive codes, engineers analyze specific performance objectives and design structures to meet those goals under various earthquake scenarios.

Retrofit strategies for existing buildings are equally important. Techniques include adding shear walls, strengthening connections, and installing supplemental damping systems to improve seismic performance of older structures.

Advances in computational modeling and understanding of soil-structure interaction continue to improve our ability to design truly earthquake-resistant infrastructure.',
                'author_name' => 'Dr. James Seismic',
                'status' => 'published',
                'is_featured' => false,
                'published_at' => now()->subDays(12),
                'tags' => json_encode(['Seismic Engineering', 'Earthquake Safety', 'Structural Design', 'Risk Management']),
                'views_count' => 203,
            ],
            [
                'title' => 'Water Management Systems: Engineering Solutions for Clean Water',
                'slug' => 'water-management-systems-engineering-solutions-clean-water',
                'excerpt' => 'Exploring modern water treatment, distribution, and conservation technologies that ensure safe water supply for growing populations.',
                'content' => 'Water is perhaps the most critical resource for human survival, and engineering solutions for water management continue to evolve to meet growing global demands. Modern water management systems integrate advanced treatment technologies, efficient distribution networks, and innovative conservation strategies.

Advanced water treatment technologies have revolutionized water purification. Membrane bioreactors combine biological treatment with membrane filtration to produce high-quality effluent suitable for reuse. Reverse osmosis systems can remove even the smallest contaminants, making seawater desalination a viable option for water-scarce regions.

Smart water distribution networks use pressure management, leak detection systems, and automated valve controls to minimize water loss. These systems can reduce non-revenue water (water that is produced but not billed) from 30-40% in many systems to less than 10%.

Rainwater harvesting and greywater recycling systems are becoming standard features in sustainable building design. These systems can reduce municipal water demand by 30-50% while providing valuable water resources for irrigation and non-potable uses.

Constructed wetlands and green infrastructure provide natural water treatment solutions. These systems use plants and natural processes to remove pollutants while creating valuable habitat and green space in urban areas.

Remote monitoring and control systems enable real-time management of water quality and system performance. Sensors throughout the distribution network continuously monitor pressure, flow, and water quality, alerting operators to any issues immediately.

The future of water management lies in the integration of artificial intelligence for predictive maintenance, advanced materials for improved infrastructure durability, and decentralized treatment systems that reduce energy requirements and increase resilience.',
                'author_name' => 'Dr. Maria Water',
                'status' => 'published',
                'is_featured' => false,
                'published_at' => now()->subDays(15),
                'tags' => json_encode(['Water Management', 'Environmental Engineering', 'Sustainability', 'Infrastructure']),
                'views_count' => 178,
            ]
        ];

        foreach ($posts as $postData) {
            BlogPost::create($postData);
        }
    }
}
