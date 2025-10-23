<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page | Futsal Kuy</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">
      <img src="images/anchor-icon.png" alt="Logo" class="logo-icon" />
      <span class="logo-text">Futsal Kuy</span>
    </div>
    <nav class="nav-right" id="navArea">
      <!-- Konten navbar akan diganti oleh JS -->
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="hero-text">
      <h1>
        SEWA LAPANGAN MINI SOCCER<br />
        DENGAN MUDAH DAN CEPAT
      </h1>
    </div>
  </section>

  <!-- Search -->
  <section class="search-bar">
    <input type="text" placeholder="Pilih Kota" />
    <button class="btn-cari">Cari</button>
  </section>

  <!-- Daftar Lapangan -->
  <section class="lapangan-container">
    <div class="lapangan-card">
      <img src="images/sky_arena.jpg" alt="SKY Arena" />
      <div class="lapangan-info">
        <h3>SKY Arena</h3>
        <p>Mini Soccer • 5.0 • Purwokerto Selatan</p>
        <span>Mulai <b>Rp575,000</b> / sesi</span>
      </div>
    </div>

    <div class="lapangan-card">
      <img src="images/serenia_hills.jpg" alt="Serenia Hills" />
      <div class="lapangan-info">
        <h3>Serenia Hills</h3>
        <p>Mini Soccer • 5.0 • Purwokerto Barat</p>
        <span>Mulai <b>Rp520,000</b> / sesi</span>
      </div>
    </div>

    <div class="lapangan-card">
      <img src="images/indo_mini.jpg" alt="Indo Mini Soccer" />
      <div class="lapangan-info">
        <h3>Indo Mini Soccer</h3>
        <p>Mini Soccer • 5.0 • Baturraden</p>
        <span>Mulai <b>Rp600,000</b> / sesi</span>
      </div>
    </div>

    <div class="lapangan-card">
      <img src="images/beast_arena.jpg" alt="Beast Arena" />
      <div class="lapangan-info">
        <h3>Beast Arena</h3>
        <p>Mini Soccer • 5.0 • Purwokerto Selatan</p>
        <span>Mulai <b>Rp540,000</b> / sesi</span>
      </div>
    </div>

    <div class="lapangan-card">
      <img src="images/the_green.jpg" alt="The Green" />
      <div class="lapangan-info">
        <h3>The Green</h3>
        <p>Mini Soccer • 5.0 • Purwokerto Barat</p>
        <span>Mulai <b>Rp610,000</b> / sesi</span>
      </div>
    </div>

    <div class="lapangan-card">
      <img src="images/ik_soccer.jpg" alt="Ik Soccer" />
      <div class="lapangan-info">
        <h3>Ik Soccer</h3>
        <p>Mini Soccer • 5.0 • Purwokerto Barat</p>
        <span>Mulai <b>Rp517,000</b> / sesi</span>
      </div>
    </div>
  </section>

  <!-- Booking -->
  <section class="booking">
    <h2>Ayo Booking Sekarang!</h2>
    <p>
      "Ayo kumpul tim kamu, waktunya tanding seru di lapangan mini soccer
      kami! Booking sekarang, jangan sampai kehabisan jam favorit!"
    </p>

    <form onsubmit="handleBooking(event)">
      <select>
        <option>Pilih Lapangan</option>
        <option>SKY Arena</option>
        <option>Serenia Hills</option>
        <option>Indo Mini Soccer</option>
        <option>Beast Arena</option>
        <option>The Green</option>
        <option>Ik Soccer</option>
      </select>

      <input type="datetime-local" />

      <button type="submit" class="btn-whatsapp">Booking via WhatsApp</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <p>© Futsal Kuy</p>
  </footer>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>