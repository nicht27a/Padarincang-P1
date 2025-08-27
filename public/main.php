<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Padarincang - SMK Theresia</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header id="header" class="header">
        <nav class="nav">
            <div class="nav-brand">
                <span class="brand-text">Desa Padarincang</span>
            </div>
            
            <div class="nav-links">
                <a href="#home" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#activities" class="nav-link">Activities</a>
                <a href="#stay" class="nav-link">Stay</a>
                <a href="#gallery" class="nav-link">Gallery</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
            
            <div class="nav-actions">
                <button class="book-btn">Book Now</button>
            </div>
            
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
        
        <div class="mobile-menu" id="mobileMenu">
            <a href="#home" class="mobile-nav-link">Home</a>
            <a href="#about" class="mobile-nav-link">About</a>
            <a href="#activities" class="mobile-nav-link">Activities</a>
            <a href="#stay" class="mobile-nav-link">Stay</a>
            <a href="#gallery" class="mobile-nav-link">Gallery</a>
            <a href="#contact" class="mobile-nav-link">Contact</a>
            <button class="mobile-book-btn">Book Now</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <h1 class="hero-title">
                Welcome to
                <span class="hero-subtitle">Desa Padarincang</span>
            </h1>
            <p class="hero-description">
                Desa kami banyak keindahan Wisata Alamnya dan sumber mata air yang melimpah.
            </p>
            <div class="hero-buttons">
                <a href="#about" class="btn btn-primary">Discover Our Story</a>
                <a href="#activities" class="btn btn-secondary">Explore Activities</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Lokasi Desa</h2>
                <p class="section-description">
                    Desa Padarincang merupakan salah satu desa di Kecamatan Padarincang, Kabupaten Serang, Provinsi Banten.
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="feature-title">tttttt</h3>
                    <p class="feature-description">test</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <h3 class="feature-title">ttttt</h3>
                    <p class="feature-description">test</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-title">tttttt</h3>
                    <p class="feature-description">test</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="feature-title">tttttt</h3>
                    <p class="feature-description">test</p>
                </div>
            </div>
    </section>

    <script src="script.js"></script>
</body>
</html>