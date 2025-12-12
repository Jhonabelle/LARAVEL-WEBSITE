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
        /* Contact Us Section */
#contact {
  background: #f9f9f9;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

#contact h2 {
  text-align: center;
  margin-bottom: 1.5rem;
  color: #333;
}

/* Form styling */
#contact form {
  display: flex;
  flex-direction: column;
}

#contact label {
  font-weight: 600;
  margin-bottom: 0.5rem;
  color: #444;
}

#contact input,
#contact textarea {
  padding: 0.75rem;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 1rem;
  transition: border-color 0.3s ease;
}

#contact input:focus,
#contact textarea:focus {
  border-color: #0078d7; /* Microsoft blue */
  outline: none;
}

/* Button styling */
#contact button {
  margin-top: 1rem;
  padding: 0.75rem;
  background: #0078d7;
  color: #fff;
  font-size: 1rem;
  font-weight: 600;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.3s ease;
}

#contact button:hover {
  background: #005fa3;
}
    </style>
<header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">Crimson<span>Grill</span></a>
                
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="{{ route('about') }}" >ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="{{ route('menu') }}">MENU</a></li>
                    <li><a href="{{route('contactus')}}" class= "active">CONTACT</a></li>
                </ul>
                
                <button class="book-btn" id="openBooking">BOOK A TABLE</button>
                
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>

        
    </header>
<section id="contact" style="padding: 2rem; max-width: 600px; margin: auto;">
  <h1 style= "margin-left: -400px";>Contact Us</h1>
  <form action="/contact" method="POST">
    @csrf
    <div style="margin-bottom: 1rem;" >
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" required style="width: 100%; color:aliceblue;">
    </div>
    <div style="margin-bottom: 1rem;">
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required style="width: 100%;">
    </div>
    <div style="margin-bottom: 1rem;">
      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="5" required style="width: 100%;"></textarea>
    </div>
    <button type="submit">Send Message</button>
  </form>
</section>
@endsection