<template>
    <div class="contact-page py-12">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-center mb-12">Contact Us</h1>
                
                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-6">Send us a Message</h2>
                        
                        <form @submit.prevent="submitForm" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Full Name *
                                </label>
                                <input 
                                    v-model="form.name"
                                    type="text" 
                                    id="name"
                                    required
                                    :disabled="loading"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50 disabled:cursor-not-allowed"
                                >
                                <p v-if="errors.name" class="mt-1 text-sm text-red-600">{{ errors.name[0] }}</p>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email Address *
                                </label>
                                <input 
                                    v-model="form.email"
                                    type="email" 
                                    id="email"
                                    required
                                    :disabled="loading"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50 disabled:cursor-not-allowed"
                                >
                                <p v-if="errors.email" class="mt-1 text-sm text-red-600">{{ errors.email[0] }}</p>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                    Your Message *
                                </label>
                                <textarea 
                                    v-model="form.message"
                                    id="message"
                                    rows="5"
                                    required
                                    :disabled="loading"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:opacity-50 disabled:cursor-not-allowed"
                                ></textarea>
                                <p v-if="errors.message" class="mt-1 text-sm text-red-600">{{ errors.message[0] }}</p>
                            </div>
                            
                            <button 
                                type="submit"
                                :disabled="loading"
                                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center"
                            >
                                <svg v-if="loading" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span>{{ loading ? 'Sending...' : 'Send Message' }}</span>
                            </button>
                            
                            <!-- Success Message -->
                            <div v-if="successMessage" class="p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>{{ successMessage }}</span>
                            </div>
                            
                            <!-- Error Message -->
                            <div v-if="errorMessage" class="p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                                <span>{{ errorMessage }}</span>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Contact Info -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-6">Get in Touch</h2>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="text-blue-600 mr-4 text-xl mt-1">
                                    📍
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Our Office</h3>
                                    <p class="text-gray-600 mt-1">123 Tech Street<br>San Francisco, CA 94107</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-blue-600 mr-4 text-xl mt-1">
                                    📧
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Email Us</h3>
                                    <p class="text-gray-600 mt-1">hello@vuelaravel.co</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-blue-600 mr-4 text-xl mt-1">
                                    📞
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Call Us</h3>
                                    <p class="text-gray-600 mt-1">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-blue-600 mr-4 text-xl mt-1">
                                    ⏰
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Business Hours</h3>
                                    <p class="text-gray-600 mt-1">Monday - Friday: 9am - 6pm PST</p>
                                    <p class="text-gray-600 mt-1">Saturday: 10am - 4pm PST</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Map Placeholder -->
                        <div class="mt-8 bg-gradient-to-br from-blue-50 to-purple-50 border border-gray-200 h-48 rounded-lg flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-3xl mb-2">📍</div>
                                <p class="text-gray-500 font-medium">Our Location</p>
                                <p class="text-gray-400 text-sm mt-1">Interactive Map Here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, reactive } from 'vue';

// Form data
const form = reactive({
    name: '',
    email: '',
    message: ''
});

// UI state
const loading = ref(false);
const successMessage = ref('');
const errorMessage = ref('');
const errors = ref({});

// Get CSRF token from meta tag
const getCsrfToken = () => {
    return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
};

// Form submission
const submitForm = async () => {
    // Reset states
    loading.value = true;
    successMessage.value = '';
    errorMessage.value = '';
    errors.value = {};

    try {
        const response = await fetch('/contact', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': getCsrfToken(),
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify(form)
        });

        const data = await response.json();

        if (response.ok) {
            // Success
            successMessage.value = data.message;
            
            // Clear form
            form.name = '';
            form.email = '';
            form.message = '';
            
            // Clear success message after 5 seconds
            setTimeout(() => {
                successMessage.value = '';
            }, 5000);
        } else {
            // Handle validation errors
            if (response.status === 422 && data.errors) {
                errors.value = data.errors;
                errorMessage.value = 'Please fix the errors below.';
            } else {
                errorMessage.value = data.message || 'Something went wrong. Please try again.';
            }
        }
    } catch (error) {
        console.error('Contact form error:', error);
        errorMessage.value = 'Network error. Please check your connection and try again.';
    } finally {
        loading.value = false;
    }
};
</script>