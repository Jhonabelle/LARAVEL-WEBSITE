@extends('app')

@section('content')
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #c52e2e;
            --primary-dark: #9c2424;
            --text-dark: #333;
            --text-light: #777;
            --bg-light: #f9f9f9;
            --white: #fff;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--bg-light);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header & Navigation */
        header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }

        .logo span {
            color: var(--text-dark);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 600;
            font-size: 16px;
            transition: var(--transition);
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .nav-links a.active {
            color: var(--primary-color);
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: var(--primary-color);
            bottom: -5px;
            left: 0;
        }

        .book-btn {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 16px;
        }

        .book-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--text-dark);
            cursor: pointer;
        }
          .section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 36px;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .section-title p {
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 30px;
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        .about-text p {
            color: var(--text-light);
            margin-bottom: 20px;
        }

        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transition);
        }

        .about-image img:hover {
            transform: scale(1.05);
        }
    </style>
<header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">Crimson<span>Grill</span></a>
                
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="{{ route('about') }}" class= "active">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="{{ route('menu') }}">MENU</a></li>
                    <li><a href="{{route('contactus')}}">CONTACT</a></li>
                </ul>
                
                <button class="book-btn" id="openBooking">BOOK A TABLE</button>
                
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>

        
    </header>
    <section class="section">
        <div class="container">
            
            <div class="section-title">
                <h2>About CrimsonGrill</h2>
                <p>Discover our story and passion for exquisite cuisine</p>
            </div>
            
            <div class="about-content">
                <div class="about-text">
                    <h3>We Provide the Best Food & Dining Experience</h3>
                    <p>Tempor erat elitr rebum at cilta. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Cilta erat ipsum et lorem et sit, sed stet lorem sit cilta duo justo magna dolore erat amet.</p>
                    <p>Our chefs combine traditional recipes with modern techniques to create dishes that delight both the eyes and the palate. We source our ingredients from local farmers and suppliers to ensure the highest quality.</p>
                    <button class="book-btn">View Our Menu</button>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Restaurant interior">
                </div>
                
            </div>
        </div>
    </section>

@endsection