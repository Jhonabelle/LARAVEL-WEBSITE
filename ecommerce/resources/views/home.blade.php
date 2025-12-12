<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrimsonGrill</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding: 180px 0 100px;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 30px;
            color: #eee;
        }

        .hero .book-btn {
            margin-top: 20px;
            font-size: 18px;
            padding: 15px 40px;
        }

        .tagline {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 10px;
            display: block;
        }

        /* About Section */
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

        /* Booking Modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2000;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .booking-modal {
            background-color: var(--white);
            width: 90%;
            max-width: 600px;
            border-radius: 10px;
            padding: 40px;
            position: relative;
            transform: translateY(-50px);
            transition: var(--transition);
        }

        .modal-overlay.active .booking-modal {
            transform: translateY(0);
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--text-light);
            cursor: pointer;
            transition: var(--transition);
        }

        .close-modal:hover {
            color: var(--primary-color);
        }

        .modal-title {
            font-size: 28px;
            margin-bottom: 30px;
            color: var(--text-dark);
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-dark);
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
        }

        .form-row {
            display: flex;
            gap: 20px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .submit-btn {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            width: 100%;
            padding: 15px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: var(--primary-dark);
        }

        /* Footer */
        footer {
            background-color: #222;
            color: #ccc;
            padding: 70px 0 30px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column {
            flex: 1;
            min-width: 250px;
        }

        .footer-column h3 {
            font-size: 22px;
            margin-bottom: 25px;
            color: var(--white);
        }

        .footer-column p {
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #aaa;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #333;
            color: var(--white);
            border-radius: 50%;
            text-decoration: none;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #444;
            font-size: 14px;
            color: #888;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-content {
                flex-direction: column;
            }
            
            .about-image {
                order: -1;
            }
            
            .hero h1 {
                font-size: 40px;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }

            .nav-links {
                position: fixed;
                top: 80px;
                left: 0;
                background-color: var(--white);
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                box-shadow: var(--shadow);
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: var(--transition);
                z-index: 999;
            }

            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .hero {
                padding: 150px 0 80px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 16px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 28px;
            }
            
            .section-title h2 {
                font-size: 28px;
            }
            
            .booking-modal {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">Crimson<span>Grill</span></a>
                
                <ul class="nav-links">
                    <li><a href="#" class="active">HOME</a></li>
                    <li><a href="{{ route('about') }}">ABOUT</a></li>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <span class="tagline">Enjoy Our Delicious Meal</span>
            <h1>Experience Fine Dining at CrimsonGrill</h1>
            <p>Tempor erat elitr rebum at cilta. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Cilta erat ipsum et lorem et sit, sed stet lorem sit cilta duo justo magna dolore erat amet.</p>
            <button class="book-btn" id="openBookingHero">BOOK A TABLE</button>
        </div>
    </section>

    <!-- About Section -->
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

    <!-- Booking Modal -->
    <div class="modal-overlay" id="bookingModal">
        <div class="booking-modal">
            <button class="close-modal" id="closeModal">
                <i class="fas fa-times"></i>
            </button>
            
            <h2 class="modal-title">Book a Table</h2>
            
            <form id="bookingForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="Your Email" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-control" placeholder="Your Phone" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" id="date" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="time">Time</label>
                        <select id="time" class="form-control" required>
                            <option value="" disabled selected>Select Time</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="13:00">1:00 PM</option>
                            <option value="14:00">2:00 PM</option>
                            <option value="18:00">6:00 PM</option>
                            <option value="19:00">7:00 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="21:00">9:00 PM</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="guests">Number of Guests</label>
                        <select id="guests" class="form-control" required>
                            <option value="" disabled selected>Select Guests</option>
                            <option value="1">1 Person</option>
                            <option value="2">2 People</option>
                            <option value="3">3 People</option>
                            <option value="4">4 People</option>
                            <option value="5">5 People</option>
                            <option value="6">6 People</option>
                            <option value="7">7+ People</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="message">Special Requests (Optional)</label>
                    <textarea id="message" class="form-control" rows="4" placeholder="Any special requirements or requests"></textarea>
                </div>
                
                <button type="submit" class="submit-btn">BOOK NOW</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>CrimsonGrill</h3>
                    <p>Enjoy our delicious meals in a cozy atmosphere. We provide the best dining experience with fresh ingredients and professional service.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Reservation</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Food Street, City, Country</li>
                        <li><i class="fas fa-phone"></i> +1 234 567 8900</li>
                        <li><i class="fas fa-envelope"></i> info@restoran.com</li>
                        <li><i class="fas fa-clock"></i> Mon-Sun: 10AM - 11PM</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Restoran. All Rights Reserved. | Designed with passion for food lovers</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navLinks = document.querySelector('.nav-links');
        
        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = mobileMenuBtn.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                mobileMenuBtn.querySelector('i').classList.remove('fa-times');
                mobileMenuBtn.querySelector('i').classList.add('fa-bars');
            });
        });
        
        // Booking Modal Functionality
        const bookingModal = document.getElementById('bookingModal');
        const openBookingBtns = document.querySelectorAll('#openBooking, #openBookingHero');
        const closeModalBtn = document.getElementById('closeModal');
        
        // Open modal
        openBookingBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                bookingModal.classList.add('active');
                document.body.style.overflow = 'hidden'; // Prevent scrolling
            });
        });
        
        // Close modal
        closeModalBtn.addEventListener('click', () => {
            bookingModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
        
        // Close modal when clicking outside
        bookingModal.addEventListener('click', (e) => {
            if (e.target === bookingModal) {
                bookingModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
        
        // Form submission
        const bookingForm = document.getElementById('bookingForm');
        bookingForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;
            
            // Show success message
            alert(`Thank you ${name}! Your table has been booked for ${date} at ${time}. We'll confirm your reservation shortly.`);
            
            // Reset form and close modal
            bookingForm.reset();
            bookingModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
        
        // Set minimum date to today for booking
        const dateInput = document.getElementById('date');
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
            }
        });
    </script>
</body>
</html>