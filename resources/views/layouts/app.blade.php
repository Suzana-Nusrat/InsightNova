<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsightNova AI</title>

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
    <div class="container text-center">
        <h4 class="fw-bold">InsightNova AI</h4>
        <p class="text-muted mb-2">Transforming ideas into intelligent solutions.</p>
        <p class="mb-0">© 2026 InsightNova AI. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>