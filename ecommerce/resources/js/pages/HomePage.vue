<template>
    <div class="homepage">
        <!-- Hero Section -->
        <section class="hero bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-5xl font-bold mb-6">Welcome to VueLaravel Co.</h1>
                <p class="text-xl mb-8 max-w-2xl mx-auto">
                    Building modern web applications with Laravel and Vue.js
                </p>
                <router-link 
                    to="/contact" 
                    class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition"
                >
                    Get Started
                </router-link>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Why Choose Us</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center p-6">
                        <div class="text-blue-600 text-4xl mb-4">⚡</div>
                        <h3 class="text-xl font-semibold mb-3">Fast Performance</h3>
                        <p class="text-gray-600">Optimized Laravel backend with reactive Vue frontend</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-blue-600 text-4xl mb-4">🔒</div>
                        <h3 class="text-xl font-semibold mb-3">Secure & Reliable</h3>
                        <p class="text-gray-600">Enterprise-grade security with Laravel's built-in protection</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="text-blue-600 text-4xl mb-4">🎨</div>
                        <h3 class="text-xl font-semibold mb-3">Modern UI</h3>
                        <p class="text-gray-600">Beautiful interfaces with Vue.js and Tailwind CSS</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>