<template>
    <div class="products-page py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold text-center mb-12">Products & Services</h1>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Web Development</h3>
                        <p class="text-gray-600 mb-4">
                            Custom web applications using Laravel and Vue.js with modern features.
                        </p>
                        <ul class="mb-4">
                            <li class="flex items-center mb-2">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>API Development</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>Real-time Features</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>Responsive Design</span>
                            </li>
                        </ul>
                        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                            Learn More
                        </button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Mobile Apps</h3>
                        <p class="text-gray-600 mb-4">
                            Cross-platform mobile applications with Laravel backend.
                        </p>
                        <ul class="mb-4">
                            <li class="flex items-center mb-2">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>iOS & Android</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>Push Notifications</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>Offline Support</span>
                            </li>
                        </ul>
                        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                            Learn More
                        </button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Consulting</h3>
                        <p class="text-gray-600 mb-4">
                            Expert consulting for Laravel and Vue.js projects.
                        </p>
                        <ul class="mb-4">
                            <li class="flex items-center mb-2">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>Code Reviews</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>Performance Optimization</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>Team Training</span>
                            </li>
                        </ul>
                        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>