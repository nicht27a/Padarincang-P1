<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Wisata Padarincang</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header id="header" class="header">
        <nav class="nav">
            <div class="nav-brand">
                <div class="logo-container">
                    <i class="fas fa-leaf"></i>
                </div>
                <span class="brand-text">Desa Wisata Padarincang</span>
            </div>
            
            <div class="nav-links">
                <a href="#home" class="nav-link">Beranda</a>
                <a href="#about" class="nav-link">Tentang Kami</a>
                <a href="#activities" class="nav-link">Aktivitas</a>
                <a href="#stay" class="nav-link">Penginapan</a>
                <a href="#gallery" class="nav-link">Galeri</a>
                <a href="#contact" class="nav-link">Kontak</a>
            </div>
            
            <div class="nav-actions">
                <button class="book-btn">Pesan Sekarang</button>
            </div>
            
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
        
        <div class="mobile-menu" id="mobileMenu">
            <a href="#home" class="mobile-nav-link">Beranda</a>
            <a href="#about" class="mobile-nav-link">Tentang Kami</a>
            <a href="#activities" class="mobile-nav-link">Aktivitas</a>
            <a href="#stay" class="mobile-nav-link">Penginapan</a>
            <a href="#gallery" class="mobile-nav-link">Galeri</a>
            <a href="#contact" class="mobile-nav-link">Kontak</a>
            <button class="mobile-book-btn">Pesan Sekarang</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <h1 class="hero-title">
                Selamat Datang di
                <span class="hero-subtitle">Desa Wisata Padarincang</span>
            </h1>
            <p class="hero-description">
                Escape to nature's embrace where tranquility meets adventure in our sustainable mountain village
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
                <h2 class="section-title">A Sanctuary in Nature</h2>
                <p class="section-description">
                    Nestled in the heart of the mountains, Verdant Valley is more than just a destination—
                    it's a way of life. Our eco-village represents a harmonious blend of sustainable living, 
                    natural beauty, and authentic community connections.
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="feature-title">Sustainable Living</h3>
                    <p class="feature-description">Our village operates on 100% renewable energy and follows zero-waste principles</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <h3 class="feature-title">Natural Beauty</h3>
                    <p class="feature-description">Surrounded by pristine forests, crystal-clear streams, and breathtaking mountain views</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-title">Community Spirit</h3>
                    <p class="feature-description">A welcoming community dedicated to preserving nature and sharing authentic experiences</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="feature-title">Wellness Focus</h3>
                    <p class="feature-description">Programs designed to rejuvenate your mind, body, and soul in harmony with nature</p>
                </div>
            </div>

            <div class="mission-section">
                <div class="mission-content">
                    <h3 class="mission-title">Our Mission</h3>
                    <p class="mission-text">
                        We believe in creating spaces where people can reconnect with nature, themselves, 
                        and each other. Our village serves as a model for sustainable tourism that benefits 
                        both visitors and the local ecosystem.
                    </p>
                    <p class="mission-text">
                        Through mindful practices, educational programs, and immersive experiences, 
                        we invite you to be part of a movement toward more conscious living.
                    </p>
                </div>
                <div class="mission-image">
                    <img src="https://images.pexels.com/photos/1770809/pexels-photo-1770809.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Sustainable village practices">
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section id="activities" class="activities">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nature Adventures Await</h2>
                <p class="section-description">
                    Immerse yourself in the natural world through carefully curated activities 
                    that respect and celebrate our pristine environment.
                </p>
            </div>

            <div class="activities-grid">
                <div class="activity-card">
                    <div class="activity-image">
                        <img src="https://images.pexels.com/photos/1144176/pexels-photo-1144176.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Forest Hiking">
                    </div>
                    <div class="activity-content">
                        <div class="activity-header">
                            <div class="activity-icon">
                                <i class="fas fa-tree"></i>
                            </div>
                            <h3 class="activity-title">Forest Hiking</h3>
                        </div>
                        <p class="activity-description">Explore ancient trails through old-growth forests with knowledgeable guides</p>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-image">
                        <img src="https://images.pexels.com/photos/1666021/pexels-photo-1666021.jpeg?auto=compress&cs=tinysrgb&w=500" alt="River Activities">
                    </div>
                    <div class="activity-content">
                        <div class="activity-header">
                            <div class="activity-icon">
                                <i class="fas fa-water"></i>
                            </div>
                            <h3 class="activity-title">River Activities</h3>
                        </div>
                        <p class="activity-description">Kayaking, fishing, and swimming in pristine mountain streams</p>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-image">
                        <img src="https://images.pexels.com/photos/2582937/pexels-photo-2582937.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Rock Climbing">
                    </div>
                    <div class="activity-content">
                        <div class="activity-header">
                            <div class="activity-icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <h3 class="activity-title">Rock Climbing</h3>
                        </div>
                        <p class="activity-description">Challenge yourself on natural rock formations with certified instructors</p>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-image">
                        <img src="https://images.pexels.com/photos/1576073/pexels-photo-1576073.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Photography Tours">
                    </div>
                    <div class="activity-content">
                        <div class="activity-header">
                            <div class="activity-icon">
                                <i class="fas fa-camera"></i>
                            </div>
                            <h3 class="activity-title">Photography Tours</h3>
                        </div>
                        <p class="activity-description">Capture stunning landscapes and wildlife with expert photographers</p>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-image">
                        <img src="https://images.pexels.com/photos/1803859/pexels-photo-1803859.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Sunrise Yoga">
                    </div>
                    <div class="activity-content">
                        <div class="activity-header">
                            <div class="activity-icon">
                                <i class="fas fa-sun"></i>
                            </div>
                            <h3 class="activity-title">Sunrise Yoga</h3>
                        </div>
                        <p class="activity-description">Start your day with meditation and yoga in nature's cathedral</p>
                    </div>
                </div>

                <div class="activity-card">
                    <div class="activity-image">
                        <img src="https://images.pexels.com/photos/1576073/pexels-photo-1576073.jpeg?auto=compress&cs=tinysrgb&w=500" alt="Nature Walks">
                    </div>
                    <div class="activity-content">
                        <div class="activity-header">
                            <div class="activity-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3 class="activity-title">Nature Walks</h3>
                        </div>
                        <p class="activity-description">Gentle walks focusing on local flora, fauna, and conservation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accommodations Section -->
    <section id="stay" class="accommodations">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Stay Close to Nature</h2>
                <p class="section-description">
                    Choose from our thoughtfully designed accommodations, each offering a unique way 
                    to experience the tranquility of Verdant Valley.
                </p>
            </div>

            <div class="accommodations-grid">
                <div class="accommodation-card">
                    <div class="accommodation-image">
                        <img src="https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Forest Cabin">
                        <div class="price-tag">$120/night</div>
                    </div>
                    <div class="accommodation-content">
                        <h3 class="accommodation-title">Forest Cabin</h3>
                        <p class="accommodation-description">Cozy wooden cabin nestled among towering pines</p>
                        <div class="capacity">
                            <i class="fas fa-users"></i>
                            <span>2-4 guests</span>
                        </div>
                        <div class="amenities">
                            <div class="amenity"><span class="amenity-dot"></span>Private bathroom</div>
                            <div class="amenity"><span class="amenity-dot"></span>Kitchenette</div>
                            <div class="amenity"><span class="amenity-dot"></span>Fireplace</div>
                            <div class="amenity"><span class="amenity-dot"></span>Forest view</div>
                        </div>
                        <button class="reserve-btn">Reserve Now</button>
                    </div>
                </div>

                <div class="accommodation-card">
                    <div class="accommodation-image">
                        <img src="https://images.pexels.com/photos/1029609/pexels-photo-1029609.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Riverside Lodge">
                        <div class="price-tag">$180/night</div>
                    </div>
                    <div class="accommodation-content">
                        <h3 class="accommodation-title">Riverside Lodge</h3>
                        <p class="accommodation-description">Spacious lodge with panoramic river views</p>
                        <div class="capacity">
                            <i class="fas fa-users"></i>
                            <span>4-6 guests</span>
                        </div>
                        <div class="amenities">
                            <div class="amenity"><span class="amenity-dot"></span>Full kitchen</div>
                            <div class="amenity"><span class="amenity-dot"></span>Hot tub</div>
                            <div class="amenity"><span class="amenity-dot"></span>Deck</div>
                            <div class="amenity"><span class="amenity-dot"></span>River access</div>
                        </div>
                        <button class="reserve-btn">Reserve Now</button>
                    </div>
                </div>

                <div class="accommodation-card">
                    <div class="accommodation-image">
                        <img src="https://images.pexels.com/photos/2662816/pexels-photo-2662816.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Mountain Yurt">
                        <div class="price-tag">$85/night</div>
                    </div>
                    <div class="accommodation-content">
                        <h3 class="accommodation-title">Mountain Yurt</h3>
                        <p class="accommodation-description">Unique glamping experience with stunning mountain views</p>
                        <div class="capacity">
                            <i class="fas fa-users"></i>
                            <span>2-3 guests</span>
                        </div>
                        <div class="amenities">
                            <div class="amenity"><span class="amenity-dot"></span>Shared facilities</div>
                            <div class="amenity"><span class="amenity-dot"></span>Eco-friendly</div>
                            <div class="amenity"><span class="amenity-dot"></span>Stargazing deck</div>
                            <div class="amenity"><span class="amenity-dot"></span>Mountain view</div>
                        </div>
                        <button class="reserve-btn">Reserve Now</button>
                    </div>
                </div>
            </div>

            <div class="sustainability-banner">
                <i class="fas fa-tree sustainability-icon"></i>
                <h3 class="sustainability-title">Sustainable Comfort</h3>
                <p class="sustainability-text">
                    All our accommodations are built using sustainable materials and powered by renewable energy. 
                    Experience luxury that respects and protects our natural environment.
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Captured Moments</h2>
                <p class="section-description">
                    A glimpse into the natural beauty and peaceful experiences that await you 
                    in Verdant Valley.
                </p>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item large">
                    <img src="https://images.pexels.com/photos/1144176/pexels-photo-1144176.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Forest trail">
                </div>
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/2662816/pexels-photo-2662816.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Mountain landscape">
                </div>
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Wooden cabin">
                </div>
                <div class="gallery-item large">
                    <img src="https://images.pexels.com/photos/1666021/pexels-photo-1666021.jpeg?auto=compress&cs=tinysrgb&w=600" alt="River view">
                </div>
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1770809/pexels-photo-1770809.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Village life">
                </div>
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1803859/pexels-photo-1803859.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Sunrise yoga">
                </div>
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/2582937/pexels-photo-2582937.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Rock climbing">
                </div>
                <div class="gallery-item">
                    <img src="https://images.pexels.com/photos/1576073/pexels-photo-1576073.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Nature photography">
                </div>
            </div>

            <div class="gallery-cta">
                <button class="btn btn-primary">View Full Gallery</button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Plan Your Escape</h2>
                <p class="section-description">
                    Ready to experience the tranquility of Verdant Valley? Get in touch with us 
                    to plan your perfect nature retreat.
                </p>
            </div>

            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3 class="contact-title">Location</h3>
                            <p class="contact-text">
                                123 Mountain Trail Road<br>
                                Verdant Valley, Nature State 12345<br>
                                United States
                            </p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h3 class="contact-title">Phone</h3>
                            <p class="contact-text">
                                (555) 123-NATURE<br>
                                (555) 123-6288
                            </p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3 class="contact-title">Email</h3>
                            <p class="contact-text">
                                hello@verdantvalley.com<br>
                                reservations@verdantvalley.com
                            </p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h3 class="contact-title">Hours</h3>
                            <p class="contact-text">
                                Check-in: 3:00 PM - 8:00 PM<br>
                                Check-out: 8:00 AM - 11:00 AM<br>
                                Office: 8:00 AM - 6:00 PM daily
                            </p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-container">
                    <h3 class="form-title">Send us a Message</h3>
                    <form class="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" name="firstName">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="lastName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="4"></textarea>
                        </div>
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            <span>Send Message</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <i class="fas fa-leaf"></i>
                        <span class="footer-brand-text">Verdant Valley</span>
                    </div>
                    <p class="footer-description">
                        A sustainable nature village dedicated to providing authentic experiences 
                        while preserving the beauty of our pristine mountain environment.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-nav">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#activities">Activities</a></li>
                        <li><a href="#stay">Accommodations</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4 class="footer-title">Contact Info</h4>
                    <div class="footer-contact-info">
                        <p>123 Mountain Trail Road</p>
                        <p>Verdant Valley, NS 12345</p>
                        <p>(555) 123-NATURE</p>
                        <p>hello@verdantvalley.com</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="copyright">© 2025 Verdant Valley. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Sustainability</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>