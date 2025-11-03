<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Al Rasyid Villa</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Great+Vibes&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
      /* ===== Base ===== */
      body {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
      }

      /* ===== Navbar ===== */
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
      .navbar-brand img { height: 70px; transition: all 0.4s ease; }
      nav.navbar.scrolled .navbar-brand img { height: 45px; }
      .menu-area { display: flex; align-items: center; gap: 25px; }
      .menu-icon { color: white; font-size: 1rem; cursor: pointer; }
      .lang-switch a { color: white; text-decoration: none; font-weight: 500; }
      .lang-switch a:hover { text-decoration: underline; }

      /* ===== Hero ===== */
      .hero {
        position: relative;
        height: 100vh;
        overflow: hidden;
        background-color: #a99077;
      }
      .hero img {
        position: absolute; inset: 0;
        width: 100%; height: 100%; object-fit: cover;
        opacity: 0; transition: opacity 1.5s ease-in-out; z-index: 0;
      }
      .hero img.active { opacity: 1; z-index: 1; }
      .overlay {
        position: absolute; inset: 0;
        background: rgba(169, 144, 119, 0.3);
        display: flex; justify-content: center; align-items: center; flex-direction: column;
        color: white; text-align: center; z-index: 2;
      }
      .hero-content h1 {
        font-family: "Great Vibes", cursive; font-weight: 400; color: white;
        text-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
        font-size: 5rem; letter-spacing: 1px; margin-bottom: 10px;
        animation: fadeText 1.5s ease;
      }
      .hero-content p {
        font-family: "Playfair Display", serif;
        font-size: 1rem; letter-spacing: 3px; color: white;
        text-shadow: 0 6px rgba(0, 0, 0, 0.3);
      }
      @keyframes fadeText {
        from { opacity: 0; transform: translateY(300px); }
        to   { opacity: 1; transform: translateY(20px); }
      }

      .btn-main {
        background-color: rgba(169, 144, 119, 0.95);
        color: white; border: none; padding: 12px 25px; border-radius: 30px;
        font-weight: 500; text-decoration: none; margin-top: 10px;
      }
      .btn-main:hover { background-color: rgba(157, 145, 133, 0.95); }

      /* Hero: tombol cek availability */
      .btn-availability {
        position: absolute; bottom: 50px; right: 50px;
        background-color: white; color: #a99077; border: 1px solid #a99077;
        font-family: "Playfair Display", serif; font-weight: 400; letter-spacing: 3px;
        font-size: 1rem; padding: 15px 30px; border-radius: 0; text-decoration: none; z-index: 5;
        box-shadow: 0 4px 15px rgba(0,0,0,.2); transition: all .3s ease;
      }
      .btn-availability:hover { background-color: #a99077; color: white; transform: translateY(-2px); }
      @media (max-width: 768px) {
        .btn-availability { bottom: 20px; right: 20px; padding: 12px 25px; font-size: 1rem; }
      }

      /* ====== ABOUT: layout mirip gambar referensi ====== */
.about-section{
  --left: clamp(360px, 34vw, 520px); /* lebar strip kiri; atur angka ini saja */
  min-height: 100dvh;
  padding: 0;
  background: url("images/villa.jpg") center/cover no-repeat fixed;
  isolation: isolate;
}
.about-section::after{
  content:""; position:absolute; inset:0;
  background: rgba(0,0,0,.35); z-index:0; /* gelap tipis seluruh foto */
}
.about-section .container{ max-width:100%; padding:0; }
.about-section .row{
  display:grid !important;
  grid-template-columns: var(--left) 1fr;
  min-height: 100dvh;
  align-items: stretch !important;
}

/* Kiri: video strip penuh tinggi */
.about-section .video-box{
  position:relative; z-index:1;
  width:100%; min-height:100dvh; border-radius:0;
  background:#d9d3cd; display:grid; place-items:center;
}
.about-section .video-overlay{ width:100%; height:100%; cursor:pointer; }
.about-section .play-btn i{ font-size:100px; color:rgba(255,255,255,.85); filter:drop-shadow(0 6px 18px rgba(0,0,0,.35)); }
.about-section .play-btn p{ margin-top:12px; letter-spacing:.25em; font-family:"Playfair Display",serif; font-size:12px; color:rgba(0,0,0,.45); }

/* Kanan: panel kaca menyelimuti penuh */
.about-section .text-content{
  position:relative; z-index:1;
  margin:0 !important; width:auto !important;
  min-height:100dvh; display:flex; align-items:center; justify-content:center;
  background: rgba(255,255,255,.16);
  -webkit-backdrop-filter: blur(6px); backdrop-filter: blur(6px);
  border: 1px solid rgba(255,255,255,.22);
  border-left: 0;           /* tanpa garis di batas tengah */
  border-radius: 0;         /* panel flat seperti contoh */
  padding: 6vh 6vw;         /* ruang dalam panel */
}
.about-section .text-content > *{
  max-width: 820px;         /* kolom teks tidak melebar penuh */
  width: 100%;
  text-align: left;
}

/* Mobile: tumpuk */
@media (max-width: 991px){
  .about-section{ min-height:auto; background-attachment:scroll; }
  .about-section .row{ grid-template-columns:1fr !important; min-height:auto; }
  .about-section .video-box{ min-height:220px; }
  .about-section .text-content{
    min-height:auto; border-radius:14px; padding:18px;
  }
}

/* Glass panel seperti semula */
.about-section .text-content{
  position: relative;
  z-index: 1;
  background: rgba(255,255,255,.16);          /* bening seperti sebelumnya */
  -webkit-backdrop-filter: blur(6px);
  backdrop-filter: blur(6px);
  border: 1px solid rgba(255,255,255,.22);
  color:#fff;

  /* animasi awal */
  opacity: 0;
  transform: translateY(12px) scale(.98);
  filter: blur(1px);
  transition: box-shadow .3s ease;
  box-shadow: 0 16px 40px rgba(0,0,0,.25);
}

/* konten di dalam panel agar rapi */
.about-section .text-content .tc-inner{
  padding: 28px;
  border-radius: 14px;
}

/* saat muncul */
.about-section .text-content.is-in{
  animation: glassIn .65s cubic-bezier(.22,.8,.2,1) forwards;
}

/* underline judul h6 yang muncul halus */
.about-section .text-content h6{
  margin: 0 0 14px;
  font-weight: 700;
  letter-spacing: .08em;
  text-align: center;
  color: #eaeaea;
  display:inline-block;
  background: linear-gradient(currentColor,currentColor) left bottom/0 2px no-repeat;
  padding-bottom:6px;
}
.about-section .text-content.is-in h6{
  animation: h6Underline .6s cubic-bezier(.22,.8,.2,1) .15s forwards;
}

/* keyframes */
@keyframes glassIn{
  0%   {opacity:0; transform: translateY(12px) scale(.98); filter: blur(1px);}
  100% {opacity:1; transform: none;                     filter: blur(0);}
}
@keyframes h6Underline{
  0%   {background-size:0 2px;}
  100% {background-size:100% 2px;}
}

/* hormati prefers-reduced-motion */
@media (prefers-reduced-motion: reduce){
  .about-section .text-content{opacity:1; transform:none; filter:none; animation:none;}
  .about-section .text-content h6{background-size:100% 2px;}
}

/* ==== ABOUT: paksa layout grid 2 kolom dan video penuh kiri ==== */
.about-section { --left: clamp(340px, 36vw, 480px); min-height: 100dvh; padding: 0 !important; }
.about-section .container { max-width: 100% !important; padding: 0 !important; }
.about-section .row { display: grid !important; grid-template-columns: var(--left) 1fr; min-height: 100dvh; }

/* kolom kiri tempat video HARUS jadi kolom-1, tanpa padding bootstrap */
.about-section .row > .col-lg-6.mb-4.mb-lg-0 { grid-column: 1 / 2 !important; padding: 0 !important; }

/* kotak VIDEO isi kolom kiri penuh */
.about-section .video-box{
  position: relative !important;
  width: 100% !important;
  height: auto !important;
  min-height: 100dvh !important;
  background: #d9d3cd;
  overflow: hidden;
}

/* area klik play menutupi seluruh strip kiri */
.about-section .video-overlay{ position: absolute !important; inset: 0 !important; display: grid; place-items: center; cursor: pointer; }

/* kolom kanan = panel bening */
.about-section .row > .col-lg-6.text-content { grid-column: 2 / -1 !important; margin: 0 !important; width: auto !important; min-height: 100dvh; display: flex; flex-direction: column; justify-content: center; border-radius: 0 0 0 14px; }

/* tombol play */
.about-section .play-btn i{ font-size: 96px; color: rgba(255,255,255,.9); filter: drop-shadow(0 6px 18px rgba(0,0,0,.35)); }

/* mobile tumpuk */
@media (max-width: 991px){
  .about-section .row { grid-template-columns: 1fr !important; min-height: auto; }
  .about-section .video-box { min-height: 220px !important; }
  .about-section .row > .col-lg-6.text-content { min-height: auto; border-radius: 14px; }
}






      /* ===== Facility section ===== */
      .facility-bg { background: #8b725c; padding: 72px 0; color: #111; }
      @media (max-width: 768px){ .facility-bg { padding: 48px 0; } }

      .panel.facility .section-title {
        font-family: "Playfair Display", serif; font-weight: 600;
        font-size: clamp(28px, 3.2vw, 44px); line-height: 1.15; letter-spacing: .02em;
        text-align: center; margin: 0 auto 28px; width: 100%;
        opacity: 0; transform: translateY(12px) scale(.98); filter: blur(1px);
        display: inline-block;
        background: linear-gradient(currentColor, currentColor) left bottom / 0 2px no-repeat;
        padding-bottom: 6px;
      }
      .panel.facility .section-title.is-in { animation: facTitleIn .6s cubic-bezier(.22,.8,.2,1) forwards; }
      @keyframes facTitleIn {
        0% { opacity:0; transform: translateY(12px) scale(.98); filter: blur(1px); background-size:0 2px; }
        100%{ opacity:1; transform: none; filter: blur(0); background-size:100% 2px; }
      }

      .panel.facility .features {
        display: grid; grid-template-columns: repeat(4, minmax(0,1fr));
        gap: 26px; align-items: start; margin-bottom: 56px;
      }
      @media (max-width: 1000px){ .panel.facility .features { grid-template-columns: repeat(2,1fr); } }
      @media (max-width: 560px){ .panel.facility .features { grid-template-columns: 1fr; } }

      .panel.facility .feature {
        position: relative; border-radius: 18px; padding: 14px 12px;
        background: rgba(255,255,255,.04);
        transition: transform .45s cubic-bezier(.22,.8,.2,1), box-shadow .45s, background .45s;
        will-change: transform, box-shadow, background;
        opacity: 0; transform: translateY(18px);
      }
      .panel.facility .feature.is-in {
        opacity: 1; transform: none;
        transition: transform .55s ease, opacity .55s ease;
        transition-delay: calc(var(--i,0) * 90ms);
      }
      .panel.facility .feature:hover { transform: translateY(-8px) scale(1.02); box-shadow: 0 18px 40px rgba(0,0,0,.28); background: rgba(255,255,255,.06); }
      .panel.facility .feature::after {
        content:""; position:absolute; inset:0;
        background: linear-gradient(120deg, transparent 20%, rgba(255,255,255,.18) 45%, transparent 70%);
        transform: translateX(-120%) skewX(-15deg); transition: transform .85s; pointer-events:none;
      }
      .panel.facility .feature:hover::after { transform: translateX(120%) skewX(-15deg); }

      .panel.facility .icon-wrap {
        width: 170px !important; height: 170px !important; margin: 0 auto 16px;
        display: grid; place-items: center; border: 0; background: transparent;
        transition: transform .35s cubic-bezier(.2,.8,.2,1), box-shadow .35s;
        position: relative;
      }
      .panel.facility .icon-wrap::before {
        content:""; position:absolute; inset:-6px; border-radius:20px;
        background: radial-gradient(120px 120px at 50% 40%, rgba(255,255,255,.22), transparent 60%);
        opacity:0; transition: opacity .45s;
      }
      .panel.facility .feature:hover .icon-wrap::before { opacity: 1; }
      .panel.facility .icon-wrap img { width: 100% !important; height: 100% !important; object-fit: contain; display: block; transition: transform .5s, filter .5s; }
      .panel.facility .feature:hover .icon-wrap img { transform: scale(1.06); filter: saturate(1.05) contrast(1.04); }

      @media (max-width: 640px){ .panel.facility .icon-wrap { width: 120px !important; height: 120px !important; } }
      .panel.facility .feature .label {
        font-size: .8rem; letter-spacing: .12rem; word-spacing: -0.22em;
        font-weight: 700; text-align: center; margin-top: 6px; color: #111; text-transform: uppercase;
        transition: letter-spacing .3s ease, opacity .3s ease;
      }
      .panel.facility .feature:hover .label { letter-spacing: .18em; opacity: .95; }
      .panel.facility .feature .desc { max-width: 260px; margin: 8px auto 0; font-size: .82rem; line-height: 1.5; color: rgba(0,0,0,.82); text-align: center; }
      @media (prefers-reduced-motion: reduce) {
        .panel.facility .feature,
        .panel.facility .icon-wrap,
        .panel.facility .feature.is-in,
        .panel.facility .label,
        .panel.facility .desc { transition: none !important; transform: none !important; opacity: 1 !important; }
      }

      /* ===== Carousel (multi-kartu) ===== */
      :root { --perView: 3; }
      @media (max-width: 1000px){ :root { --perView: 2; } }
      @media (max-width: 560px){ :root { --perView: 1; } }

      .carousel {
        position: relative; overflow: hidden; border-radius: 16px;
        padding: 6px 40px; background: transparent;
      }
      .track { display: flex; gap: 16px; transition: transform .4s ease; }
      .slide { flex: 0 0 calc((100% - (var(--perView) - 1) * 16px) / var(--perView)); }
      .slide img { display: block; width: 100%; height: 220px; object-fit: cover; border-radius: 16px; }
      @media (min-width: 760px){ .slide img { height: 260px; } }
      @media (min-width: 1100px){ .slide img { height: 300px; } }

      .arrow {
        position: absolute; top: 50%; transform: translateY(-50%);
        width: 36px; height: 36px; border: 0; border-radius: 50%;
        background: rgba(255,255,255,.94); color: #333; display: grid; place-items: center;
        cursor: pointer; box-shadow: 0 6px 20px rgba(0,0,0,.25);
      }
      .arrow.left { left: 8px; } .arrow.right { right: 8px; }
      .arrow:disabled { opacity: .4; cursor: not-allowed; }
      .arrow svg { width: 20px; height: 20px; }

      /* Lightbox anim */
      #facLightboxImg.lb-in { animation: facZoom .35s cubic-bezier(.22,.8,.2,1); }
      @keyframes facZoom { from{ transform: scale(.96); opacity:.2 } to{ transform: scale(1); opacity:1 } }

      /* ===== Aesthetic typography for about text ===== */
.about-section .text-content .tc-inner{
  max-width: 62ch;                 /* lebar baca nyaman */
  margin: 0 auto;
  padding: clamp(20px,2.4vw,32px);
  line-height: 1.75;
  font-family: "Playfair Display", serif;   /* serif elegan untuk body */
  font-size: clamp(15px, 1.05vw + .6rem, 18px);
  color: rgba(255,255,255,.92);
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  font-kerning: normal;
  font-variant-numeric: proportional-nums;
  font-feature-settings: "liga","clig","kern","onum","calt";
  hyphens: auto;
}

.about-section .text-content h6{
  font-family: "Playfair Display", serif;
  font-weight: 600;
  font-size: clamp(20px, 1.8vw + .6rem, 30px);
  letter-spacing: .02em;
  line-height: 1.2;
  color: #fff;
  margin: 0 0 .75rem;
  text-transform: none;            /* biar tidak kaku */
  /* underline halus saat animasi sudah ada */
}

.about-section .text-content p{
  margin: .4rem 0 .9rem;
  color: rgba(255,255,255,.9);
}

/* highlight yang rapi */
.about-section .text-content strong{
  font-weight: 700;
  color: #fff;
}
.about-section .text-content em{
  font-style: italic;
  opacity: .96;
}

/* variasi pertama kalimat biar “hidup” sedikit */
.about-section .text-content p:first-of-type{
  font-size: clamp(16px, 1.1vw + .6rem, 19px);
  line-height: 1.8;
}

/* versi mobile: nyaman dibaca */
@media (max-width: 768px){
  .about-section .text-content .tc-inner{
    max-width: 68ch;
    line-height: 1.8;
    font-size: 16px;
  }
  .about-section .text-content h6{
    font-size: 22px;
  }
}



    </style>
  </head>

  <body>
    <nav class="navbar">
      <div class="menu-area">
        <div class="menu-icon">☰ Menu</div>
        <div class="lang-switch"><a href="#">English</a></div>
      </div>
      <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Al Rasyid Villa" /></a>
      <div style="width: 190px"></div>
    </nav>

    <!-- ===== Hero ===== -->
    <section class="hero" id="hero">
      <img src="images/villa.jpg" class="active" alt="" />
      <img src="images/villa1.jpg" alt="" />
      <img src="images/villa2.jpg" alt="" />
      <img src="images/villa3.jpg" alt="" />
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
              <div class="icon-wrap"><img src="/images/karaoke-removebg-preview.png" alt="Karaoke" /></div>
              <div class="label">K A R A O K E</div>
              <p class="desc">Siapkan suara terbaik Anda. Fasilitas karaoke modern kami menjamin malam yang penuh tawa dan lagu.</p>
            </div>

            <div class="feature">
              <div class="icon-wrap"><img src="/images/swimm-removebg-preview.png" alt="Swimming Pool" /></div>
              <div class="label" aria-label="Swimming Pool">S W I M M I N G&nbsp;P O O L</div>
              <p class="desc">Bersantai dan segarkan diri di kolam renang eksklusif vila. Cocok untuk semua usia.</p>
            </div>

            <div class="feature">
              <div class="icon-wrap"><img src="/images/wifi-removebg-preview.png" alt="Wi-Fi" /></div>
              <div class="label">W I F I</div>
              <p class="desc">Koneksi internet nirkabel stabil dan cepat tersedia gratis untuk semua tamu.</p>
            </div>

            <div class="feature">
              <div class="icon-wrap"><img src="/images/airpanas-removebg-preview.png" alt="Air Panas" /></div>
              <div class="label">A I R &nbsp; P A N A S</div>
              <p class="desc">Nikmati suasana tenang bernuansa alami dengan berendam air panas.</p>
            </div>
          </div>
        </div>

        <!-- Carousel multi-kartu -->
        <div class="carousel" id="fac-carousel">
          <button class="arrow left" aria-label="Sebelumnya" data-dir="-1">
            <svg viewBox="0 0 24 24" fill="none"><path d="M15 6L9 12l6 6" stroke="currentColor" stroke-width="2" /></svg>
          </button>

          <div class="track">
            <div class="slide"><img src="/images/balkon.jpg" alt="Karaoke" /></div>
            <div class="slide"><img src="/images/kolam renang.jpg" alt="Kolam Renang" /></div>
            <div class="slide"><img src="/images/billiard.jpg" alt="Billiard" /></div>
            <div class="slide"><img src="/images/ruang karaoke.jpg" alt="Billiard" /></div>
            <div class="slide"><img src="/images/gazebo.jpg" alt="Billiard" /></div>
            <div class="slide"><img src="/images/kamar mandi.jpg" alt="Billiard" /></div>
            <div class="slide"><img src="/images/kamar mandi 2.jpg" alt="Billiard" /></div>
            <div class="slide"><img src="/images/kamar tidur 3.jpg" alt="Billiard" /></div>
            <div class="slide"><img src="/images/kamar tidur 4.jpg" alt="Billiard" /></div>
            <div class="slide"><img src="/images/kamar tidur 5.jpg" alt="Billiard" /></div>
            <div class="slide"><img src="/images/tempat kumpul.jpg" alt="Billiard" /></div>
            <div class="slide"><img src="/images/kitchen.jpg" alt="Billiard" /></div>
            <div class="slide"><img src="/images/ruangan.jpg" alt="Billiard" /></div>
          </div>

          <button class="arrow right" aria-label="Berikutnya" data-dir="1">
            <svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" /></svg>
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
            <img id="facLightboxImg" src="" alt="" class="img-fluid" style="max-height: 90vh" />
            <button class="btn btn-light rounded-circle position-absolute" id="lbPrev" aria-label="Sebelumnya" style="left: 16px">&#10094;</button>
            <button class="btn btn-light rounded-circle position-absolute" id="lbNext" aria-label="Berikutnya" style="right: 16px">&#10095;</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ===== Scripts ===== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Navbar shrink
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        navbar.classList.toggle("scrolled", window.scrollY > 80);
      });

      // Hero slideshow
      (function () {
        const slides = document.querySelectorAll(".hero img");
        let current = 0;
        function changeSlide() {
          slides[current].classList.remove("active");
          current = (current + 1) % slides.length;
          slides[current].classList.add("active");
        }
        setInterval(changeSlide, 4000);
      })();

      // Video modal autoplay
      (function () {
        const videoModal = document.getElementById("videoModal");
        const videoIframe = document.getElementById("villaVideo");
        const videoURL = "https://www.youtube.com/embed/Zg7E5t_1pXo";
        videoModal.addEventListener("show.bs.modal", () => { videoIframe.src = videoURL + "?autoplay=1"; });
        videoModal.addEventListener("hidden.bs.modal", () => { videoIframe.src = ""; });
      })();

      // Carousel multi-kartu + auto-play + reveal
      (function () {
        const root = document.documentElement;
        const wrap = document.getElementById("fac-carousel");
        const track = wrap.querySelector(".track");
        const slides = [...track.children];
        const btnL = wrap.querySelector(".arrow.left");
        const btnR = wrap.querySelector(".arrow.right");
        let index = 0;

        function perView() { return Math.max(1, parseInt(getComputedStyle(root).getPropertyValue("--perView")) || 1); }
        function gapPx() { const g = getComputedStyle(track).gap || "16px"; return parseFloat(g); }
        function slideW() { return slides[0].getBoundingClientRect().width; }
        function maxIndex() { return Math.max(0, slides.length - perView()); }
        function update() {
          const offset = index * (slideW() + gapPx());
          track.style.transform = `translateX(${-offset}px)`;
          btnL.disabled = index <= 0;
          btnR.disabled = index >= maxIndex();
        }
        function go(dir) { index = Math.min(Math.max(index + dir, 0), maxIndex()); update(); }

        btnL.addEventListener("click", () => { go(-1); pauseThenResume(); });
        btnR.addEventListener("click", () => { go(1);  pauseThenResume(); });
        window.addEventListener("resize", update);

        // Reveal on scroll
        const io = new IntersectionObserver((entries) => {
          entries.forEach((e) => { if (e.isIntersecting) { e.target.classList.add("in"); io.unobserve(e.target); } });
        }, { threshold: 0.15 });
        [...document.querySelectorAll(".feature, .slide")].forEach((el, i) => {
          el.classList.add("reveal");
          el.style.transitionDelay = i * 80 + "ms";
          io.observe(el);
        });

        // Auto-play
        let timer = null;
        function startAuto() {
          stopAuto();
          timer = setInterval(() => { if (index >= maxIndex()) index = -1; go(1); }, 3500);
        }
        function stopAuto() { if (timer) { clearInterval(timer); timer = null; } }
        function pauseThenResume() { stopAuto(); setTimeout(startAuto, 6000); }
        wrap.addEventListener("pointerenter", stopAuto);
        wrap.addEventListener("pointerleave", startAuto);

        update();
        startAuto();
      })();

      // Reveal fitur section-title dan feature (stagger)
      (function () {
        const items = document.querySelectorAll(".panel.facility .feature, .panel.facility .section-title");
        items.forEach((el, i) => el.style.setProperty("--i", i));
        const io = new IntersectionObserver((entries) => {
          entries.forEach((e) => { if (e.isIntersecting) { e.target.classList.add("is-in"); io.unobserve(e.target); } });
        }, { root: null, threshold: 0.2 });
        items.forEach((el) => io.observe(el));
      })();

      // Lightbox foto
      (function () {
        const root = document.getElementById("fac-carousel");
        if (!root) return;

        const track = root.querySelector(".track");
        const imgs = Array.from(track.querySelectorAll(".slide img"));

        const modalEl = document.getElementById("facLightbox");
        const modalImg = document.getElementById("facLightboxImg");
        const btnPrev = document.getElementById("lbPrev");
        const btnNext = document.getElementById("lbNext");

        const bsModal = new bootstrap.Modal(modalEl);
        let idx = 0;

        function show(i) {
          idx = (i + imgs.length) % imgs.length;
          const it = imgs[idx];
          modalImg.classList.remove("lb-in");
          modalImg.src = it.src;
          modalImg.alt = it.alt || "";
          bsModal.show();
        }

        track.addEventListener("click", (e) => {
          const img = e.target.closest(".slide img");
          if (!img) return;
          const i = imgs.indexOf(img);
          if (i >= 0) show(i);
        });

        btnPrev.addEventListener("click", () => show(idx - 1));
        btnNext.addEventListener("click", () => show(idx + 1));

        modalImg.addEventListener("load", () => modalImg.classList.add("lb-in"));

        modalEl.addEventListener("shown.bs.modal", () => modalEl.focus());
        modalEl.addEventListener("keydown", (e) => {
          if (e.key === "ArrowLeft") show(idx - 1);
          if (e.key === "ArrowRight") show(idx + 1);
        });
      })();
    </script>

    <script>
  // Reveal panel bening saat masuk viewport
  (function(){
    const el = document.querySelector('.about-section .text-content');
    if(!el) return;
    const io = new IntersectionObserver((es)=>{
      es.forEach(e=>{
        if(e.isIntersecting){
          el.classList.add('is-in');
          io.unobserve(el);
        }
      });
    },{threshold:.2});
    io.observe(el);
  })();
</script>

  </body>
</html>
