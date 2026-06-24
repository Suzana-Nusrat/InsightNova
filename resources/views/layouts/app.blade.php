<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsightNova</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top custom-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            <span class="brand-gradient">InsightNova</span>
        </a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link btn-nav">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer-section">

    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-4">
                <h3 class="fw-bold gradient-text">
                    InsightNova
                </h3>

                <p class="mt-3 text-light">
                    Transforming ideas into intelligent solutions through
                    AI, machine learning, automation, and digital innovation.
                </p>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="text-white">Quick Links</h5>

                <ul class="list-unstyled mt-3">
                    <li><a href="/" class="footer-link">Home</a></li>
                    <li><a href="/services" class="footer-link">Services</a></li>
                    <li><a href="/about" class="footer-link">About</a></li>
                    <li><a href="/contact" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="text-white">Connect With Us</h5>

                <div class="social-icons mt-3">

                    <a href="https://linkedin.com"
                       target="_blank"
                       class="social-btn">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="https://github.com"
                       target="_blank"
                       class="social-btn">
                        <i class="bi bi-github"></i>
                    </a>

                    <a href="https://facebook.com"
                       target="_blank"
                       class="social-btn">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="https://twitter.com"
                       target="_blank"
                       class="social-btn">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="mailto:hello@insightnova.ai"
                       class="social-btn">
                        <i class="bi bi-envelope-fill"></i>
                    </a>

                </div>
            </div>

        </div>

        <hr class="footer-divider">

        <div class="text-center">
            <p class="mb-0 text-light">
                © 2026 InsightNova. All Rights Reserved.
            </p>
        </div>

    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
