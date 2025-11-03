<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cybene Technologies | Digital Innovation & POS Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Inter:wght@400;500&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #333;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        /* Brand Colors */
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
        }

        .navbar a {
            color: #fff !important;
            font-weight: 500;
        }

        .navbar a:hover {
            color: var(--cybene-orange) !important;
        }

        .logo-image{
            width:70px;
            height: 70px;
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, var(--cybene-blue), var(--cybene-pink));
            color: white;
            text-align: center;
            padding: 130px 20px 120px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-cybene-primary {
            background-color: var(--cybene-orange);
            border: none;
            color: white;
            font-weight: 600;
        }

        .btn-cybene-primary:hover {
            background-color: var(--cybene-green);
        }

        /* Products */
        .products {
            padding: 80px 20px;
            background-color: var(--cybene-light);
        }

        .product-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #eee;
            padding: 30px;
            transition: 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .product-icon {
            font-size: 2.5rem;
            color: var(--cybene-blue);
            margin-bottom: 10px;
        }

        /* Services */
        .services {
            padding: 80px 20px;
        }

        .services h2 {
            color: var(--cybene-blue);
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
            <a class="navbar-brand fw-bold" href="#"> <img class="logo-image" src="{{ asset('img/logo.png') }}" alt="Cybene"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section id="hero" class="text-white text-center d-flex align-items-center justify-content-center"
        style="background: linear-gradient(rgba(51, 102, 153, 0.8), rgba(51, 102, 153, 0.8)),
                url('{{ asset('img/banner.jpeg') }}') center/cover no-repeat; height: 90vh;">
        <div class="container">
            <h1 class="display-4 fw-bold">Cybene Technologies</h1>
            <p class="lead mb-4">Innovative Software & Technology Solutions for Businesses</p>
            <a href="#products" class="btn btn-lg btn-warning text-uppercase fw-semibold px-4">Explore Our Products</a>
        </div>
    </section>

    <!-- Products -->
    <section id="products" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-5 text-primary">Our Products & Solutions</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-semibold">CyPOS</h5>
                            <p class="card-text">Point of Sale software for retail and hospitality businesses, providing
                                efficient billing and inventory management.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-success fw-semibold">CyPOS Pharma</h5>
                            <p class="card-text">Pharmacy & Chemist Point of Sale system for managing prescriptions,
                                inventory, and customer billing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-warning fw-semibold">CyPOS Hotel</h5>
                            <p class="card-text">Hotel & Restaurant POS and Management Information System designed for
                                seamless guest and order management.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-danger fw-semibold">SmartPay</h5>
                            <p class="card-text">Employee Payroll Management Software for automating salary
                                calculations, statutory deductions, and payslip generation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-info fw-semibold">VMS</h5>
                            <p class="card-text">Web-based Vehicle Sales and Inventory Management System for car dealers
                                and fleet companies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-secondary fw-semibold">TIMS</h5>
                            <p class="card-text">Fleet & Inventory Management Software built to handle transport
                                logistics and asset tracking efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-pink fw-semibold">CMS</h5>
                            <p class="card-text">Member’s Club Management Software for handling subscriptions, payments,
                                and membership data seamlessly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services -->
    <section id="services" class="services text-center">
        <div class="container">
            <h2 class="mb-5">Custom Software Development</h2>
            <p class="lead mx-auto mb-5" style="max-width: 700px;">
                Beyond our Cypos suite, we design and build custom software for web, mobile, and desktop — transforming
                your business ideas into fully functional digital products.
            </p>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-icon">🌐</div>
                        <h5>Web Applications</h5>
                        <p>Modern, scalable web apps built with performance and security in mind — tailored to your
                            business needs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-icon">📱</div>
                        <h5>Mobile Apps</h5>
                        <p>Cross-platform mobile applications for Android and iOS that deliver seamless user experiences
                            and engagement.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-icon">🖥️</div>
                        <h5>Desktop Software</h5>
                        <p>Robust and efficient desktop applications — from business management tools to custom data
                            systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact text-center">
        <div class="container">
            <h2 class="mb-4">Let's Work Together</h2>
            <p class="mb-5">Get in touch to learn more about our Cypos products or to discuss a custom software
                solution for your business.</p>
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
    </script>
</body>

</html>
