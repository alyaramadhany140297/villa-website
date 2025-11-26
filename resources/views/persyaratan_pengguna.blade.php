<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Al Rasyid</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <style>
         /* ======= STYLE UTAMA ======= */
    body {
      margin: 0;
      padding: 0;
      font-family: 'Playfair Display', serif;
      background-color: #f4ede5; /* Warna krem lembut */
      color: #5b4b3a;
      line-height: 1.8;
      opacity: 0;
      transition: opacity 1s ease;
    }

    body.loaded {
      opacity: 1;
    }

    /* ======= HEADER ======= */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 30px 80px;
      background-color: #f4ede5;
      position: relative;
    }

    .header img {
      width: 160px;
    }

    .menu {
      font-size: 14px;
      letter-spacing: 1px;
      color: #3b3023;
      cursor: pointer;
      user-select: none;
    }

    /* ======= NAV MENU ======= */
    .nav {
      position: absolute;
      top: 70px;
      right: 80px;
      background-color: #f4ede5;
      border: 1px solid rgba(0,0,0,0.1);
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      display: none;
      flex-direction: column;
      padding: 10px 0;
      animation: fadeIn 0.3s ease;
      z-index: 10;
    }

    .nav a {
      text-decoration: none;
      color: #5b4b3a;
      padding: 10px 20px;
      font-size: 14px;
      display: block;
      transition: background 0.3s;
    }

    .nav a:hover {
      background-color: #eae0d5;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Kontainer isi */
    .terms-container {
      max-width: 700px;
      margin: 20px auto 70px; /* 100px atas, auto kiri-kanan, 60px bawah */
      padding: 0 20px;
    }

    .terms-container h1 {
      font-size: 30px;
      font-weight: 600;
      margin-bottom: 30px;
      color: #5b4b3a;
    }

    .terms-container p, 
    .terms-container li {
      font-size: 20px;
      line-height: 1.7;
      color: #5b4b3a;
      text-align: justify;
    }

    .terms-container ol {
      margin-left: 20px;
    }

    .terms-container li {
      margin-bottom: 8px;
    }

    .terms-container ul {
      margin-top: 5px;
      margin-left: 20px;
    }

    /* Responsif */
    @media (max-width: 768px) {
      header {
        padding: 20px 25px;
      }

      .terms-container {
        margin: 40px auto;
      }

      .terms-container h1 {
        font-size: 25px;
      }

      .terms-container p, 
      .terms-container li {
        font-size: 16px;
      }
    }

    /* ========== FOOTER STYLE ========== */
    footer {
      background-color: #8b7a65; /* Warna coklat lembut seperti contoh */
      color: #fff;
      padding: 60px 80px 30px;
      font-family: 'Playfair Display', serif;
    }

    .footer-container {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr 1fr;
      gap: 40px;
      align-items: flex-start;
    }

    .footer-logo img {
      width: 160px;
      margin-bottom: 15px;
    }

    .footer-logo p {
      font-size: 14px;
      line-height: 1.8;
      margin-top: 10px;
      letter-spacing: 0.5px;
    }

    .footer-logo .social-icons {
      margin-top: 15px;
    }

    .social-icons a {
      color: #fff;
      font-size: 20px;
      margin-right: 15px;
      transition: 0.3s;
    }

    .social-icons a:hover {
      color: #e0d5c3;
    }

    .footer-col h4 {
      font-weight: 600;
      font-size: 15px;
      letter-spacing: 1px;
      margin-bottom: 20px;
    }

    .footer-col ul {
      list-style: none;
      padding: 0;
    }

    .footer-col ul li {
      margin-bottom: 10px;
    }

    .footer-col ul li a {
      color: #f2f2f2;
      text-decoration: none;
      font-size: 14px;
      transition: 0.3s;
    }

    .footer-col ul li a:hover {
      text-decoration: underline;
      color: #fff;
    }

    .footer-subscribe {
      grid-column: span 4;
      margin-top: 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      border-top: 1px solid rgba(255,255,255,0.2);
      padding-top: 30px;
    }

    .footer-subscribe p {
      font-size: 13px;
      color: #fff;
      flex: 1;
      min-width: 250px;
    }

    .footer-subscribe form {
      display: flex;
      gap: 15px;
      flex: 1;
      justify-content: flex-end;
      min-width: 250px;
    }

    .footer-subscribe input {
      background: transparent;
      border: none;
      border-bottom: 1px solid #fff;
      padding: 5px 0;
      color: #fff;
      width: 150px;
      font-size: 13px;
    }

    .footer-subscribe input::placeholder {
      color: rgba(255, 255, 255, 0.8);
    }

    .footer-subscribe button {
      background: #7a6a57;
      border: none;
      color: #fff;
      padding: 8px 25px;
      border-radius: 2px;
      cursor: pointer;
      font-weight: 600;
      font-size: 13px;
      transition: 0.3s;
    }

    .footer-subscribe button:hover {
      background: #6c5b49;
    }

    .footer-bottom {
      margin-top: 30px;
      border-top: 1px solid rgba(255,255,255,0.2);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 20px;
      font-size: 12px;
      flex-wrap: wrap;
    }

    .footer-bottom a {
      color: #fff;
      margin-left: 25px;
      text-decoration: none;
      font-size: 12px;
    }

    .footer-bottom a:hover {
      text-decoration: underline;
    }

    @media (max-width: 800px) {
      .footer-container {
        grid-template-columns: 1fr 1fr;
        gap: 30px;
      }
      .footer-subscribe {
        flex-direction: column;
        align-items: flex-start;
      }
      .footer-subscribe form {
        justify-content: flex-start;
      }
      .footer-bottom {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
    }
    </style>
</head>
<body>
    <!-- Header -->
  <header class="header">
    <img src="images/logo.png" alt="Villa Al Rasyid">
    <div class="menu" id="menuBtn">MENU ☰</div>

    <!-- MENU NAVIGASI -->
    <nav class="nav" id="navMenu">
      <a href="index.html">Beranda</a>
      <a href="tentang.html">Tentang Kami</a>
      <a href="fasilitas.html">Fasilitas</a>
      <a href="kontak.html">Kontak</a>
    </nav>
  </header>

  <!-- Isi Halaman -->
  <div class="terms-container">
    <h1>Syarat &amp; Ketentuan Penggunaan</h1>

    <p>
      Dengan mengakses atau menggunakan situs resmi Villa Al Rasyid, pengunjung dianggap telah membaca, memahami, dan menyetujui syarat dan ketentuan berikut ini.
    </p>

    <ol>
      <li>
        <strong>Waktu Check-in dan Check-out</strong>
        <ul>
          <li>Check-in dilakukan mulai pukul 14.00 WIB.</li>
          <li>Check-out maksimal pukul 12.00 WIB.</li>
        </ul>
      </li>

      <li>
        <strong>Aturan Umum Tamu</strong>
        <ul>
          <li>Tamu dilarang membawa senjata tajam, minuman keras (miras), dan narkoba ke dalam area villa.</li>
          <li>Dilarang merusak atau menyalahgunakan fasilitas villa.</li>
          <li>Apabila terjadi kerusakan fasilitas akibat kelalaian tamu, maka biaya perbaikan akan dibebankan kepada tamu.</li>
          <li>Kehilangan barang pribadi menjadi tanggung jawab masing-masing tamu.</li>
          <li>Kegiatan seperti organ tunggal atau karaoke diperbolehkan hingga pukul 00.00 WIB.</li>
          <li>Tamu diharapkan menjaga kebersihan dan kenyamanan lingkungan villa selama menginap.</li>
        </ul>
      </li>

      <li>
        <strong>Penggunaan Situs</strong>
        <p>
          Informasi di situs ini bertujuan memberikan gambaran umum mengenai layanan, fasilitas, dan kebijakan Villa Al Rasyid. 
          Pengunjung dilarang menggunakan isi situs untuk tujuan komersial tanpa izin tertulis dari pihak pengelola.
        </p>
      </li>

      <li>
        <strong>Perubahan Kebijakan</strong>
        <p>
          Villa Al Rasyid berhak mengubah atau memperbarui syarat dan ketentuan ini kapan saja tanpa pemberitahuan sebelumnya. 
          Pengunjung disarankan untuk memeriksa halaman ini secara berkala.
        </p>
      </li>
    </ol>
  </div>

  <!--Footer-->
  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <img src="images/logo.png" alt="Villa Al-Rasyid Logo">
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>

      <div class="footer-col">
        <h4>ABOUT</h4>
        <ul>
          <li><a href="#">OUR STORY</a></li>
          <li><a href="#">OUR BLOG</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>CONTACT US</h4>
        <ul>
          <li><a href="#">Send a Message</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>LOCATION</h4>
        <p>Jl. Pelita Kp. Baru Jeruk<br>Cisarua Bogor, Jawa Barat</p>
      </div>
    </div>

    <div class="footer-subscribe">
      <p>STAY IN TOUCH FOR EXCLUSIVE OFFERS, SPECIALS AND NEWS.</p>
      <form id="subscribeForm">
        <input type="text" placeholder="FIRST NAME" required>
        <input type="email" placeholder="EMAIL" required>
        <button type="submit">SUBSCRIBE</button>
      </form>
    </div>

    <div class="footer-bottom">
      <span>VILLA AL – RASYID 1997.</span>
      <div>
    <a href="{{ url('/kebijakan-privasi') }}">Kebijakan Privasi</a>
    <a href="persyaratan-pengguna.html">Persyaratan Pengguna</a>
  </div>
</div>

      </div>
    </div>
  </footer>

  <script>
    // Fade in effect saat halaman selesai dimuat
    window.addEventListener("load", () => {
      document.body.classList.add("loaded");
    });

    // TOMBOL MENU
    const menuBtn = document.getElementById("menuBtn");
    const navMenu = document.getElementById("navMenu");

    menuBtn.addEventListener("click", () => {
      navMenu.style.display = navMenu.style.display === "flex" ? "none" : "flex";
    });

    // Klik di luar menu untuk menutupnya
    document.addEventListener("click", (e) => {
      if (!menuBtn.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.style.display = "none";
      }
    });

    // Simple subscribe alert footer
    document.getElementById('subscribeForm').addEventListener('submit', function(e){
      e.preventDefault();
      alert('Terima kasih sudah berlangganan informasi dari Villa Al-Rasyid!');
      this.reset();
    });
  </script>
</body>
</html>