<template>
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <router-link to="/" class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg"></div>
                    <span class="text-2xl font-bold text-gray-800">VueLaravel</span>
                </router-link>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                    <router-link 
                        to="/" 
                        class="text-gray-700 hover:text-blue-600 transition duration-300"
                        :class="{ 'text-blue-600 font-semibold': $route.path === '/' }"
                    >
                        Home
                    </router-link>
                    <router-link 
                        to="/products" 
                        class="text-gray-700 hover:text-blue-600 transition duration-300"
                        :class="{ 'text-blue-600 font-semibold': $route.path === '/products' }"
                    >
                        Products & Services
                    </router-link>
                    <router-link 
                        to="/about" 
                        class="text-gray-700 hover:text-blue-600 transition duration-300"
                        :class="{ 'text-blue-600 font-semibold': $route.path === '/about' }"
                    >
                        About Us
                    </router-link>
                    <router-link 
                        to="/contact" 
                        class="text-gray-700 hover:text-blue-600 transition duration-300"
                        :class="{ 'text-blue-600 font-semibold': $route.path === '/contact' }"
                    >
                        Contact Us
                    </router-link>
                </div>
                
                <!-- Mobile menu button -->
                <button 
                    @click="isMenuOpen = !isMenuOpen"
                    class="md:hidden text-gray-700 hover:text-blue-600 focus:outline-none"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path v-if="!isMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Navigation -->
            <div v-if="isMenuOpen" class="md:hidden mt-4 space-y-2">
                <router-link 
                    to="/" 
                    @click="isMenuOpen = false"
                    class="block py-2 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition"
                    :class="{ 'bg-blue-50 text-blue-600 font-semibold': $route.path === '/' }"
                >
                    Home
                </router-link>
                <router-link 
                    to="/products" 
                    @click="isMenuOpen = false"
                    class="block py-2 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition"
                    :class="{ 'bg-blue-50 text-blue-600 font-semibold': $route.path === '/products' }"
                >
                    Products & Services
                </router-link>
                <router-link 
                    to="/about" 
                    @click="isMenuOpen = false"
                    class="block py-2 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition"
                    :class="{ 'bg-blue-50 text-blue-600 font-semibold': $route.path === '/about' }"
                >
                    About Us
                </router-link>
                <router-link 
                    to="/contact" 
                    @click="isMenuOpen = false"
                    class="block py-2 px-4 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition"
                    :class="{ 'bg-blue-50 text-blue-600 font-semibold': $route.path === '/contact' }"
                >
                    Contact Us
                </router-link>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { ref, watch } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();
const isMenuOpen = ref(false);

// Close mobile menu when route changes
watch(() => route.path, () => {
    isMenuOpen.value = false;
});
</script>