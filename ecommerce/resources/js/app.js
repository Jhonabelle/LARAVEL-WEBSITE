import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

// Import components
import App from './Components/App.vue';
import Navbar from './Components/Navbar.vue';
import Footer from './Components/Footer.vue';
import HomePage from './Pages/HomePage.vue';
import ProductsPage from './Pages/ProductsPage.vue';
import AboutPage from './Pages/AboutPage.vue';
import ContactPage from './Pages/ContactPage.vue';

// Router configuration
const routes = [
    { 
        path: '/', 
        component: HomePage,
        name: 'home'
    },
    { 
        path: '/products', 
        component: ProductsPage,
        name: 'products'
    },
    { 
        path: '/about', 
        component: AboutPage,
        name: 'about'
    },
    { 
        path: '/contact', 
        component: ContactPage,
        name: 'contact'
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior() {
        return { top: 0 };
    }
});

// Create Vue app
const app = createApp(App);

// Register global components
app.component('Navbar', Navbar);
app.component('Footer', Footer);

// Use router
app.use(router);

app.mount('#app');