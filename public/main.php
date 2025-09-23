<?php
$conn = new mysqli("localhost", "root", "", "padarincang");
$result = $conn->query("SELECT * FROM news ORDER BY created_at DESC");
?>

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
                <a href="#culture" class="nav-link">Budaya</a>
                <a href="#gallery" class="nav-link">Galeri</a>
                <a href="#contact" class="nav-link">Kontak</a>
            </div>
            
            <div class="nav-actions">
                <button class="book-btn">Reservasi</button>
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
                        Desa Wisata Padarincang di Kabupaten Serang, Banten, mulai dikembangkan sejak 2021 dan terus berkembang hingga berhasil masuk 50 besar Anugerah Desa Wisata Indonesia 2024. Desa ini menawarkan kekayaan alam yang memukau seperti Curug Cigumawang, Pemandian Alami Cipalias, Wisata Kacida Cibuntu, hingga Cikal Adventure yang seru untuk petualangan.
                    </p>
                    <p class="mission-text">
                        Selain itu, Padarincang juga kaya dengan tradisi budaya khas Banten seperti Hadrah, Maca Syeikh, dan Debus, serta produk UMKM lokal seperti emping melinjo, emping jengkol, dan pindang parigi. Perpaduan alam, budaya, dan kuliner inilah yang menjadikan Padarincang sebagai destinasi wisata menarik.
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
        <p>Nikmati serunya atraksi alam dan budaya Padarincang yang indah dan terjangkau untuk semua.</p>
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
              <div class="rating">
                <div class="stars">
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                </div>
                <span class="rating-text">4.3 (550 reviews)</span>
              </div>
              <p class="description">
                Mempertahankan keasrian alamnya dengan air terjun setinggi 30 meter di antara tebing dan pepohonan lebat, serta pengelolaan yang baik.
              </p>
              <div class="attraction-features">
                <span class="feature">🕒 Jam Operasional<br>- Buka 24 jam setiap hari</span>
                <span class="feature">💰 Harga Tiket Masuk<br>- Dewasa : Rp10.000<br>Anak : Rp5.000</span>
                <span class="feature">💰 Harga Tiket Parkir<br>- Mobil : Rp10.000<br>Motor : Rp5.000</span>
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
                <img src="../Assets/Images/cibuntu.jpg" alt="Machu Picchu" loading="lazy">
              </div>
              <div class="rating">
                <div class="stars">
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                </div>
                <span class="rating-text">5.0 (2 reviews)</span>
              </div>
              <p class="description">
                Menawarkan suasana alami dengan sungai panjang, pepohonan asri, serta fasilitas seperti kolam renang buatan, gazebo, aula, dan pemandian alami Cipalias.
              </p>
              <div class="attraction-features">
                <span class="feature">🕒 Jam Operasional<br>- Buka 24 jam setiap hari</span>
                <span class="feature">💰 Harga Jasa Wisata<br>- Rp25.000</span>
              </div>
            </div>
          </div>
        </div>

        <div class="attraction-item" data-attraction="colosseum">
          <div class="attraction-header">
            <h3>Cikal Adventure</h3>
            <div class="dropdown-arrow">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                <path d="M8 11.5L3 6.5l1-1L8 9.5 12 5.5l1 1-5 5z"/>
              </svg>
            </div>
          </div>
          <div class="attraction-content">
            <div class="attraction-details">
              <div class="attraction-image">
                <img src="../Assets/Images/river.jpg" alt="Colosseum" loading="lazy">
              </div>
              <div class="rating">
                <div class="stars">
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                </div>
                <span class="rating-text">4.4 (116 reviews)</span>
              </div>
              <p class="description">
                Dikenal dengan river tubing dan fasilitas lengkap seperti pelampung, ban, dan tim penyelamat terlatih.
              </p>
              <div class="attraction-features">
                <span class="feature">🕒 Jam Operasional<br>- 08.00-18.00 di hari Senin-Kamis<br>- 09.00-17.45 di hari Jumat<br>- Buka 24 jam di hari Sabtu & Minggu</span>
                <span class="feature">💰 Harga River Tubing<br>- Rp100.000</span>
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
              <div class="rating">
                <div class="stars">
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                  <span class="star filled">★</span>
                </div>
                <span class="rating-text">4.4 (64 reviews)</span>
              </div>
              <p class="description">
                Rasakan kesegaran air jernih langsung dari sumber alami di Pemandian Cipalias, tempat sempurna untuk relaksasi dengan harga ramah kantong.
              </p>
              <div class="attraction-features">
                <span class="feature">🕒 Jam Operasional<br>- Buka 24 jam setiap hari</span>
                <span class="feature">💰 Harga Tiket Masuk<br>- Dewasa : Rp15.000<br>Anak : Rp10.000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button id="closeAllBtn">Tutup Semua</button>
      <p id="warningMsg" style="display:none; color:#e74c3c; margin-top:0.8rem; text-align:center; font-weight:500;">
      Semua tombol atraksi sudah tertutup.
      </p>
    </section>

    <!-- News Section -->
    <?php
