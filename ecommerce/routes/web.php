<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

// Vue SPA Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/', [PageController::class, 'home']);
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// API Route for Contact Form
Route::post('/contact', [ContactController::class, 'store']);

// Fallback for Vue Router paths (like /products/123, /about/team, etc.)
Route::fallback([PageController::class, 'fallback']);