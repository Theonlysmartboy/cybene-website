<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cybene Technologies | Digital Innovation & POS Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Inter:wght@400;500&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #333;
            scroll-behavior: smooth;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        :root {
            --cybene-blue: #336699;
            --cybene-green: #66cc99;
            --cybene-orange: #ff9933;
            --cybene-pink: #ff6699;
            --cybene-light: #f9fafb;
        }

        /* Navbar */
        .navbar {
            background-color: var(--cybene-blue);
            transition: all 0.3s ease;
        }

        .navbar a {
            color: #fff !important;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navbar a:hover,
        .navbar .nav-link.active {
            color: var(--cybene-orange) !important;
        }

        .logo-image {
            width: 70px;
            height: 70px;
        }

        /* Hero */
        #hero {
            background: linear-gradient(rgba(51, 102, 153, 0.8), rgba(51, 102, 153, 0.8)),
                url('{{ asset('img/banner.jpeg') }}') center/cover no-repeat;
            color: white;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
        }

        /* Hexagon styling */
        .hex {
            position: relative;
            width: 200px;
            height: 115px;
            background: var(--cybene-light);
            margin: 60px auto;
            color: #333;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            border-radius: 10px;
        }

        .hex:before,
        .hex:after {
            content: "";
            position: absolute;
            width: 0;
            border-left: 100px solid transparent;
            border-right: 100px solid transparent;
        }

        .hex:before {
            bottom: 100%;
            border-bottom: 58px solid var(--cybene-light);
        }

        .hex:after {
            top: 100%;
            border-top: 58px solid var(--cybene-light);
        }

        .hex:hover {
            transform: translateY(-5px);
            background: var(--cybene-blue);
            color: white;
        }

        .hex:hover:before {
            border-bottom-color: var(--cybene-blue);
        }

        .hex:hover:after {
            border-top-color: var(--cybene-blue);
        }

        .hex i {
            font-size: 2rem;
            margin-top: 15px;
            color: var(--cybene-orange);
        }

        .hex:hover i {
            color: white;
        }

        /* Products & Services common */
        .section-title {
            color: var(--cybene-blue);
            margin-bottom: 50px;
        }

        /* Contact */
        .contact {
            background-color: var(--cybene-blue);
            color: white;
            padding: 80px 20px;
        }

        .contact input,
        .contact textarea {
            border-radius: 8px;
        }

        .contact button {
            background-color: var(--cybene-orange);
            border: none;
        }

        .contact button:hover {
            background-color: var(--cybene-green);
        }

        /* Footer */
        footer {
            background-color: #224466;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img class="logo-image" src="{{ asset('img/logo.png') }}" alt="Cybene">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section id="hero">
        <div class="container">
            <h1 class="display-4 fw-bold">Cybene Technologies</h1>
            <p class="lead mb-4">Innovative Software & Technology Solutions for Businesses</p>
            <a href="#products" class="btn btn-lg btn-warning text-uppercase fw-semibold px-4">Explore Our Products</a>
        </div>
    </section>

    <!-- Products -->
    <section id="products" class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="section-title fw-bold">Our Products & Solutions</h2>
            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-cart-check"></i>
                        <h5>CyPOS</h5>
                        <p>Point of Sale for retail and hospitality.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-capsule"></i>
                        <h5>CyPOS Pharma</h5>
                        <p>Pharmacy & Chemist POS software.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-shop"></i>
                        <h5>CyPOS Hotel</h5>
                        <p>Hotel & Restaurant POS and MIS.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center g-4 mt-4">
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-people-fill"></i>
                        <h5>SmartPay</h5>
                        <p>Employee payroll management software.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-truck-front"></i>
                        <h5>VMS</h5>
                        <p>Vehicle Sales & Inventory Management.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-geo-alt"></i>
                        <h5>TIMS</h5>
                        <p>Fleet & Transport Inventory Software.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center g-4 mt-4">
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-person-badge"></i>
                        <h5>CMS</h5>
                        <p>Member’s Club Management Software.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-code-slash"></i>
                        <h5>Custom Software</h5>
                        <p>Tailored web, mobile, and desktop apps.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="text-center py-5">
        <div class="container">
            <h2 class="section-title fw-bold">Our Technical Services</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-camera-video"></i>
                        <h5>CCTV Installation</h5>
                        <p>Professional CCTV installation & maintenance.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-router"></i>
                        <h5>Networking</h5>
                        <p>Structured cabling, IP telephony & internet setup.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-printer"></i>
                        <h5>Fiscal Devices</h5>
                        <p>KRA-approved ETR, ESD & fiscal printer setup.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-clock-history"></i>
                        <h5>Access Control</h5>
                        <p>Time attendance & door access systems.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hex">
                        <i class="bi bi-pc-display"></i>
                        <h5>Hardware Sales</h5>
                        <p>Computers, printers, UPS & peripherals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact text-center">
        <div class="container">
            <h2 class="mb-4">Let's Work Together</h2>
            <p class="mb-5">Get in touch to learn more about our Cypos products or custom software solutions.</p>
            <form class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-5">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="col-md-10">
                    <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-lg text-white px-5">Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        © <span id="year"></span> Cybene Technologies. All Rights Reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
        // Highlight active nav link on scroll
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.navbar .nav-link');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (pageYOffset >= sectionTop) current = section.getAttribute('id');
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) link.classList.add('active');
            });
        });
    </script>
</body>

</html>