$news = [];
while($row = $result->fetch_assoc()) {
    $news[] = $row;
}
?>
<div class="News" id="newsSection">
  <h1>Berita Terkini Desa Padarincang</h1>
  <hr>
  <div class="news-grid" id="newsGrid">
    <?php foreach ($news as $i => $row): ?>
      <div class="news-card <?= $i >= 6 ? 'news-hidden' : '' ?>" data-index="<?= $i ?>">
        <div class="news-image">
          <img src="uploads/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
        </div>
        <div class="news-content">
          <h3 class="news-title">
            <a href="detail.php?id=<?= $row['id'] ?>">
              <?= htmlspecialchars($row['title']) ?>
            </a>
          </h3>
          <p class="news-excerpt">
            <?= htmlspecialchars(mb_substr(strip_tags($row['content']), 0, 120)) ?>...
          </p>
          <div class="news-meta">
            <span class="news-date">
              <i class="fas fa-calendar-alt"></i>
              <?= date('d M Y', strtotime($row['created_at'])) ?>
            </span>
            <a href="detail.php?id=<?= $row['id'] ?>" class="read-more">
              Baca Selengkapnya <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <?php if (count($news) > 6): ?>
    <div class="news-actions">
      <button id="toggleNewsBtn" class="btn btn-primary" style="margin:2rem auto 0;display:block;max-width:300px" onclick="toggleNews()">
        Munculkan Semua Berita
      </button>
    </div>
  <?php endif; ?>

<script>
// Simple news toggle function
let newsExpanded = false;

