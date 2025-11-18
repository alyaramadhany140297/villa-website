<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Al Rasyid Villa</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&family=Great+Vibes&display=swap" rel="stylesheet"/>
  <!-- Icons + Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    /* ===== Base ===== */
    :root{ --perView:3; }
    body{ font-family:"Poppins",sans-serif; margin:0; padding:0; scroll-behavior:smooth; }

    /* ===== Navbar ===== */
    nav.navbar{
      position:fixed; inset:0 0 auto 0; width:100%;
      background:rgba(169,144,119,.95); padding:2px 10px;
      transition:.5s; z-index:1000; display:flex; justify-content:space-between; align-items:center;
    }
    nav.navbar.scrolled{ padding:5px 20px; box-shadow:0 4px 10px rgba(0,0,0,.15); }
    .navbar-brand{ color:#fff!important; font-weight:700; font-size:2.3rem; display:flex; align-items:center; gap:10px; transition:.4s; }
    .navbar-brand img{ height:70px; transition:.4s; }
    nav.navbar.scrolled .navbar-brand img{ height:45px; }
    .menu-area{ display:flex; align-items:center; gap:25px; }
    .menu-icon{ color:#fff; font-size:1rem; cursor:pointer; }
    .lang-switch a{ color:#fff; text-decoration:none; font-weight:500; }
    .lang-switch a:hover{ text-decoration:underline; }

    /* ===== Hero ===== */
    .hero{ position:relative; height:100vh; overflow:hidden; background:#a99077; }
    .hero img{ position:absolute; inset:0; width:100%; height:100%; object-fit:cover; opacity:0; transition:opacity 1.5s; z-index:0; }
    .hero img.active{ opacity:1; z-index:1; }
    .overlay{ position:absolute; inset:0; background:rgba(169,144,119,.3); display:flex; justify-content:center; align-items:center; flex-direction:column; color:#fff; text-align:center; z-index:2; }
    .hero-content h1{ font-family:"Great Vibes",cursive; font-weight:400; color:#fff; text-shadow:0 3px 10px rgba(0,0,0,.4); font-size:5rem; letter-spacing:1px; margin-bottom:10px; animation:fadeText 1.5s ease; }
    .hero-content p{ font-family:"Playfair Display",serif; font-size:1rem; letter-spacing:3px; color:#fff; text-shadow:0 6px rgba(0,0,0,.3); }
    @keyframes fadeText{ from{opacity:0; transform:translateY(300px);} to{opacity:1; transform:translateY(20px);} }
    .btn-availability{
      position:absolute; bottom:50px; right:50px; background:#fff; color:#a99077; border:1px solid #a99077;
      font-family:"Playfair Display",serif; letter-spacing:3px; font-size:1rem; padding:15px 30px; border-radius:0; text-decoration:none; z-index:5;
      box-shadow:0 4px 15px rgba(0,0,0,.2); transition:.3s;
    }
    .btn-availability:hover{ background:#a99077; color:#fff; transform:translateY(-2px); }
    @media (max-width:768px){ .btn-availability{ bottom:20px; right:20px; padding:12px 25px; } }

    /* ======= ABOUT SECTION FINAL (VIDEO SEGI EMPAT + TEKS KANAN + FULL BLUR) ======= */
.about-section {
  position: relative;
  min-height: 100dvh;
  background: url("images/villa.jpg") center/cover no-repeat fixed;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

/* Lapisan blur seluruh background */
.about-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background: inherit;
  filter: blur(10px) brightness(0.6);
  transform: scale(1.1);
  z-index: 0;
}

/* wrapper utama: kiri video, kanan teks */
.content-wrapper {
  position: relative;
  z-index: 2;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 60px;
  width: 85%;
  max-width: 1200px;
}

/* ====== Kotak video segi empat ====== */
.video-box {
  position: relative;
  background: #d9d3cd;
  border-radius: 20px;
  width: 420px;
  height: 65vh;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 10px 40px rgba(0,0,0,.25);
}

.video-overlay {
  width: 100%;
  height: 100%;
  display: grid;
  place-items: center;
  text-align: center;
  cursor: pointer;
}

.play-btn i {
  font-size: 80px;
  color: rgba(255,255,255,.9);
  filter: drop-shadow(0 6px 18px rgba(0,0,0,.35));
  transition: transform .3s ease;
}
.play-btn i:hover {
  transform: scale(1.1);
}
.play-btn p {
  margin-top: 10px;
  letter-spacing: .25em;
  font-family: "Playfair Display", serif;
  font-size: 13px;
  color: rgba(0,0,0,.6);
}

/* ====== Kotak teks kanan ====== */
.text-content {
  flex: 1;
  background: rgba(255,255,255,.15);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border-radius: 20px;
  padding: 40px;
  color: white;
  box-shadow: 0 10px 40px rgba(0,0,0,.25);
}

.text-content h2 {
  font-size: 26px;
  margin-bottom: 20px;
  font-weight: 700;
  letter-spacing: 1px;
}
.text-content p {
  line-height: 1.7;
  font-size: 16px;
  color: rgba(255,255,255,.9);
}

/* ====== Responsif ====== */
@media (max-width: 991px) {
  .content-wrapper {
    flex-direction: column;
    gap: 30px;
    width: 90%;
  }
  .video-box {
    width: 100%;
    height: 45vh;
  }
  .text-content {
    width: 100%;
    padding: 25px;
    text-align: center;
  }
}


/* area klik play menutupi seluruh strip kiri */
.about-section .video-overlay{ position: absolute !important; inset: 0 !important; display: grid; place-items: center; cursor: pointer; }

/* kolom kanan = panel bening */
.about-section .row > .col-lg-6.text-content { grid-column: 2 / -1 !important; margin: 0 !important; width: auto !important; min-height: 100dvh; display: flex; flex-direction: column; justify-content: center; border-radius: 0 0 0 14px; }

/* tombol play */
.about-section .play-btn i{ font-size: 100px; color: rgba(255,255,255,.9); filter: drop-shadow(0 6px 18px rgba(0,0,0,.35)); } /* Ukuran ikon play dikembalikan */

/* mobile tumpuk */
@media (max-width: 991px){
  .about-section .row { grid-template-columns: 1fr !important; min-height: auto; }
  .about-section .video-box { min-height: 220px !important; }
  .about-section .row > .col-lg-6.text-content { min-height: auto; border-radius: 14px; }
}

    /* ===== Facility ===== */
    .facility-bg{ background:#8b725c; padding:72px 0; color:#111; }
    @media (max-width:768px){ .facility-bg{ padding:48px 0; } }

    .panel.facility .section-title{
      font-family:"Playfair Display",serif; font-weight:600; font-size:clamp(28px,3.2vw,44px); line-height:1.15; letter-spacing:.02em;
      text-align:center; margin:0 auto 28px; width:100%;
      opacity:0; transform:translateY(12px) scale(.98); filter:blur(1px);
      display:inline-block; background:linear-gradient(currentColor,currentColor) left bottom/0 2px no-repeat; padding-bottom:6px;
    }
    .panel.facility .section-title.is-in{ animation:facTitleIn .6s cubic-bezier(.22,.8,.2,1) forwards; }
    @keyframes facTitleIn{ 0%{opacity:0; transform:translateY(12px) scale(.98); filter:blur(1px); background-size:0 2px;} 100%{opacity:1; transform:none; filter:blur(0); background-size:100% 2px;} }

    .panel.facility .features{ display:grid; grid-template-columns:repeat(4,minmax(0,1fr)); gap:26px; align-items:start; margin-bottom:56px; }
    @media (max-width:1000px){ .panel.facility .features{ grid-template-columns:repeat(2,1fr); } }
    @media (max-width:560px){ .panel.facility .features{ grid-template-columns:1fr; } }

    .panel.facility .feature{
      position:relative; border-radius:18px; padding:14px 12px; background:rgba(255,255,255,.04);
      transition:transform .45s cubic-bezier(.22,.8,.2,1), box-shadow .45s, background .45s;
      will-change:transform,box-shadow,background; opacity:0; transform:translateY(18px);
    }
    .panel.facility .feature.is-in{ opacity:1; transform:none; transition:transform .55s ease, opacity .55s ease; transition-delay:calc(var(--i,0)*90ms); }
    .panel.facility .feature:hover{ transform:translateY(-8px) scale(1.02); box-shadow:0 18px 40px rgba(0,0,0,.28); background:rgba(255,255,255,.06); }
    .panel.facility .feature::after{
      content:""; position:absolute; inset:0;
      background:linear-gradient(120deg,transparent 20%, rgba(255,255,255,.18) 45%, transparent 70%);
      transform:translateX(-120%) skewX(-15deg); transition:transform .85s; pointer-events:none;
    }
    .panel.facility .feature:hover::after{ transform:translateX(120%) skewX(-15deg); }

    .panel.facility .icon-wrap{
      width:170px !important; height:170px !important; margin:0 auto 16px; display:grid; place-items:center; border:0; background:transparent;
      transition:transform .35s cubic-bezier(.2,.8,.2,1), box-shadow .35s; position:relative;
    }
    .panel.facility .icon-wrap::before{
      content:""; position:absolute; inset:-6px; border-radius:20px;
      background:radial-gradient(120px 120px at 50% 40%, rgba(255,255,255,.22), transparent 60%); opacity:0; transition:opacity .45s;
    }
    .panel.facility .feature:hover .icon-wrap::before{ opacity:1; }
    .panel.facility .icon-wrap img{ width:100% !important; height:100% !important; object-fit:contain; display:block; transition:transform .5s, filter .5s; }
    .panel.facility .feature:hover .icon-wrap img{ transform:scale(1.06); filter:saturate(1.05) contrast(1.04); }
    @media (max-width:640px){ .panel.facility .icon-wrap{ width:120px !important; height:120px !important; } }

    .panel.facility .feature .label{ font-size:.8rem; letter-spacing:.12rem; word-spacing:-.22em; font-weight:700; text-align:center; margin-top:6px; color:#111; text-transform:uppercase; transition:letter-spacing .3s ease, opacity .3s ease; }
    .panel.facility .feature:hover .label{ letter-spacing:.18em; opacity:.95; }
    .panel.facility .feature .desc{ max-width:260px; margin:8px auto 0; font-size:.82rem; line-height:1.5; color:rgba(0,0,0,.82); text-align:center; }

    /* ===== Carousel (multi-kartu) ===== */
    @media (max-width:1000px){ :root{ --perView:2; } }
    @media (max-width:560px){ :root{ --perView:1; } }
    .carousel{ position:relative; overflow:hidden; border-radius:16px; padding:6px 40px; background:transparent; }
    .track{ display:flex; gap:16px; transition:transform .4s ease; }
    .slide{ flex:0 0 calc((100% - (var(--perView) - 1) * 16px) / var(--perView)); }
    .slide img{ display:block; width:100%; height:220px; object-fit:cover; border-radius:16px; }
    @media (min-width:760px){ .slide img{ height:260px; } }
    @media (min-width:1100px){ .slide img{ height:300px; } }
    .arrow{
      position:absolute; top:50%; transform:translateY(-50%); width:36px; height:36px; border:0; border-radius:50%;
      background:rgba(255,255,255,.94); color:#333; display:grid; place-items:center; cursor:pointer; box-shadow:0 6px 20px rgba(0,0,0,.25);
    }
    .arrow.left{ left:8px; } .arrow.right{ right:8px; }
    .arrow:disabled{ opacity:.4; cursor:not-allowed; }
    .arrow svg{ width:20px; height:20px; }

    /* Lightbox anim */
    #facLightboxImg.lb-in{ animation:facZoom .35s cubic-bezier(.22,.8,.2,1); }
    @keyframes facZoom{ from{transform:scale(.96); opacity:.2} to{transform:scale(1); opacity:1} }

   /* ===== Review section (cream bg) ===== */
.review-section{ background:#fbf2e4; padding:48px 0 80px; color:#222; }
.review-section .container.small{ max-width: 980px; }

/* dots + stars */
.review-dots{ text-align:center; color:#8a63d2; font-size:26px; line-height:1; margin-bottom:6px; }
.review-stars{ text-align:center; color:#f5c200; font-size:20px; margin-bottom:12px; }

/* quote */
.review-quote{ text-align:center; margin:0 auto 26px; max-width:820px; }
.review-quote p{
  font-family:"Playfair Display",serif; font-size:clamp(18px,2.2vw,24px);
  line-height:1.55; color:#333; margin:0 0 10px;
}
.review-quote footer{
  font-size:12px; letter-spacing:.12em; color:#555; text-transform:uppercase;
}

/* grid foto */
.review-grid{
  display:grid; grid-template-columns:repeat(4, minmax(0,1fr));
  gap:18px; justify-items:center; margin:18px auto 38px; max-width:920px;
}
.review-grid img{
  width:100%; aspect-ratio:1/1; object-fit:cover;
  border-radius:16px; box-shadow:0 4px 14px rgba(0,0,0,.12);
}
.review-grid img.with-border{ border:2px solid rgba(0,0,0,.25); }
@media (max-width:992px){ .review-grid{ grid-template-columns:repeat(3,1fr); } }
@media (max-width:576px){ .review-grid{ grid-template-columns:repeat(2,1fr); gap:12px; } }

/* kartu video tumpang tindih */
.review-video{ position:relative; height:320px; margin-top:4px; }
.rv-card{
  position:absolute; display:grid; place-items:center; text-align:center;
  border-radius:8px; box-shadow:0 14px 32px rgba(0,0,0,.18);
}
.rv-card.ghost{
  left:10%; bottom:34%;
  width:min(420px,70%); height:180px;
  background:#fff; color:#9aa0a6; font-size:22px;
}
.rv-card.video{
  right:8%; bottom:0;
  width:min(430px,72%); height:260px;
  background:#d7d4d6; color:#555; text-decoration:none;
}
.rv-logo{ position:absolute; top:18px; left:18px; font-weight:600; opacity:.85; }
.rv-play{ font-size:56px; color:#fff; opacity:.95; filter:drop-shadow(0 8px 20px rgba(0,0,0,.35)); }
.rv-card.video small{ position:absolute; bottom:22px; letter-spacing:.18em; opacity:.65; }

/* kecilkan di mobile */
@media (max-width:576px){
  .review-video{ height:250px; }
  .rv-card.ghost{ left:4%; width:78%; height:140px; }
  .rv-card.video{ right:4%; width:82%; height:200px; }
}
  </style>
</head>

<body>
  <nav class="navbar">
    <div class="menu-area">
      <div class="menu-icon">☰ Menu</div>
      <div class="lang-switch"><a href="#">English</a></div>
    </div>
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Al Rasyid Villa"/></a>
    <div style="width:190px"></div>
  </nav>

  <!-- ===== Hero ===== -->
  <section class="hero" id="hero">
    <img src="images/villa.jpg" class="active" alt=""/>
    <img src="images/villa1.jpg" alt=""/>
    <img src="images/villa2.jpg" alt=""/>
    <img src="images/villa3.jpg" alt=""/>
    <div class="overlay">
      <div class="hero-content text-center">
        <h1>Serenity in the Highlands</h1>
        <p>AL RASYID PUNCAK</p>
      </div>
    </div>
    <a href="#" class="btn-availability">Check Availability</a>
  </section>

  <!-- ===== About ===== -->
  <section class="about-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <!-- kiri -->
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
        <!-- kanan -->
        <div class="col-lg-6 text-content">
          <div class="tc-inner">
            <h6>LIBURAN TENANG DENGAN VIEW GUNUNG &amp; CITY LIGHT</h6>
            <p>Sedang mencari tempat liburan dengan suasana tenang, udara sejuk, dan pemandangan yang menakjubkan? Villa Al Rasyid, yang berlokasi di kawasan Puncak Bogor, siap menjadi destinasi sempurna untuk Anda dan keluarga.</p>
            <p>Dikelilingi panorama alam yang asri, villa ini menawarkan pengalaman menginap dengan pemandangan pegunungan hijau di siang hari dan gemerlap city light di malam hari. Setiap sudut dirancang untuk menghadirkan kenyamanan sekaligus harmoni dengan alam, menjadikannya tempat ideal untuk melepas penat dari hiruk pikuk perkotaan.</p>
            <p>Villa Al Rasyid dilengkapi dengan fasilitas modern — mulai dari kolam renang pribadi, dapur lengkap, hingga ruang keluarga yang luas. Semua dipersiapkan agar waktu Anda di Puncak terasa hangat, nyaman, dan berkesan.</p>
            <p>Nikmati kesejukan udara khas Puncak, bangun pagi dengan view pegunungan yang memukau, lalu akhiri malam dengan panorama city light yang menenangkan. Di sini, setiap momen liburan akan terasa istimewa.</p>
          </div>
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

  <!-- ===== Facility ===== -->
  <section class="section facility-bg" id="facility">
    <div class="container">
      <div class="panel facility">
        <h2 class="section-title">Interior &amp; Facility</h2>

        <div class="features">
          <div class="feature">
            <div class="icon-wrap"><img src="/images/karaoke-removebg-preview.png" alt="Karaoke"/></div>
            <div class="label">K A R A O K E</div>
            <p class="desc">Siapkan suara terbaik Anda. Fasilitas karaoke modern kami menjamin malam yang penuh tawa dan lagu.</p>
          </div>

          <div class="feature">
            <div class="icon-wrap"><img src="/images/swimm-removebg-preview.png" alt="Swimming Pool"/></div>
            <div class="label" aria-label="Swimming Pool">S W I M M I N G&nbsp;P O O L</div>
            <p class="desc">Bersantai dan segarkan diri di kolam renang eksklusif vila. Cocok untuk semua usia.</p>
          </div>

          <div class="feature">
            <div class="icon-wrap"><img src="/images/wifi-removebg-preview.png" alt="Wi-Fi"/></div>
            <div class="label">W I F I</div>
            <p class="desc">Koneksi internet nirkabel stabil dan cepat tersedia gratis untuk semua tamu.</p>
          </div>

          <div class="feature">
            <div class="icon-wrap"><img src="/images/airpanas-removebg-preview.png" alt="Air Panas"/></div>
            <div class="label">A I R &nbsp; P A N A S</div>
            <p class="desc">Nikmati suasana tenang bernuansa alami dengan berendam air panas.</p>
          </div>
        </div>
      </div>

      <!-- Carousel multi-kartu -->
      <div class="carousel" id="fac-carousel">
        <button class="arrow left" aria-label="Sebelumnya" data-dir="-1">
          <svg viewBox="0 0 24 24" fill="none"><path d="M15 6L9 12l6 6" stroke="currentColor" stroke-width="2"/></svg>
        </button>

        <div class="track">
          <div class="slide"><img src="/images/balkon.jpg" alt="Balkon"/></div>
          <div class="slide"><img src="/images/kolam renang.jpg" alt="Kolam Renang"/></div>
          <div class="slide"><img src="/images/billiard.jpg" alt="Billiard"/></div>
          <div class="slide"><img src="/images/ruang karaoke.jpg" alt="Ruang Karaoke"/></div>
          <div class="slide"><img src="/images/gazebo.jpg" alt="Gazebo"/></div>
          <div class="slide"><img src="/images/kamar mandi.jpg" alt="Kamar Mandi"/></div>
          <div class="slide"><img src="/images/kamar mandi 2.jpg" alt="Kamar Mandi 2"/></div>
          <div class="slide"><img src="/images/kamar tidur 3.jpg" alt="Kamar Tidur 3"/></div>
          <div class="slide"><img src="/images/kamar tidur 4.jpg" alt="Kamar Tidur 4"/></div>
          <div class="slide"><img src="/images/kamar tidur 5.jpg" alt="Kamar Tidur 5"/></div>
          <div class="slide"><img src="/images/tempat kumpul.jpg" alt="Tempat Kumpul"/></div>
          <div class="slide"><img src="/images/kitchen.jpg" alt="Dapur"/></div>
          <div class="slide"><img src="/images/ruangan.jpg" alt="Ruangan"/></div>
        </div>

        <button class="arrow right" aria-label="Berikutnya" data-dir="1">
          <svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2"/></svg>
        </button>
      </div>
    </div>
  </section>

  <!-- Lightbox Foto -->
  <div class="modal fade" id="facLightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content bg-black bg-opacity-75 border-0">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body p-0 d-flex align-items-center justify-content-center position-relative">
          <img id="facLightboxImg" src="" alt="" class="img-fluid" style="max-height:90vh"/>
          <button class="btn btn-light rounded-circle position-absolute" id="lbPrev" aria-label="Sebelumnya" style="left:16px">&#10094;</button>
          <button class="btn btn-light rounded-circle position-absolute" id="lbNext" aria-label="Berikutnya" style="right:16px">&#10095;</button>
        </div>
      </div>
    </div>
  </div> <!-- <<<<<< DIPINDAHKAN: tutup .modal sebelum section review -->

  <!-- Review section -->
  <section class="review-section" id="stories">
    <div class="container small">
      <div class="review-dots">…</div>

      <div class="review-stars" aria-label="5 of 5">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
      </div>

      <blockquote class="review-quote">
        <p>
          Absolute perfection. The service, the decor, the villa, the view, the staff—the everything.
          It truly feels like you’ve moved to your own private estate.
        </p>
        <footer>ANNA M. <span>Google Review</span></footer>
      </blockquote>

      <div class="review-grid">
        <img src="/images/gallery/1.jpg" alt="Gallery 1">
        <img src="/images/gallery/2.jpg" alt="Gallery 2">
        <img src="/images/gallery/3.jpg" alt="Gallery 3">
        <img src="/images/gallery/4.jpg" alt="Gallery 4">
        <img src="/images/gallery/5.jpg" alt="Gallery 5" class="with-border">
        <img src="/images/gallery/6.jpg" alt="Gallery 6">
        <img src="/images/gallery/7.jpg" alt="Gallery 7">
        <img src="/images/gallery/8.jpg" alt="Gallery 8" class="with-border">
        <img src="/images/gallery/9.jpg" alt="Gallery 9">
      </div>

      <div class="review-video">
        <div class="rv-card ghost"><span>Frame</span></div>
        <a class="rv-card video" href="#" data-bs-toggle="modal" data-bs-target="#videoModal" aria-label="Play video">
          <div class="rv-logo">li…</div>
          <i class="bi bi-play-fill rv-play"></i>
          <small>PLAY VIDEO</small>
        </a>
      </div>
    </div>
  </section>

  <!-- ===== Scripts ===== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Navbar shrink
    window.addEventListener("scroll", () => {
      const navbar = document.querySelector(".navbar");
      navbar.classList.toggle("scrolled", window.scrollY > 80);
    });

    // Hero slideshow
    (function(){
      const slides = document.querySelectorAll(".hero img"); let i = 0;
      setInterval(()=>{ slides[i].classList.remove("active"); i = (i+1)%slides.length; slides[i].classList.add("active"); }, 4000);
    })();

    // Video modal autoplay
    (function(){
      const modal = document.getElementById("videoModal");
      const iframe = document.getElementById("villaVideo");
      const url = "https://www.youtube.com/embed/Zg7E5t_1pXo";
      modal.addEventListener("show.bs.modal", () => { iframe.src = url + "?autoplay=1"; });
      modal.addEventListener("hidden.bs.modal", () => { iframe.src = ""; });
    })();

    // Carousel multi-kartu + autoplay + reveal
    (function(){
      const root = document.documentElement;
      const wrap = document.getElementById("fac-carousel");
      const track = wrap.querySelector(".track");
      const slides = [...track.children];
      const btnL = wrap.querySelector(".arrow.left");
      const btnR = wrap.querySelector(".arrow.right");
      let index = 0, timer = null;

      const perView = () => Math.max(1, parseInt(getComputedStyle(root).getPropertyValue("--perView"))||1);
      const gapPx  = () => parseFloat(getComputedStyle(track).gap||"16px");
      const slideW = () => slides[0].getBoundingClientRect().width;
      const maxIdx = () => Math.max(0, slides.length - perView());

      function update(){
        const offset = index * (slideW() + gapPx());
        track.style.transform = `translateX(${-offset}px)`;
        btnL.disabled = index <= 0;
        btnR.disabled = index >= maxIdx();
      }
      function go(dir){ index = Math.min(Math.max(index + dir, 0), maxIdx()); update(); }

      function start(){ stop(); timer = setInterval(()=>{ if(index>=maxIdx()) index=-1; go(1); }, 3500); }
      function stop(){ if(timer){ clearInterval(timer); timer=null; } }
      function pauseThenResume(){ stop(); setTimeout(start, 6000); }

      btnL.addEventListener("click", ()=>{ go(-1); pauseThenResume(); });
      btnR.addEventListener("click", ()=>{ go(1);  pauseThenResume();  });
      window.addEventListener("resize", update);
      wrap.addEventListener("pointerenter", stop);
      wrap.addEventListener("pointerleave", start);

      // reveal tiles
      const io = new IntersectionObserver((ents)=>{
        ents.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add("in"); io.unobserve(e.target); }});
      },{threshold:.15});
      [...document.querySelectorAll(".feature, .slide")].forEach((el,i)=>{
        el.classList.add("reveal"); el.style.transitionDelay = i*80 + "ms"; io.observe(el);
      });

      update(); start();
    })();

    // Reveal facility title + features (stagger)
    (function(){
      const items = document.querySelectorAll(".panel.facility .feature, .panel.facility .section-title");
      items.forEach((el,i)=> el.style.setProperty("--i", i));
      const io = new IntersectionObserver((ents)=>{
        ents.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add("is-in"); io.unobserve(e.target); }});
      },{threshold:.2});
      items.forEach(el=> io.observe(el));
    })();

    // Lightbox
    (function(){
      const root = document.getElementById("fac-carousel"); if(!root) return;
      const track = root.querySelector(".track");
      const imgs  = Array.from(track.querySelectorAll(".slide img"));
      const modalEl = document.getElementById("facLightbox");
      const modalImg = document.getElementById("facLightboxImg");
      const btnPrev = document.getElementById("lbPrev");
      const btnNext = document.getElementById("lbNext");
      const bsModal = new bootstrap.Modal(modalEl);
      let idx = 0;

      function show(i){
        idx = (i + imgs.length) % imgs.length;
        modalImg.classList.remove("lb-in");
        modalImg.src = imgs[idx].src;
        modalImg.alt = imgs[idx].alt || "";
        bsModal.show();
      }
      track.addEventListener("click", (e)=>{
        const img = e.target.closest(".slide img"); if(!img) return;
        show(imgs.indexOf(img));
      });
      btnPrev.addEventListener("click", ()=> show(idx-1));
      btnNext.addEventListener("click", ()=> show(idx+1));
      modalImg.addEventListener("load", ()=> modalImg.classList.add("lb-in"));
      modalEl.addEventListener("shown.bs.modal", ()=> modalEl.focus());
      modalEl.addEventListener("keydown", (e)=>{ if(e.key==="ArrowLeft") show(idx-1); if(e.key==="ArrowRight") show(idx+1); });
    })();

    // Reveal glass panel
    (function(){
      const el = document.querySelector(".about-section .text-content");
      if(!el) return;
      const io = new IntersectionObserver((es)=>{
        es.forEach(e=>{ if(e.isIntersecting){ el.classList.add("is-in"); io.unobserve(el); }});
      },{threshold:.2});
      io.observe(el);
    })();
  </script>
</body>
</html>
