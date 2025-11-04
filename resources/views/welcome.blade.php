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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
    <section id="products" class="py-5 text-center" style="background:#f9fafb;">
        <div class="container">
            <h2 class="fw-bold mb-5" style="color:#336699;">Our Products & Services</h2>
            <div class="d-flex flex-wrap justify-content-center gap-4">

                <!-- CyPOS -->
                <div class="hex" style="--hex-color:#ff9933;">
                    <div class="inner">
                        <h5>CyPOS</h5>
                        <p>Point of Sale Software</p>
                    </div>
                </div>

                <!-- CyPOS Pharma -->
                <div class="hex" style="--hex-color:#ff6699;">
                    <div class="inner">
                        <h5>CyPOS Pharma</h5>
                        <p>Pharmacy & Chemist POS</p>
                    </div>
                </div>

                <!-- SmartPay -->
                <div class="hex" style="--hex-color:#66cc99;">
                    <div class="inner">
                        <h5>SmartPay</h5>
                        <p>Employee Payroll Software</p>
                    </div>
                </div>

                <!-- VMS -->
                <div class="hex" style="--hex-color:#cc3399;">
                    <div class="inner">
                        <h5>VMS</h5>
                        <p>Vehicle Sales & Inventory</p>
                    </div>
                </div>

                <!-- TIMS -->
                <div class="hex" style="--hex-color:#336699;">
                    <div class="inner">
                        <h5>TIMS</h5>
                        <p>Fleet & Inventory Software</p>
                    </div>
                </div>

                <!-- CMS -->
                <div class="hex" style="--hex-color:#ff6666;">
                    <div class="inner">
                        <h5>CMS</h5>
                        <p>Member’s Club Software</p>
                    </div>
                </div>

                <!-- Custom Software -->
                <div class="hex" style="--hex-color:#99cc33;">
                    <div class="inner">
                        <h5>Custom Software</h5>
                        <p>Web, Mobile & Desktop Apps</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="text-center py-5">
        <div class="container">
            <h2 class="fw-bold mb-5" style="color:#336699;">Our Technical Services</h2>
            <div class="d-flex flex-wrap justify-content-center gap-4">

                <!-- CyPOS -->
                <div class="hex" style="--hex-color:#ff9933;">
                    <div class="inner">
                        <h5>CyPOS</h5>
                        <p>Point of Sale Software</p>
                    </div>
                </div>

                <!-- CyPOS Pharma -->
                <div class="hex" style="--hex-color:#ff6699;">
                    <div class="inner">
                        <h5>CyPOS Pharma</h5>
                        <p>Pharmacy & Chemist POS</p>
                    </div>
                </div>

                <!-- SmartPay -->
                <div class="hex" style="--hex-color:#66cc99;">
                    <div class="inner">
                        <h5>SmartPay</h5>
                        <p>Employee Payroll Software</p>
                    </div>
                </div>

                <!-- VMS -->
                <div class="hex" style="--hex-color:#cc3399;">
                    <div class="inner">
                        <h5>VMS</h5>
                        <p>Vehicle Sales & Inventory</p>
                    </div>
                </div>

                <!-- TIMS -->
                <div class="hex" style="--hex-color:#336699;">
                    <div class="inner">
                        <h5>TIMS</h5>
                        <p>Fleet & Inventory Software</p>
                    </div>
                </div>

                <!-- CMS -->
                <div class="hex" style="--hex-color:#ff6666;">
                    <div class="inner">
                        <h5>CMS</h5>
                        <p>Member’s Club Software</p>
                    </div>
                </div>

                <!-- Custom Software -->
                <div class="hex" style="--hex-color:#99cc33;">
                    <div class="inner">
                        <h5>Custom Software</h5>
                        <p>Web, Mobile & Desktop Apps</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            
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
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
