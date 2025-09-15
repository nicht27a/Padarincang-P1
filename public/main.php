<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Wisata Padarincang</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="atr.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<body>
    <!-- Header -->
    <header id="header" class="header">
        <nav class="nav">
            <div class="nav-brand">
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
        <div class="hero-bg">
            <video autoplay muted loop playsinline preload="auto" poster="" id="heroVideo">
                <source src="../Assets/Videos/video hero.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero-fallback-bg"></div>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">
                Selamat Datang di
                <span class="hero-subtitle">Desa Wisata Padarincang</span>
            </h1>
            <p class="hero-description">
                Jelajahi panorama menawan, kuliner khas, dan pengalaman wisata yang penuh makna.
            </p>
            <div class="hero-buttons">
                <a href="#about" class="btn btn-secondary">Jelajahi Wisata</a>
                <a href="#activities" class="btn btn-primary">Pesan Sekarang</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
        <!-- Hero Wave -->
        <div class="hero-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#ecfdf5" fill-opacity="1" d="M0,160L60,144C120,128,240,96,360,96C480,96,600,128,720,144C840,160,960,160,1080,144C1200,128,1320,96,1380,80L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">

        <div class="mission-section">
                <div class="mission-content">
                    <h3 class="mission-title">Sejarah Desa</h3>
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
                    <img src="../Assets/Images/sejarahdesa.jpeg">
                </div>
            </div>
    </section>

    <!-- Activities Section -->
    <section id="activities" class="activities">
      <header class="headeractivities">
        <h1>Atraksi Desa</h1>
        <p>Atraksi seru khas Desa Padarincang siap memberi pengalaman unik.</p>
      </header>
      
      <div class="attractions-list">
        <div class="attraction-item" data-attraction="eiffel">
          <div class="attraction-header">
            <h3>Curug Cigumawang</h3>
            <div class="dropdown-arrow">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                <path d="M8 11.5L3 6.5l1-1L8 9.5 12 5.5l1 1-5 5z"/>
              </svg>
            </div>
          </div>
          <div class="attraction-content">
            <div class="attraction-details">
              <div class="attraction-image">
                <img src="../Assets/Images/curug cigumawang.jpg" alt="Eiffel Tower" loading="lazy">
              </div>
              <div class="location">📍 Paris, France</div>
              <div class="rating">
                <div class="stars">
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                </div>
                <span class="rating-text">4.8 (15,234 reviews)</span>
              </div>
              <p class="description">
                The iconic iron lattice tower stands 330 meters tall and offers breathtaking views of Paris. 
                A symbol of France and one of the most recognizable structures in the world.
              </p>
              <div class="attraction-features">
                <span class="feature">🕒 Open daily 9:30 AM - 11:45 PM</span>
                <span class="feature">💰 From €29.40</span>
              </div>
            </div>
          </div>
        </div>

        <div class="attraction-item" data-attraction="machu">
          <div class="attraction-header">
            <h3>Kacida Cibuntu</h3>
            <div class="dropdown-arrow">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                <path d="M8 11.5L3 6.5l1-1L8 9.5 12 5.5l1 1-5 5z"/>
              </svg>
            </div>
          </div>
          <div class="attraction-content">
            <div class="attraction-details">
              <div class="attraction-image">
                <img src="../Assets/Images/kacida.jpg" alt="Machu Picchu" loading="lazy">
              </div>
              <div class="location">📍 Cusco Region, Peru</div>
              <div class="rating">
                <div class="stars">
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                </div>
                <span class="rating-text">4.9 (8,957 reviews)</span>
              </div>
              <p class="description">
                Ancient Incan citadel set high in the Andes Mountains. This UNESCO World Heritage site 
                offers spectacular mountain views and incredible archaeological wonders.
              </p>
              <div class="attraction-features">
                <span class="feature">🕒 Open daily 6:00 AM - 5:30 PM</span>
                <span class="feature">💰 From $152 (with train)</span>
              </div>
            </div>
          </div>
        </div>

        <div class="attraction-item" data-attraction="colosseum">
          <div class="attraction-header">
            <h3>River Tubing</h3>
            <div class="dropdown-arrow">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                <path d="M8 11.5L3 6.5l1-1L8 9.5 12 5.5l1 1-5 5z"/>
              </svg>
            </div>
          </div>
          <div class="attraction-content">
            <div class="attraction-details">
              <div class="attraction-image">
                <img src="https://images.pexels.com/photos/2064827/pexels-photo-2064827.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Colosseum" loading="lazy">
              </div>
              <div class="location">📍 Rome, Italy</div>
              <div class="rating">
                <div class="stars">
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star">★</span>
                </div>
                <span class="rating-text">4.5 (42,891 reviews)</span>
              </div>
              <p class="description">
                Ancient amphitheater and iconic symbol of Imperial Rome. Walk through history in this 
                massive stone arena where gladiators once fought.
              </p>
              <div class="attraction-features">
                <span class="feature">🕒 Open daily 8:30 AM - 7:15 PM</span>
                <span class="feature">💰 From €16</span>
              </div>
            </div>
          </div>
        </div>

        <div class="attraction-item" data-attraction="great-wall">
          <div class="attraction-header">
            <h3>Camping Ground</h3>
            <div class="dropdown-arrow">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                <path d="M8 11.5L3 6.5l1-1L8 9.5 12 5.5l1 1-5 5z"/>
              </svg>
            </div>
          </div>
          <div class="attraction-content">
            <div class="attraction-details">
              <div class="attraction-image">
                <img src="https://images.pexels.com/photos/2412603/pexels-photo-2412603.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Great Wall of China" loading="lazy">
              </div>
              <div class="location">📍 Beijing, China</div>
              <div class="rating">
                <div class="stars">
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                </div>
                <span class="rating-text">4.7 (28,456 reviews)</span>
              </div>
              <p class="description">
                One of the most impressive architectural feats in history. This ancient fortification 
                stretches over 13,000 miles across northern China.
              </p>
              <div class="attraction-features">
                <span class="feature">🕒 Open daily 7:30 AM - 5:30 PM</span>
                <span class="feature">💰 From ¥40 ($6)</span>
              </div>
            </div>
          </div>
        </div>

        <div class="attraction-item" data-attraction="taj-mahal">
          <div class="attraction-header">
            <h3>Mata Air Cipalias</h3>
            <div class="dropdown-arrow">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                <path d="M8 11.5L3 6.5l1-1L8 9.5 12 5.5l1 1-5 5z"/>
              </svg>
            </div>
          </div>
          <div class="attraction-content">
            <div class="attraction-details">
              <div class="attraction-image">
                <img src="https://images.pexels.com/photos/1583339/pexels-photo-1583339.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Taj Mahal" loading="lazy">
              </div>
              <div class="location">📍 Agra, India</div>
              <div class="rating">
                <div class="stars">
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                </div>
                <span class="rating-text">4.6 (35,721 reviews)</span>
              </div>
              <p class="description">
                Breathtaking white marble mausoleum, considered one of the most beautiful buildings in the world. 
                A testament to eternal love and architectural perfection.
              </p>
              <div class="attraction-features">
                <span class="feature">🕒 Closed on Fridays</span>
                <span class="feature">💰 From ₹1,100 ($13)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Accommodations Section -->
    <section id="stay" class="accommodations">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Penginapan</h2>
                <p class="section-description">
                    Info Penginapan Kami.
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
                <h3 class="sustainability-title">Kenyamanan Kalian</h3>
                <p class="sustainability-text">
                    Kenyamanan kalian adalah prioritas utama kami.
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Galeri Desa Kami</h2>
                <p class="section-description">
                    Beberapa foto tentang desa kami
                </p>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item large">
                    <img src="../Assets/Images/air terjun.jpg" alt="Forest trail">
                </div>
                <div class="gallery-item">
                    <img src="../Assets/Images/ayam-ungkep-32.jpg" alt="Mountain landscape">
                </div>
                <div class="gallery-item">
                    <img src="../Assets/Images/kacida.jpg" alt="Mountain landscape">
                </div>
                <div class="gallery-item">
                    <img src="../Assets/Images/solempt.webp" alt="Wooden cabin">
                </div>
                <div class="gallery-item large">
                    <img src="../Assets/Images/ban.jpg" alt="River view">
                </div>
                <div class="gallery-item">
                    <img src="../Assets/Images/nasi.avif" alt="Village life">
                </div>
                <div class="gallery-item">
                    <img src="../Assets/Images/sambal.webp" alt="Sunrise yoga">
                </div>
                <div class="gallery-item">
                    <img src="../Assets/Images/nilaa.jpg" alt="Rock climbing">
                </div>
                <div class="gallery-item">
                    <img src="../Assets/Images/pindang.jpg" alt="Nature photography">
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
                        <span class="footer-brand-text">Desa Wisata Padarincang</span>
                    </div>
                    <p class="footer-description">
                        Nikmati pesona alam, budaya, dan keramahan Desa Wisata Padarincang yang siap menyambut setiap langkah perjalanan Anda.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h4 class="footer-title">Tautan Cepat</h4>
                    <ul class="footer-nav">
                        <li><a href="#about">Beranda</a></li>
                        <li><a href="#activities">Tentang Kami</a></li>
                        <li><a href="#stay">Aktivitas</a></li>
                        <li><a href="#gallery">Penginapan</a></li>
                        <li><a href="#contact">Galeri</a></li>
                        <li><a href="#kontak">Kontak<a/a></li>
                    </ul>
                </div>

               <div class="footer-contact">
                    <h4 class="footer-title">Info Kontak</h4>
                    <div class="footer-contact-info">
                        <p>QXJ2+P63, Padarincang</p>
                        <p>Serang, Banten 42168</p>
                        <p>(+62)83842532616</p>
                        <p>@desawisatapadarincang</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="copyright">© 2025 Desa Wisata Padarincang.</p>
                <div class="footer-bottom-links">
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Ketentuan Layanan</a>
                    <a href="#">Keberlanjutan</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="main.js"></script>
    <script src="atr.js"></script>
</body>
</html>