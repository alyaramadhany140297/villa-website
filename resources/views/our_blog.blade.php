<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Villa Al Rasyid</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
<style>
    /* ====== Gaya Umum ====== */
    body {
      background-color: #f7f1e8;
      font-family: 'Playfair Display', serif;
      color: #5b4b3a;
      margin: 0;
      padding: 0;
    }

    /* ====== Header ====== */
    header {
      background-color: #b59f85;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 25px 60px;
    }

    header img {
  width: 50px;
  height: auto;
   }

   .menu {
      font-size: 14px;
      letter-spacing: 1px;
      color: #3b3023;
      cursor: pointer;
      user-select: none;
    }

    .menu-icon {
      font-size: 15px;
      color: #fff;
      cursor: pointer;
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

    /* ====== Judul Halaman ====== */
    .explore-title {
      text-align: center;
      margin: 40px 0 10px;
      font-size: 18px;
      letter-spacing: 1px;
    }

    .explore-subtitle {
      text-align: center;
      font-size: 16px;
      color: #4b3d2b;
      margin-bottom: 40px;
    }

    /* ====== Grid Konten ====== */
    .explore-container {
      max-width: 1000px;
      margin: 0 auto 80px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px 40px;
      padding: 0 30px;
    }

    .explore-item {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .explore-item img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .explore-item h3 {
      margin-top: 20px;
      font-size: 20px;
      color: #4b3d2b;
    }

    .explore-item p {
      margin-top: 10px;
      font-size: 16px;
      color: #5b4b3a;
      line-height: 1.7;
      text-align: justify;
    }

    /* ====== Responsif ====== */
    @media (max-width: 768px) {
      header {
        padding: 20px 25px;
      }

      .explore-container {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .explore-item img {
        width: 100%;
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

  <!-- Judul Halaman -->
  <div class="explore-title"><strong>ALL</strong></div>
  <div class="explore-subtitle">explore puncak bogor</div>

  <!-- Konten -->
  <div class="explore-container">
    <div class="explore-item">
      <img src="gambar1.jpg" alt="Kampung Rimba">
      <h3>Kampung Rimba by Annha</h3>
    </div>

    <div class="explore-item">
      <img src="gambar2.jpg" alt="Kebun Teh">
      <h3>Keindahan Alam di Sekitar Villa Al Rasyid</h3>
      <p>
        Kebun Teh Gunung Mas dan Kampung Rimba Camp terletak dekat dengan Villa Al Rasyid — cocok untuk wisata alam singkat yang menenangkan.
      </p>
    </div>

    <div class="explore-item">
      <img src="gambar3.jpg" alt="Kuliner Puncak">
      <h3>Kuliner Khas Puncak</h3>
      <p>
        Nasi Timbel jadi kuliner khas Sunda paling populer di Puncak. Selain itu, masih banyak makanan khas lain seperti Sate Maranggi, Soto Mie Bogor, dan Nasi Liwet yang wajib dicoba! 🍽
      </p>
    </div>

    <div class="explore-item">
      <img src="gambar4.jpg" alt="Interior Villa">
      <h3>Kenali Villa Al Rasyid Lebih Dekat</h3>
      <p>
        Villa Al Rasyid — Tempat peristirahatan tenang dengan udara sejuk dan pemandangan hijau. Suasana damai dan fasilitas nyaman menjadikannya pilihan ideal untuk beristirahat dan berkumpul bersama keluarga.
      </p>
    </div>
  </div>

   <!--Footer-->
  <footer>
  <div class="footer-container">
    <div class="footer-logo">
      <img src="{{ asset('images/logo.png') }}" alt="Villa Al-Rasyid Logo">
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>

    <div class="footer-col">
      <h4>ABOUT</h4>
      <ul>
        <li><a href="{{ route('our_blog') }}">Our Blog</a></li>
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
    ...
  </div>

  <div class="footer-bottom">
    <span>VILLA AL – RASYID 1997.</span>
    <div>
      <a href="{{ url('/kebijakan_privasi') }}">Kebijakan Privasi</a>
      <a href="{{ url('/persyaratan_pengguna') }}">Persyaratan Pengguna</a>
    </div>
  </div>
</footer>

  </footer>

<script>
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