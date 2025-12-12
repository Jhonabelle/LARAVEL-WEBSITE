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
    <h1 style= "margin-top: 100px;color:#9c2424; margin-left:60px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:50px; "> menu page</h1>
        </div>
    <div>
        <div class="card" style="width: 18rem;border-radius: 10px;box-shadow: 0 4px 12px rgba(0,0,0,0.2); overflow: hidden; margin-left: 50px; margin-top: 50px;">
  <img src="..." class="card-img-top" alt="..." >
  <div class="card-body">
    <p class="card-text">A5 WAGYU STEAK WITH COMPOUND BUTTER.</p>
    <p class="card-text">10500.00</p>
  </div>
 
</div>

        <div class="card" style="width: 18rem;border-radius: 10px;box-shadow: 0 4px 12px rgba(0,0,0,0.2); overflow: hidden; margin-left: 50px; margin-top: 50px;">
  <img src="..." class="card-img-top" alt="..." >
  <div class="card-body">
    <p class="card-text">A5 WAGYU STEAK WITH COMPOUND BUTTER.</p>
    <p class="card-text">10500.00</p>
  </div>

  
@endsection 