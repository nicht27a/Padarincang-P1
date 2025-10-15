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
    <link rel="stylesheet" href="budaya.css">
    <link rel="stylesheet" href="budaya.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<body>
    <!-- Top Bar -->
<div class="top-bar">
  <div class="top-bar-content">
    <div class="contact-info">
      <span><i class="fas fa-phone"></i> +62 831-5115-6803</span>
      <span><i class="fa-brands fa-instagram"></i> @desawisatapadarincang</span>
    </div>
    <div class="promo-text">
      Ayo reservasi sekarang untuk liburan tak terlupakan!
    </div>
  </div>
</div>

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
      <a href="#culture" class="nav-link">Budaya</a>
      <a href="#culinary" class="nav-link">Kuliner</a>
      <a href="#gallery" class="nav-link">Galeri</a>
          <div class="nav-actions">
      <a href="booking.php" class="book-btn" style="color: white;text-decoration: none;">Reservasi</a>
    </div>
    </div>



    <button class="mobile-menu-btn" id="mobileMenuBtn">
      <i class="fas fa-bars"></i>
    </button>
  </nav>

  <div class="mobile-menu" id="mobileMenu">
    <a href="#home" class="mobile-nav-link">Beranda</a>
    <a href="#about" class="mobile-nav-link">Tentang Kami</a>
    <a href="#activities" class="mobile-nav-link">Aktivitas</a>
    <a href="#culture" class="mobile-nav-link">Budaya</a>
    <a href="#culinary" class="mobile-nav-link">Kuliner</a>
    <a href="#gallery" class="mobile-nav-link">Galeri</a>
    <button class="mobile-book-btn">Reservasi</button>
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
                <a href="..public/" class="btn btn-primary">Pesan Sekarang</a>
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
                Mempertahankan keasrian alamnya dengan air terjun setinggi 30 meter di antara tebing dan pepohonan lebat.
              </p>
              <div class="attraction-features">
                <span class="feature">🕒 Jam Operasional<br>- Buka 24 jam setiap hari</span>
                <span class="feature">💰 Harga Tiket Masuk<br>- Dewasa : Rp10.000<br>- Anak : Rp5.000</span>
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
                <img src="../Assets/Images/cipali.jpg" alt="Taj Mahal" loading="lazy">
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
      <p id="warningMsg" style="display:none; color:white; margin-top:0.8rem; text-align:center; font-weight:500;">
      Semua tombol atraksi sudah tertutup.
      </p>
    </section>

    <!-- Culinary Section --> 
     <section id="culinary" class="culinary">
    <header class="headerculinary">
        <h1>Kuliner Padarincang</h1>
        <p>Kuliner Padarincang menyajikan beragam hidangan khas dengan cita rasa tradisional yang menggugah selera.</p>
      </header>
  <div class="culinary-grid">
    <!-- Card 1 -->
    <div class="culinarycard">
      <div class="culinary-image">
        <img src="../Assets/Images/jejorong.jpg" alt="jejorong" />
      </div>
      <div class="culinary-desc">Nasi goreng kampung dengan bumbu tradisional.</div>
      <span class="culinary-price">Jejorong</span>
      
    </div>

    <!-- Card 2 -->
    <div class="culinarycard">
      <div class="culinary-image">
         <img src="../Assets/Images/kueselimut.jpg" alt="jejorong" />
      </div>
      <div class="culinary-desc">Sate ayam dengan bumbu kacang gurih.</div>
      <span class="culinary-price">Kue Selimut</span>
      
    </div>

    <!-- Card 3 -->
    <div class="culinarycard">
      <div class="culinary-image">
         <img src="../Assets/Images/macanketawa.jpg" alt="jejorong" />
      </div>
      <div class="culinary-desc">Sate ayam dengan bumbu kacang gurih.</div>
      <span class="culinary-price">Kue Macan Ketawa</span>
      
    </div>

    <!-- Card 4 -->
    <div class="culinarycard">
      <div class="culinary-image">
         <img src="../Assets/Images/Kripik Kulit Tangkil.jpg 1[1].jpg" alt="jejorong" />
      </div>
      <div class="culinary-desc">Sate ayam dengan bumbu kacang gurih.</div>
      <span class="culinary-price">Kripik Tangkil</span>
      
    </div>

    <!-- Card 12 -->
    <div class="culinarycard">
      <div class="culinary-image">
        <img src="../Assets/Images/kripikpisang.jpeg" alt="jejorong" />
      </div>
      <div class="culinary-desc">Sate ayam dengan bumbu kacang gurih.</div>
      <span class="culinary-price">Kripik Pisang</span>
      
    </div>

    <!-- Card 5 -->
    <div class="culinarycard">
      <div class="culinary-image">
         <img src="../Assets/Images/durenjatohan.jpg" alt="jejorong" />
      </div>
      <div class="culinary-desc">Sate ayam dengan bumbu kacang gurih.</div>
      <span class="culinary-price">Duren Jatohan</span>
      
    </div>

    <!-- Card 6 -->
    <div class="culinarycard">
      <div class="culinary-image">
        <img src="../Assets/Images/Bubur Jodo[1].jpg" alt="jejorong" />
      </div>
      <div class="culinary-desc">Sate ayam dengan bumbu kacang gurih.</div>
      <span class="culinary-price">Bubur Jodo</span>
      
    </div>

    <!-- Card 7 -->
    <div class="culinarycard">
      <div class="culinary-image">
        <img src="../Assets/Images/empingjengkoll.jpg" alt="jejorong" />
      </div>
      <div class="culinary-desc">Sate ayam dengan bumbu kacang gurih.</div>
      <span class="culinary-price">Emping Jengkol</span>
      
    </div>
  </div>
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

    <!-- Culture Cards Section -->
     <section id="culture" class="culture">
      <h1>Budaya Padarincang</h1>
        <p>Desa Padarincang memiliki beragam tradisi unik yang terus dijaga sebagai warisan budaya penuh makna.</p><br><br>
         <main class="cards-container">
        <div class="card" data-culture="buayaputih">
          <div class="card-inner">
            <div class="card-front">
              <div class="card-overlay"></div>
              <h2>Buaya Putih</h2>
            </div>
            <div class="card-back">
              <h2>Buaya Putih</h2>
              <p>Buaya Putih adalah tradisi lama yang biasanya ditampilkan dalam acara pernikahan dan pertunjukan, mirip dengan Mapag Panganten di Serang. Perbedaannya terletak pada adanya tarian dengan janur putih berbentuk buaya, diiringi musik Terbang serta penari pria sebagai pembawa Buaya Putih.</p>
              <div class="card-image">
                <img src="../Assets/Images/buaya.jpg" alt="Buaya Putih" />
              </div>
            </div>
          </div>
        </div>

        <div class="card" data-culture="manjang">
          <div class="card-inner">
            <div class="card-front">
              <div class="card-overlay"></div>
              <h2>Manjang</h2>
            </div>
            <div class="card-back">
              <h2>Manjang</h2>
              <p>Tradisi Manjang biasanya dilakukan pada perayaan Maulid Nabi atau bulan Mulud dengan membuat kerangka berbentuk hewan, benda, dan berbagai bentuk lainnya. Tujuan dari tradisi ini adalah sebagai wujud sedekah, di mana hasil karya tersebut menjadi simbol kebersamaan dan rasa syukur masyarakat.</p>
              <div class="card-image">
                <img src="../Assets/Images/manjangg.jpg" alt="Manjang" />
              </div>
            </div>
          </div>
        </div>

         <div class="card" data-culture="ngabubursuro">
          <div class="card-inner">
            <div class="card-front">
              <div class="card-overlay"></div>
              <h2>Ngabubur Suro</h2>
            </div>
            <div class="card-back">
              <h2>Ngabubur Suro</h2>
              <p>Ngabubur Suro adalah tradisi masyarakat pada bulan Muharam dengan membuat bubur sura secara bersama-sama. Bubur tersebut kemudian dibagikan kepada seluruh warga di sekitar kampung, bahkan biasanya melibatkan satu desa penuh dalam pelaksanaannya.</p>
              <div class="card-image">
                <img src="../Assets/Images/ngabubur.jpg" alt="Ngabubur Suro" />
              </div>
            </div>
          </div>
        </div>

        <div class="card" data-culture="macasyeikh">
          <div class="card-inner">
            <div class="card-front">
              <div class="card-overlay"></div>
              <h2>Maca Syeikh</h2>
            </div>
            <div class="card-back">
              <h2>Maca Syeikh</h2>
              <p>Maca Syeikh adalah tradisi membaca manaqib Syekh Abdul Qadir Jaelani, seorang ulama besar yang dikenal sebagai pemimpin para wali. Tradisi ini dilakukan masyarakat sebagai bentuk permohonan berkah, keselamatan, serta perlindungan dari marabahaya melalui tawasul.</p>
              <div class="card-image">
                <img src="../Assets/Images/maca.jpg" alt="Maca Syeikh" />
              </div>
            </div>
          </div>
        </div>
      </main>
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
                    <img src="../Assets/Images/kueselimut.jpg" alt="Mountain landscape">
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
      <!-- Kolom kiri -->
      <div class="footer-brand">
        <div class="footer-logo">
          <span class="footer-brand-text">Desa Wisata Padarincang</span>
        </div>
        <p class="footer-description">
          Nikmati pesona alam, budaya, dan keramahan Desa Wisata Padarincang yang siap menyambut setiap langkah perjalanan Anda.
        </p>
         <div class="social-item"><i class="fab fa-whatsapp"></i><a href="https://wa.me/6283151156803" target="_blank">+62 831-5115-6803</a></div>
        <div class="social-item"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/desawisatapadarincang/" target="_blank">@desawisatapadarincang</a></div>
        </div>

      <!-- Kolom tengah -->
      <div class="footer-links">
        <h4 class="footer-title">Tautan Cepat</h4>
        <ul class="footer-nav">
          <li><a href="#about">Beranda</a></li>
          <li><a href="#activities">Tentang Kami</a></li>
          <li><a href="#stay">Aktivitas</a></li>
          <li><a href="#gallery">Penginapan</a></li>
          <li><a href="#contact">Galeri</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
      </div>

      <!-- Kolom kanan -->
      <div class="footer-contact">
        <h4 class="footer-title">Info Kontak</h4>
        <div class="footer-contact-info">
          <p>QXJ2+P63, Padarincang</p>
          <p>Serang, Banten 42168</p>
          <p>(+62)83151156803</p>
          <p>@desawisatapadarincang</p>
        </div>
      </div>
    </div>

    <!-- ⬇️ Tambahkan ini di luar .footer-content, sebelum footer-bottom -->
    <div class="social-bar">
      <div class="social-item"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/disporapar.serangkab/" target="_blank">@disporapar.serangkab</a></div>
      <div class="social-item"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/dispora_banten/" target="_blank">@dispora_banten</a></div>
      <div class="social-item"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/pemdespadarincang/" target="_blank">@pemdespadarincang</a></div>
      <div class="social-item"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/pesona.indonesia/" target="_blank">@pesona.indonesia</a></div>
      <div class="social-item"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/genpikabupatenserang/" target="_blank">@genpikabupatenserang</a></div>
      <div class="social-item"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/genpibanten/" target="_blank">@genpibanten</a></div>
      <div class="social-item"><i class="fab fa-instagram"></i><a href="https://www.instagram.com/anugerahdesawisataindonesia/" target="_blank">@anugerahdesawisataindonesia</a></div>
    </div>

    <div class="footer-bottom">
      <p class="copyright">© 2025 Desa Wisata Padarincang.</p>
    </div>
  </div>
</footer>

    <script>
const mobileBtn = document.getElementById('mobileMenuBtn');
const mobileMenu = document.getElementById('mobileMenu');
mobileBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('active');
});
</script>

  <script>
  window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    if (window.scrollY > 50) { // kalau scroll lebih dari 50px
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
</script>


    <script src="main.js"></script>
    <script src="atr.js"></script>
</body>
</html>