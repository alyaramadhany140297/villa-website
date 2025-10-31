<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Al Rasyid Villa</title>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      scroll-behavior: smooth;
    }

    /* Navbar */
    nav.navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: rgba(169, 144, 119, 0.95);
      padding: 2px 10px;
      transition: all 0.5s ease;
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav.navbar.scrolled {
      background-color: rgba(169, 144, 119, 0.95);
      padding: 5px 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .navbar-brand {
      color: white !important;
      font-weight: 700;
      font-size: 2.3rem;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.4s ease;
    }

    .navbar-brand img {
      height: 70px;
      transition: all 0.4s ease;
    }

    nav.navbar.scrolled .navbar-brand img {
      height: 45px;
    }

    .menu-area {
      display: flex;
      align-items: center;
      gap: 25px;
    }

    .menu-icon {
      color: white;
      font-size: 1rem;
      cursor: pointer;
    }

    .lang-switch a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      /* margin: 0 4px; <--- DIHAPUS */
    }

    .lang-switch a:hover {
      text-decoration: underline;
    }

    /* Hero Section */
    .hero {
      position: relative;
      height: 100vh;
      overflow: hidden;
      background-color: #a99077;
    }

    .hero img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0;
      transition: opacity 1.5s ease-in-out;
      z-index: 0;
    }

    .hero img.active {
      opacity: 1;
      z-index: 1;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(169, 144, 119, 0.3);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      color: white;
      text-align: center;
      z-index: 2;
    }

    .hero-content h1 {
      font-family: 'Great Vibes', cursive;
      font-weight: 400;
      color: white;
      text-shadow: 0 3px 10px rgba(0,0,0,0.4);
      font-size: 5rem; /* <--- DIMODIFIKASI (dari 6rem) */
      letter-spacing: 1px;
      margin-bottom: 10px;
      animation: fadeText 1.5s ease;
    }

    .hero-content p {
      font-family: 'Playfair Display', serif;
      font-size: 1rem; /* <--- DIMODIFIKASI (dari 1.1rem) */
      letter-spacing: 3px;
      color: white;
      text-shadow: 0 px 6px rgba(0,0,0,0.3);
    }

    @keyframes fadeText {
      from { opacity: 0; transform: translateY(300px); }
      to { opacity: 1; transform: translateY(20); }
    }

    .btn-main { 
      background-color: rgba(169, 144, 119, 0.95);
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 30px;
      font-weight: 500;
      text-decoration: none;
      margin-top: 10px;
    }

    .btn-main:hover {
      background-color: rgba(157, 145, 133, 0.95);
    }
    
    /* === KODE TOMBOL CHECK AVAILABILITY DENGAN GAYA ELEGAN === */
    .btn-availability {
      position: absolute; 
      bottom: 50px;
      right: 50px;
      
      /* --- MODIFIKASI TAMPILAN --- */
      background-color: white; 
      color: #a99077; 
      border: 1px solid #a99077; 
      
      /* --- MODIFIKASI FONT --- */
      font-family: 'Playfair Display', serif; 
      font-weight: 400; 
      letter-spacing: 3px; 
      font-size: 1rem; /* <--- DIMODIFIKASI (dari 1.1rem) */

      /* --- MODIFIKASI UKURAN TOMBOL --- */
      padding: 15px 30px; /* <--- DIMODIFIKASI (dari 18px 40px) */
      border-radius: 0; 
      
      text-decoration: none;
      z-index: 5;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
      transition: all 0.3s ease;
    }

    .btn-availability:hover {
      background-color: #a99077; 
      color: white; 
      transform: translateY(-2px);
    }

    @media (max-width: 768px) {
      .btn-availability {
        bottom: 20px;
        right: 20px;
        padding: 12px 25px;
        font-size: 1rem;
      }
    }
    /* === END KODE TOMBOL BARU === */

    /* About Section */
    .about-section {
      background-color: white;
      color: rgb(15, 14, 14);
      padding: 80px 0;
    }

    .video-box {
      background-image: url('images/video-thumbnail.jpg');
      background-size: cover;
      background-position: center;
      height: 420px;
      width: 100%;
      position: relative;
      border-radius: 10px;
    }

    .video-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      border-radius: 8px;
      cursor: pointer;
    }

    .play-btn {
      color: white;
      font-size: 3rem;
      text-decoration: none;
      text-align: center;
    }

    .play-btn p {
      font-size: 0.9rem;
      font-weight: 500;
      margin-top: 8px;
      opacity: 0.8;
    }

    .text-content h6 {
      font-weight: 600;
      margin-bottom: 25px;
    }

    .text-content p {
      line-height: 1.8;
      text-align: justify;
      margin-bottom: 15px;
    }

    @media (max-width: 992px) {
      .video-box {
        height: 300px;
        margin-bottom: 30px;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar">
    <div class="menu-area">
      <div class="menu-icon">☰ Menu</div>
      <div class="lang-switch">
        <a href="#"> English</a>
      </div>
    </div>
    <a class="navbar-brand" href="#">
      <img src="images/logo.png" alt="Al Rasyid Villa">
    </a>
    <div style="width: 190px;"></div>
  </nav>

  <section class="hero" id="hero">
    <img src="images/villa.jpg" class="active" alt="">
    <img src="images/villa1.jpg" alt="">
    <img src="images/villa2.jpg" alt="">
    <img src="images/villa3.jpg" alt="">
    <div class="overlay">
      <div class="hero-content text-center">
        <h1>Serenity in the Highlands</h1>
        <p>AL RASYID PUNCAK</p>
      </div>
    </div>
    <a href="#" class="btn-availability">Check Availability</a>
  </section>

  <section class="about-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="video-box" data-bs-toggle="modal" data-bs-target="#videoModal">
            <div class="video-overlay">
              <a class="play-btn">
                <i class="bi bi-play-fill"></i>
                <p>PLAY VIDEO</p>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 text-content">
          <h6>LIBURAN TENANG DENGAN VIEW GUNUNG & CITY LIGHT</h6>
          <p>Sedang mencari tempat liburan dengan suasana tenang, udara sejuk, dan pemandangan yang menakjubkan? Villa Al Rasyid, yang berlokasi di kawasan Puncak Bogor, siap menjadi destinasi sempurna untuk Anda dan keluarga.</p>
          <p>Dikelilingi panorama alam yang asri, villa ini menawarkan pengalaman menginap dengan pemandangan pegunungan hijau di siang hari dan gemerlap city light di malam hari. Setiap sudut dirancang untuk menghadirkan kenyamanan sekaligus harmoni dengan alam, menjadikannya tempat ideal untuk melepas penat dari hiruk pikuk perkotaan.</p>
          <p>Villa Al Rasyid dilengkapi dengan fasilitas modern — mulai dari kolam renang pribadi, dapur lengkap, hingga ruang keluarga yang luas. Semua dipersiapkan agar waktu Anda di Puncak terasa hangat, nyaman, dan berkesan.</p>
          <p>Nikmati kesejukan udara khas Puncak, bangun pagi dengan view pegunungan yang memukau, lalu akhiri malam dengan panorama city light yang menenangkan. Di sini, setiap momen liburan akan terasa istimewa.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-transparent border-0">
        <div class="ratio ratio-16x9">
          <iframe id="villaVideo" src="" title="Villa Video" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Navbar shrink
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      navbar.classList.toggle('scrolled', window.scrollY > 80);
    });

    // Hero slideshow
    const slides = document.querySelectorAll('.hero img');
    let current = 0;
    function changeSlide() {
      slides[current].classList.remove('active');
      current = (current + 1) % slides.length;
      slides[current].classList.add('active');
    }
    setInterval(changeSlide, 4000);

    // Video modal autoplay
    const videoModal = document.getElementById('videoModal');
    const videoIframe = document.getElementById('villaVideo');
    const videoURL = "https://www.youtube.com/embed/Zg7E5t_1pXo";
    videoModal.addEventListener('show.bs.modal', () => {
      videoIframe.src = videoURL + "?autoplay=1";
    });
    videoModal.addEventListener('hidden.bs.modal', () => {
      videoIframe.src = "";
    });
  </script>
</body>
</html>