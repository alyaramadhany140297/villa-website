<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Al Rasyid Villa</title>

  <!-- Fonts -->
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
      padding: 0px 10px;
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
      height: 60px;
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
      margin: 0 4px;
    }

    .lang-switch a:hover {
      text-decoration: underline;
    }

    /* Hero Section */
    .hero {
      position: relative;
      height: 120vh;
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
      overflow: hidden;
    }

    .hero-content h1 {
      font-family: 'Great Vibes', cursive;
      font-weight: 400;
      color: white;
      text-shadow: 0 3px 10px rgba(0,0,0,0.4);
      font-size: 6rem;
      letter-spacing: 1px;
      margin-bottom: 10px;
      animation: fadeText 1.5s ease;
      position: relative;
      z-index: 5;
    }

    .hero-content p {
      font-family: 'Playfair Display', serif;
      font-size: 1.1rem;
      letter-spacing: 3px;
      color: white;
      text-shadow: 0 0px 6px rgba(0,0,0,0.3);
      z-index: 5;
      position: relative;
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
      z-index: 5;
      position: relative;
    }

    .btn-main:hover {
      background-color: rgba(157, 145, 133, 0.95);
    
    }

    @keyframes fall {
      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
      }
      100% {
        transform: translateY(120vh) rotate(360deg);
        opacity: 0;
      }
    }

    /* About Section */
    .about-section {
      background-color: white;
      color: rgb(15, 14, 14);
      padding: 80px 0;
    }

    .video-box {
      background-image: url('images/video1.mp4');
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
  <!-- Navbar -->
  <nav class="navbar">
    <div class="menu-area">
      <div class="menu-icon">☰ Menu</div>
      <div class="lang-switch">
        <a href="#">EN</a> | <a href="#">ID</a>
      </div>
    </div>
    <a class="navbar-brand" href="#">
      <img src="images/logo villa.png" alt="">
    </a>
    <div style="width: 160px;"></div>
  </nav>

  <!-- Hero Section -->
  <section class="hero" id="hero">
    <img src="images/villa.jpg" class="active" alt="">
    <img src="images/villa1.jpg" alt="">
    <img src="images/villa2.jpg" alt="">
    <img src="images/villa3.jpg" alt="">
    <div class="overlay">
      <div class="hero-content text-center">
        <h1>Serenity in the Highlands</h1>
        <p>AL RASYID PUNCAK</p>
        <a href="#about" class="btn-main mt-3">Find Out More</a>
      </div>
    </div>
  </section>

  <!-- About Section -->
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

  <!-- Modal Video -->
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

    // Hero slideshow + daun animasi
    const slides = document.querySelectorAll('.hero img');
    const overlay = document.querySelector('.overlay');
    let current = 0;

    function createLeaf() {
      const leaf = document.createElement('div');
      leaf.classList.add('leaf');
      leaf.style.left = Math.random() * 100 + 'vw';
      leaf.style.animationDuration = (5 + Math.random() * 5) + 's';
      overlay.appendChild(leaf);
      setTimeout(() => leaf.remove(), 10000);
    }

    function changeSlide() {
      slides[current].classList.remove('active');
      current = (current + 1) % slides.length;
      slides[current].classList.add('active');

      // 🌿 munculkan daun hanya di slide ke-2
      if (current === 1) {
        for (let i = 0; i < 10; i++) {
          setTimeout(createLeaf, i * 500);
        }
      }
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
