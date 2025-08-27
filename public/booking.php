<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System - Desa Wisata Padarincang</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="booking.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>
<body class="booking-page">
    <!-- Header -->
    <header id="header" class="header">
        <nav class="nav">
            <div class="nav-brand">
                <span class="brand-text">Desa Wisata Padarincang</span>
            </div>
            
            <div class="nav-links">
                <a href="main.php#home" class="nav-link">Beranda</a>
                <a href="main.php#about" class="nav-link">Tentang Kami</a>
                <a href="main.php#activities" class="nav-link">Aktivitas</a>
                <a href="main.php#stay" class="nav-link">Penginapan</a>
                <a href="main.php#gallery" class="nav-link">Galeri</a>
                <a href="main.php#contact" class="nav-link">Kontak</a>
            </div>
            
            <div class="nav-actions">
                <button class="book-btn">Pesan Sekarang</button>
            </div>
            
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
        
        <div class="mobile-menu" id="mobileMenu">
            <a href="main.php#home" class="mobile-nav-link">Beranda</a>
            <a href="main.php#about" class="mobile-nav-link">Tentang Kami</a>
            <a href="main.php#activities" class="mobile-nav-link">Aktivitas</a>
            <a href="main.php#stay" class="mobile-nav-link">Penginapan</a>
            <a href="main.php#gallery" class="mobile-nav-link">Galeri</a>
            <a href="main.php#contact" class="mobile-nav-link">Kontak</a>
            <button class="mobile-book-btn">Pesan Sekarang</button>
        </div>
    </header>

    <!-- Hero Section with Background Image -->
    <section class="booking-hero">
        <div class="booking-hero-bg">
            <img src="https://images.pexels.com/photos/1144176/pexels-photo-1144176.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Desa Wisata Padarincang">
            <div class="booking-hero-overlay"></div>
        </div>
        
        <div class="booking-container">
            <div class="booking-card">
                <h1 class="booking-title">Reservasi Wisata Anda</h1>
                <p class="booking-subtitle">Pilih jenis reservasi yang Anda inginkan</p>
                
                <!-- Main Selection Pills -->
                <div class="booking-pills" id="bookingPills">
                    <button class="booking-pill" data-type="accommodation">
                        <i class="fas fa-bed"></i>
                        <span>Penginapan</span>
                    </button>
                    <button class="booking-pill" data-type="attraction">
                        <i class="fas fa-mountain"></i>
                        <span>Wahana</span>
                    </button>
                </div>

                <!-- Accommodation Booking Form -->
                <div class="booking-form accommodation-form" id="accommodationForm" style="display: none;">
                    <div class="form-header">
                        <h2>Pesan Penginapan</h2>
                        <button class="back-btn" onclick="showMainPills()">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                    </div>
                    
                    <div class="search-bar" role="group" aria-label="Accommodation search bar">
                        <div class="search-item">
                            <span class="search-label">Check in</span>
                            <input type="date" class="search-input" placeholder="Add dates">
                        </div>
                        <span class="divider" aria-hidden="true"></span>
                        <div class="search-item">
                            <span class="search-label">Check out</span>
                            <input type="date" class="search-input" placeholder="Add dates">
                        </div>
                        <span class="divider" aria-hidden="true"></span>
                        <div class="search-item">
                            <span class="search-label">Orang</span>
                            <div class="guest-inline">
                                <button type="button" class="guest-btn" onclick="changeGuests(-1)">-</button>
                                <span id="guestCount">2</span>
                                <button type="button" class="guest-btn" onclick="changeGuests(1)">+</button>
                            </div>
                        </div>
                        <button class="search-btn-circle" aria-label="Search">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Attraction Booking Form -->
                <div class="booking-form attraction-form" id="attractionForm" style="display: none;">
                    <div class="form-header">
                        <h2>Pesan Wahana</h2>
                        <button class="back-btn" onclick="showMainPills()">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                    </div>
                    
                    <div class="search-bar" role="group" aria-label="Attraction search bar">
                        <div class="search-item">
                            <span class="search-label">Wahana</span>
                            <div class="custom-select" id="wahanaSelect">
                                <button type="button" class="custom-select-toggle" aria-haspopup="listbox" aria-expanded="false">
                                    <span class="custom-select-value" data-placeholder="Pilih wahana">Pilih wahana</span>
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <div class="custom-select-panel" role="listbox">
                                    <button role="option" class="custom-option" data-value="hiking">
                                        <i class="fas fa-person-hiking option-icon"></i>
                                        <div class="option-text">
                                            <span class="option-title">Forest Hiking</span>
                                            <span class="option-sub">Explore ancient trails</span>
                                        </div>
                                    </button>
                                    <button role="option" class="custom-option" data-value="river">
                                        <i class="fas fa-water option-icon"></i>
                                        <div class="option-text">
                                            <span class="option-title">River Activities</span>
                                            <span class="option-sub">Kayaking and fishing</span>
                                        </div>
                                    </button>
                                    <button role="option" class="custom-option" data-value="climbing">
                                        <i class="fas fa-mountain option-icon"></i>
                                        <div class="option-text">
                                            <span class="option-title">Rock Climbing</span>
                                            <span class="option-sub">Natural rock formations</span>
                                        </div>
                                    </button>
                                    <button role="option" class="custom-option" data-value="photography">
                                        <i class="fas fa-camera option-icon"></i>
                                        <div class="option-text">
                                            <span class="option-title">Photography Tours</span>
                                            <span class="option-sub">Capture stunning views</span>
                                        </div>
                                    </button>
                                    <button role="option" class="custom-option" data-value="yoga">
                                        <i class="fas fa-sun option-icon"></i>
                                        <div class="option-text">
                                            <span class="option-title">Sunrise Yoga</span>
                                            <span class="option-sub">Morning mindfulness</span>
                                        </div>
                                    </button>
                                    <button role="option" class="custom-option" data-value="nature">
                                        <i class="fas fa-leaf option-icon"></i>
                                        <div class="option-text">
                                            <span class="option-title">Nature Walks</span>
                                            <span class="option-sub">Gentle guided walks</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <span class="divider" aria-hidden="true"></span>
                        <div class="search-item">
                            <span class="search-label">Tanggal</span>
                            <input type="date" class="search-input" placeholder="Add date">
                        </div>
                        <span class="divider" aria-hidden="true"></span>
                        <div class="search-item">
                            <span class="search-label">Orang</span>
                            <div class="guest-inline">
                                <button type="button" class="guest-btn" onclick="changeAttractionGuests(-1)">-</button>
                                <span id="attractionGuestCount">1</span>
                                <button type="button" class="guest-btn" onclick="changeAttractionGuests(1)">+</button>
                            </div>
                        </div>
                        <button class="search-btn-circle" aria-label="Search">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="main.js"></script>
    <script src="booking.js"></script>
</body>
</html>