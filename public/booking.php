<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking - Penginapan & Wahana</title>
    <link rel="stylesheet" href="../public/booking.css">
  </head>
  <body>
    <div class="container">
      <header class="header">
        <h1>Reservasi</h1>
        <p>Pesan penginapan atau wahana dengan mudah</p>
      </header>

      <div class="booking-tabs">
        <button class="tab-button active" data-tab="penginapan">
          <span class="tab-icon">🏠</span>
          Penginapan
        </button>
        <button class="tab-button" data-tab="wahana">
          <span class="tab-icon">🎢</span>
          Atraksi
        </button>
      </div>

      <div class="booking-content">
        <!-- Penginapan Form -->
        <div id="penginapan-form" class="booking-form active">
          <div class="form-group">
            <label for="checkin">Check In</label>
            <input type="date" id="checkin" required>
          </div>
          
          <div class="form-group">
            <label for="checkout">Check Out</label>
            <input type="date" id="checkout" required>
          </div>
          
          <div class="form-group">
            <label>Jumlah Tamu</label>
            <div class="counter">
              <button type="button" class="counter-btn" id="decrease-guest">-</button>
              <span class="counter-value" id="guest-count">1</span>
              <button type="button" class="counter-btn" id="increase-guest">+</button>
            </div>
          </div>
          
          <div class="form-group">
  <label for="special-requests">Kebutuhan Khusus</label>
  <textarea id="special-requests" name="special_requests" rows="3" placeholder="Contoh: butuh extra bed, tanpa rokok"></textarea>
</div>

          
          <button class="book-btn" id="book-penginapan">
            Book via WhatsApp
          </button>
        </div>

        <!-- Wahana Form -->
        <div id="wahana-form" class="booking-form">
          <div class="form-group">
            <label>Pilih Tanggal Kunjungan</label>
            <input type="date" id="visit-date" required>
          </div>
          
          <div class="form-group">
            <label>Pilih Atraksi (Bisa lebih dari satu)</label>
            <div class="wahana-options">
              <label class="wahana-item">
                <input type="checkbox" value="roller-coaster" data-price="50000">
                <div class="wahana-card">
                  <span class="wahana-icon">🏞️</span>
                  <div class="wahana-info">
                    <h3>Curug Cigumawang (Dewasa)</h3>
                    <p>Rp 10.000</p>
                  </div>
                </div>
              </label>
              
              <label class="wahana-item">
                <input type="checkbox" value="ferris-wheel" data-price="30000">
                <div class="wahana-card">
                  <span class="wahana-icon">🏞️</span>
                  <div class="wahana-info">
                    <h3>Curug Cigumawang (Anak)</h3>
                    <p>Rp 5.000</p>
                  </div>
                </div>
              </label>
              
              <label class="wahana-item">
                <input type="checkbox" value="bumper-car" data-price="25000">
                <div class="wahana-card">
                  <span class="wahana-icon">⛰️</span>
                  <div class="wahana-info">
                    <h3>Wisata Kacida Cibuntu </h3>
                    <p>Rp 25.000</p>
                  </div>
                </div>
              </label>
              
              <label class="wahana-item">
                <input type="checkbox" value="water-slide" data-price="40000">
                <div class="wahana-card">
                  <span class="wahana-icon">🌊</span>
                  <div class="wahana-info">
                    <h3>Mata Air Cipalias (Anak)</h3>
                    <p>Rp 10.000</p>
                  </div>
                </div>
              </label>
              
              <label class="wahana-item">
                <input type="checkbox" value="haunted-house" data-price="35000">
                <div class="wahana-card">
                  <span class="wahana-icon">🌊</span>
                  <div class="wahana-info">
                    <h3>Mata Air Cipalias (Dewasa)</h3>
                    <p>Rp 15.000</p>
                  </div>
                </div>
              </label>
              
              <label class="wahana-item">
                <input type="checkbox" value="go-kart" data-price="60000">
                <div class="wahana-card">
                  <span class="wahana-icon">🚣🏾</span>
                  <div class="wahana-info">
                    <h3>River Tubing (Cikal Adventure)</h3>
                    <p>Rp 100.000</p>
                  </div>
                </div>
              </label>
            </div>
          </div>
          
          <div class="form-group">
            <label>Jumlah Pengunjung</label>
            <div class="counter">
              <button type="button" class="counter-btn" id="decrease-visitor">-</button>
              <span class="counter-value" id="visitor-count">1</span>
              <button type="button" class="counter-btn" id="increase-visitor">+</button>
            </div>
          </div>
          
          <div class="selected-summary" id="selected-summary" style="display: none;">
            <h3>Wahana Terpilih:</h3>
            <div id="selected-list"></div>
            <div class="total-price">
              <strong>Total: <span id="total-price">Rp 0</span></strong>
            </div>
          </div>
          
          <button class="book-btn" id="book-wahana" disabled>
            Book via WhatsApp
          </button>
        </div>
      </div>
    </div>
    <script src="../public/booking.js"></script>
  </body>
</html>