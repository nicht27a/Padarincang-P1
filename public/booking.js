class BookingSystem {
  constructor() {
    this.guestCount = 1;
    this.visitorCount = 1;
    this.selectedWahana = [];
    this.initEventListeners();
    this.setMinDate();
  }

  initEventListeners() {
    const tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        const tab = e.target.dataset.tab;
        this.switchTab(tab);
      });
    });

    document.getElementById('decrease-guest').addEventListener('click', () => {
      if (this.guestCount > 1) {
        this.guestCount--;
        document.getElementById('guest-count').textContent = this.guestCount;
      }
    });

    document.getElementById('increase-guest').addEventListener('click', () => {
      this.guestCount++;
      document.getElementById('guest-count').textContent = this.guestCount;
    });

    document.getElementById('decrease-visitor').addEventListener('click', () => {
      if (this.visitorCount > 1) {
        this.visitorCount--;
        document.getElementById('visitor-count').textContent = this.visitorCount;
        this.updateWahanaPrice();
      }
    });

    document.getElementById('increase-visitor').addEventListener('click', () => {
      this.visitorCount++;
      document.getElementById('visitor-count').textContent = this.visitorCount;
      this.updateWahanaPrice();
    });

    const wahanaCheckboxes = document.querySelectorAll('.wahana-item input[type="checkbox"]');
    wahanaCheckboxes.forEach(checkbox => {
      checkbox.addEventListener('change', () => {
        this.updateSelectedWahana();
      });
    });

    document.getElementById('book-penginapan').addEventListener('click', () => {
      this.bookPenginapan();
    });

    document.getElementById('book-wahana').addEventListener('click', () => {
      this.bookWahana();
    });

    document.getElementById('checkin').addEventListener('change', () => {
      this.updateCheckoutMinDate();
    });
  }

  switchTab(tab) {
    document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
    document.querySelector(`[data-tab="${tab}"]`).classList.add('active');

    document.querySelectorAll('.booking-form').forEach(form => form.classList.remove('active'));
    document.getElementById(`${tab}-form`).classList.add('active');
  }

  setMinDate() {
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('checkin').setAttribute('min', today);
    document.getElementById('checkout').setAttribute('min', today);
    document.getElementById('visit-date').setAttribute('min', today);
  }

  updateCheckoutMinDate() {
    const checkinDate = document.getElementById('checkin').value;
    if (checkinDate) {
      const checkinDateObj = new Date(checkinDate);
      checkinDateObj.setDate(checkinDateObj.getDate() + 1);
      const minCheckout = checkinDateObj.toISOString().split('T')[0];
      document.getElementById('checkout').setAttribute('min', minCheckout);
    }
  }

  updateSelectedWahana() {
    const checkboxes = document.querySelectorAll('.wahana-item input[type="checkbox"]:checked');
    this.selectedWahana = Array.from(checkboxes).map(cb => ({
      value: cb.value,
      price: parseInt(cb.dataset.price),
      name: cb.parentElement.querySelector('h3').textContent
    }));

    this.updateSelectedSummary();
    this.updateWahanaPrice();
  }

  updateSelectedSummary() {
    const summary = document.getElementById('selected-summary');
    const list = document.getElementById('selected-list');

    if (this.selectedWahana.length > 0) {
      summary.style.display = 'block';
      list.innerHTML = this.selectedWahana.map(wahana => 
        `<div class="selected-item">${wahana.name} - Rp ${wahana.price.toLocaleString('id-ID')}</div>`
      ).join('');
      document.getElementById('book-wahana').disabled = false;
    } else {
      summary.style.display = 'none';
      document.getElementById('book-wahana').disabled = true;
    }
  }

  updateWahanaPrice() {
    const totalPrice = this.selectedWahana.reduce((total, wahana) => total + wahana.price, 0) * this.visitorCount;
    document.getElementById('total-price').textContent = `Rp ${totalPrice.toLocaleString('id-ID')}`;
  }

  bookPenginapan() {
  const checkin = document.getElementById('checkin').value;
  const checkout = document.getElementById('checkout').value;
  const specialRequests = document.getElementById('special-requests').value; // ambil kebutuhan khusus

  if (!checkin || !checkout) {
    alert('Mohon isi tanggal check in dan check out');
    return;
  }

  let message = `Halo Desa Wisata Padarincang, saya ingin booking penginapan dengan detail:
Check In: ${checkin}
Check Out: ${checkout}
Jumlah Tamu: ${this.guestCount} orang`;

  // tambahin kalau user isi kebutuhan khusus
  if (specialRequests.trim() !== "") {
    message += `\nKebutuhan Khusus: ${specialRequests}`;
  }

  message += `\n\nMohon info ketersediaan dan harga. Terima kasih!`;

  const whatsappUrl = `https://wa.me/6281234567890?text=${encodeURIComponent(message)}`;
  window.open(whatsappUrl, '_blank');
}

  bookWahana() {
    const visitDate = document.getElementById('visit-date').value;

    if (!visitDate) {
      alert('Mohon pilih tanggal kunjungan');
      return;
    }

    if (this.selectedWahana.length === 0) {
      alert('Mohon pilih minimal 1 wahana');
      return;
    }

    const wahanaList = this.selectedWahana.map(wahana => `• ${wahana.name} - Rp ${wahana.price.toLocaleString('id-ID')}`).join('\n');
    const totalPrice = this.selectedWahana.reduce((total, wahana) => total + wahana.price, 0) * this.visitorCount;

    const message = `Halo Desa Wisata Padarincang, saya ingin booking wahana dengan detail:
📅 Tanggal Kunjungan: ${visitDate}
👥 Jumlah Pengunjung: ${this.visitorCount} orang

🎢 Wahana yang dipilih:
${wahanaList}

💰 Total Harga: Rp ${totalPrice.toLocaleString('id-ID')}

Mohon konfirmasi booking. Terima kasih!`;

    const whatsappUrl = `https://wa.me/6281234567890?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
  }
}

new BookingSystem();