function toggleNews() {
    console.log('Toggle function called, current state:', newsExpanded);
    
    const newsCards = document.querySelectorAll('.news-card');
    const toggleBtn = document.getElementById('toggleNewsBtn');
    
    console.log('Total news cards found:', newsCards.length);
    
    if (!newsExpanded) {
        // Show all news - ULTRA AGGRESSIVE APPROACH
        console.log('Attempting to show all news...');
        newsCards.forEach((card, index) => {
            console.log('Processing card', index, 'should show:', index >= 6);
            if (index >= 6) {
                // Remove all hiding classes and styles
                card.classList.remove('news-hidden');
                
                // Force show with multiple approaches
                card.style.setProperty('display', 'flex', 'important');
                card.style.setProperty('visibility', 'visible', 'important');
                card.style.setProperty('opacity', '1', 'important');
                card.style.setProperty('height', 'auto', 'important');
                card.style.setProperty('overflow', 'visible', 'important');
                card.style.setProperty('margin', '0', 'important');
                card.style.setProperty('padding', '1.5rem', 'important');
                card.style.setProperty('background', 'rgba(255, 255, 255, 0.9)', 'important');
                card.style.setProperty('backdrop-filter', 'blur(4px)', 'important');
                card.style.setProperty('border-radius', '1rem', 'important');
                card.style.setProperty('box-shadow', '0 4px 15px rgba(0, 0, 0, 0.1)', 'important');
                card.style.setProperty('border', '1px solid rgba(16, 185, 129, 0.2)', 'important');
                card.style.setProperty('transition', 'all 0.3s ease', 'important');
                
                // Force remove any inline styles that might hide
                card.removeAttribute('style');
                card.style.setProperty('display', 'flex', 'important');
                card.style.setProperty('visibility', 'visible', 'important');
                card.style.setProperty('opacity', '1', 'important');
                card.style.setProperty('height', 'auto', 'important');
                card.style.setProperty('overflow', 'visible', 'important');
                card.style.setProperty('margin', '0', 'important');
                card.style.setProperty('padding', '1.5rem', 'important');
                
                console.log('Card', index, 'styles after show:', card.style.cssText);
            }
        });
        toggleBtn.textContent = 'Sembunyikan Berita Lama';
        newsExpanded = true;
        console.log('Showing all news - COMPLETED');
    } else {
        // Hide additional news
        console.log('Hiding additional news...');
        newsCards.forEach((card, index) => {
            if (index >= 6) {
                card.classList.add('news-hidden');
                card.style.setProperty('display', 'none', 'important');
                card.style.setProperty('visibility', 'hidden', 'important');
                card.style.setProperty('opacity', '0', 'important');
                card.style.setProperty('height', '0', 'important');
                card.style.setProperty('overflow', 'hidden', 'important');
                card.style.setProperty('margin', '0', 'important');
                card.style.setProperty('padding', '0', 'important');
            }
        });
        toggleBtn.textContent = 'Munculkan Semua Berita';
        newsExpanded = false;
        console.log('Hiding additional news - COMPLETED');
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded, initializing news toggle');
    const newsCards = document.querySelectorAll('.news-card');
    console.log('Found', newsCards.length, 'news cards');
    
    // Hide additional news initially
    newsCards.forEach((card, index) => {
        if (index >= 6) {
            card.classList.add('news-hidden');
            card.style.setProperty('display', 'none', 'important');
            card.style.setProperty('visibility', 'hidden', 'important');
            card.style.setProperty('opacity', '0', 'important');
            card.style.setProperty('height', '0', 'important');
            card.style.setProperty('overflow', 'hidden', 'important');
            card.style.setProperty('margin', '0', 'important');
            card.style.setProperty('padding', '0', 'important');
        }
    });
    
    console.log('Initial hiding completed');
});
</script>
</div>
    <!-- End of news section -->

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
                        <img src="../Assets/Images/buaya putih.jpeg">
                    </div>
                    <div class="accommodation-content">
                        <h3 class="accommodation-title">Pertunjukan Buaya Putih</h3>
                        <p class="accommodation-description">Kesenian ini biasanya ditampilkan dalam prosesi arak-arakan pengantin pria menuju rumah pengantin wanita. Tujuannya adalah untuk memeriahkan suasana dan menunjukkan rasa syukur.</p>
                    </div>
                </div>

                <div class="accommodation-card">
                    <div class="accommodation-image">
                        <img src="../Assets/Images/maca syekh.jpg">
                    </div>
                    <div class="accommodation-content">
                        <h3 class="accommodation-title">Tradisi Maca Syekh</h3>
                        <p class="accommodation-description">Tradisi Maca Syekh adalah tradisi membaca manaqib Syekh, atau kisah hidup dan keutamaan Syekh Abdul Qadir Jaelani, seorang ulama yang dikenal sebagai pemimpin para wali, dilakukan oleh masyarakat sebagai bentuk permohonan berkah dan perlindungan. Melalui kegiatan ini, mereka bertawasul agar memperoleh keselamatan serta dijauhkan dari berbagai marabahaya</p>
                    </div>
                </div>

                <div class="accommodation-card">
                    <div class="accommodation-image">
                    <img src="../Assets/Images/bubur.jpg">
                    </div>
                    <div class="accommodation-content">
                        <h3 class="accommodation-title">Ngabubur Suro</h3>
                        <p class="accommodation-description">yaitu pembuatan bubur sura oleh masyarakat dan kemudian dibagikan kepada masyarakat di sekitar kampung, kegiatan ini biasanya dilakukan di seluruh kampung satu desa</p>
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