<!-- Footer -->
<footer class="bg-gray-900 text-white">
    <!-- Main Footer Content -->
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-primary-500 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-hard-hat text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Elite Civil Engineering</h3>
                        <p class="text-gray-400 text-sm">Building Tomorrow's Infrastructure</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-6 max-w-md leading-relaxed">
                    Leading civil engineering firm with over 15 years of experience in delivering exceptional construction and infrastructure projects. We combine innovation with proven expertise to build lasting solutions.
                </p>

                <!-- Contact Info -->
                <div class="space-y-3">
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-primary-500 mr-3 w-5"></i>
                        <span class="text-gray-300">123 Engineering Plaza, Business District, City 12345</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-primary-500 mr-3 w-5"></i>
                        <span class="text-gray-300">+1 (555) 123-4567</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-primary-500 mr-3 w-5"></i>
                        <span class="text-gray-300">info@elitecivileng.com</span>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects.index') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Our Projects
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog.index') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Blog & News
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-lg font-semibold mb-6">Our Services</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('services.index') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Structural Engineering
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Project Management
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Site Development
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Construction Consulting
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Infrastructure Design
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="text-gray-300 hover:text-primary-400 transition-colors">
                            Quality Assurance
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Newsletter Signup -->
        <div class="mt-12 pt-8 border-t border-gray-800">
            <div class="max-w-md">
                <h4 class="text-lg font-semibold mb-4">Stay Updated</h4>
                <p class="text-gray-300 mb-4">Subscribe to our newsletter for the latest project updates and industry insights.</p>
                <form class="flex">
                    <input type="email"
                           placeholder="Enter your email"
                           class="flex-1 px-4 py-2 bg-gray-800 border border-gray-700 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary-500 text-white">
                    <button type="submit"
                            class="px-6 py-2 bg-primary-500 hover:bg-primary-600 rounded-r-lg transition-colors">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Social Media & Bottom Bar -->
    <div class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between">

                <!-- Social Media Links -->
                <div class="flex space-x-4 mb-4 md:mb-0">
                    <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-primary-500 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-primary-500 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-primary-500 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-primary-500 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-primary-500 rounded-full flex items-center justify-center transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>

                <!-- Copyright -->
                <div class="text-center md:text-right">
                    <p class="text-gray-400 text-sm">
                        &copy; {{ date('Y') }} Elite Civil Engineering. All rights reserved.
                    </p>
                    <div class="flex flex-wrap justify-center md:justify-end space-x-4 mt-2">
                        <a href="#" class="text-gray-400 hover:text-primary-400 text-sm transition-colors">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-primary-400 text-sm transition-colors">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-primary-400 text-sm transition-colors">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Professional Certifications Bar -->
    <div class="bg-gray-950 py-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center justify-center space-x-8 text-gray-500 text-sm">
                <div class="flex items-center">
                    <i class="fas fa-certificate text-primary-500 mr-2"></i>
                    <span>Licensed Professional Engineers</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-award text-primary-500 mr-2"></i>
                    <span>ISO 9001:2015 Certified</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-shield-alt text-primary-500 mr-2"></i>
                    <span>Fully Insured & Bonded</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-leaf text-primary-500 mr-2"></i>
                    <span>LEED Accredited Professionals</span>
                </div>
            </div>
        </div>
    </div>
</footer>
