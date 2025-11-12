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

    /* Section Review */
 body {
  font-family: 'Playfair Display', serif;
  margin: 0;
  padding: 0;
 }

.review-wrapper {
  background-color: #f7f1e8;
  text-align: center;
  padding: 0px 0;
}

.stars {
  color: #FFD700;
  font-size: 50px;
  margin-bottom: 20px;
  letter-spacing: 3px;
}

.review-text {
  font-size: 30px;
  color: #333;
  margin: 20px auto;
  line-height: 1.6;
  width: 70%;
}

.author {
  font-weight: bold;
  margin-bottom: 40px;
  color: #555;
}

/* ======= FOTO GALLERY (ABSTRAK & RAPI) ======= */
.photo-layout {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-auto-rows: 150px;
  gap: 18px;
  max-width: 1100px;
  margin: 40px auto;
  justify-content: center;
}

.photo-layout img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 14px;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

/* Efek hover */
.photo-layout img:hover {
  transform: scale(1.05) rotate(0deg);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
}

/* Pola grid acak tapi simetris */
.photo-layout img:nth-child(1) {
  grid-column: span 2;
  grid-row: span 2;
  transform: rotate(-1.5deg);
}
.photo-layout img:nth-child(2) {
  grid-column: span 2;
  transform: rotate(2deg);
}
.photo-layout img:nth-child(3) {
  grid-row: span 2;
  transform: rotate(-2deg);
}
.photo-layout img:nth-child(4) {
  grid-column: span 2;
  transform: rotate(1.5deg);
}
.photo-layout img:nth-child(5) {
  transform: rotate(-1.2deg);
}

/* Responsif Tablet */
@media (max-width: 992px) {
  .photo-layout {
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: 140px;
    gap: 14px;
  }
}

/* Responsif HP */
@media (max-width: 600px) {
  .photo-layout {
    grid-template-columns: repeat(2, 1fr);
    grid-auto-rows: 130px;
    gap: 10px;
  }

  .photo-layout img {
    transform: rotate(0deg);
  }
}

.video-section {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 60px;
  padding: 80px 0;
  background-color: #f7f1e8;
  flex-wrap: wrap; /* biar responsif */
}

/* KOTAK TEKS */
.video-left {
  width: 400px;
  background-color: #fff;
  border-radius: 15px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
  padding: 40px 25px;
  text-align: center;
  z-index: 2;
}

/* VIDEO THUMBNAIL */
.video-right {
  width: 500px;
  height: 300px;
  background: url('c:\Users\melynda\Downloads\14.mp4') center/cover no-repeat;
  border-radius: 15px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

/* ICON PLAY */
.video-overlay i {
  font-size: 70px;
  color: rgba(255, 255, 255, 0.8);
  transition: 0.3s ease;
}

.video-right:hover .video-overlay i {
  color: #fff;
  transform: scale(1.1);
}

/* TOMBOL */
.btn-main {
  background-color: #4f646c;
  color: #fff;
  padding: 10px 25px;
  border-radius: 25px;
  text-decoration: none;
  font-weight: 500;
  display: inline-block;
  margin-top: 15px;
  transition: 0.3s;
}

.btn-main:hover {
  background-color: #394952;
}


   /* ===== RESERVATION SECTION ===== */
body.booking {
  font-family: 'Playfair Display', serif;
  margin: 0;
  padding: 0;
  background: #000;
  color: #fff;
}

/* ====== BAGIAN UTAMA ====== */
.reservation {
  background: url('/images/halaman.jpg') no-repeat center center/cover; /* pastikan file di public/images/ */
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}

.reservation::after {
  content: '';
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0, 0, 0, 0.45);
}

/* ====== KONTEN DI TENGAH ====== */
.overlay-reservation{
  position: relative;
  z-index: 2;
  text-align: center;
  width: 100%;
  padding: 0 20px;
  color: #fff;
}

.reservation-content h1 {
  font-size: 28px;
  font-weight: 400;
  margin-bottom: 40px;
  letter-spacing: 1px;
}

/* ====== FORM ====== */
.booking-form {
  display: flex;
  justify-content: center;
  align-items: flex-end;
  flex-wrap: wrap;
  gap: 20px;
  margin-bottom: 25px;
}

.form-group {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  text-align: left;
}

.form-group label {
  font-size: 12px;
  color: #fff;
  margin-bottom: 8px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.booking-form input {
  padding: 12px 16px;
  font-size: 16px;
  width: 200px;
  border: none;
  outline: none;
  border-radius: 4px;
  background: #fff;
  color: #000;
  box-shadow: 0 3px 5px rgba(0,0,0,0.1);
}

.booking-form button {
  padding: 14px 45px;
  background: #b19874;
  color: #fff;
  border: none;
  font-size: 15px;
  cursor: pointer;
  text-transform: uppercase;
  letter-spacing: 1px;
  border-radius: 4px;
  transition: 0.3s ease;
}

.booking-form button:hover {
  background: #a28763;
  transform: translateY(-2px);
}

/* ====== TEXT DI BAWAH FORM ====== */
.tagline {
  font-size: 14px;
  color: #fff;
  letter-spacing: 1px;
  margin-top: 10px;
}

/* ====== EFEK BLUR DI BAWAH ====== */
.blur-bottom {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 120px;
  background: rgba(255, 255, 255, 0.08);
  -webkit-backdrop-filter: blur(8px); /* ✅ prefiks untuk dukungan Safari/Chrome */
  backdrop-filter: blur(8px);         /* ✅ properti standar */
  border-top: 1px solid rgba(255, 255, 255, 0.2);
  z-index: 1;
}

/* ====== RESPONSIVE ====== */
@media (max-width: 992px) {
  .booking-form {
    flex-direction: column;
    align-items: center;
  }

  .form-group input,
  .booking-form button {
    width: 250px;
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
  </div>

  <!-- Gallery Section -->
  <div class="review-wrapper">
  <div class="stars">★★★★★</div>

  <p class="review-text">
    Absolute perfection.<br>The service, the decor, the villa, the view, the staff—the everything.<br>
    It truly feels like you’ve moved to your own private estate.
  </p>
  <p class="author">ANNA M. — Google Review</p>

  <div class="photo-layout">
  <img src="images/foto1.jpg" alt="">
  <img src="images/foto2.jpg" alt="">
  <img src="images/foto3.jpg" alt="">
  <img src="images/foto4.jpg" alt="">
  <img src="images/foto5.jpg" alt="">
</div>

<div class="video-section">
  <div class="video-left">
    <h3>IS SUPREME</h3>
    <p>
      When it comes to our guests, no request <br> is too big and no detail is too small.
    </p>
    <a href="#reservation" class="btn-main mt-3">MEMBER</a>
  </div>

  <div class="video-right" data-bs-toggle="modal" data-bs-target="#reviewVideoModal">
    <div class="video-overlay">
      <i class="bi bi-play-fill"></i>
    </div>
  </div>
</div>

<!-- Modal Review Video -->
<div class="modal fade" id="reviewVideoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="ratio ratio-16x9">
        <iframe id="reviewVideo" src="" title="Review Video" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

  <!-- Reservation Section -->
  <section class="reservation">
    <div class="overlay-reservation">
      <div class="reservation-content">
        <h1>FIND YOUR CALM AT VILLA AL RASYID</h1>

        <form class="booking-form">
          <div class="form-group">
            <label>NUMBER OF NIGHTS</label>
            <input type="text" placeholder="DD/MM/YYYY">
          </div>
          <div class="form-group">
            <label>ADULTS</label>
            <input type="number" placeholder="1" min="1">
          </div>
          <div class="form-group">
            <label>CHILDREN</label>
            <input type="number" placeholder="1" min="0">
          </div>
          
          <button type="submit">SEND</button>
          </form>
        <p class="tagline">UNLOCK THE BEST RATES & EXCLUSIVE PERKS HERE</p>
      </div>
    </div>
  </section>

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
          <li><a href="{{ url('/our_blog') }}">Our Blog</a></li>
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
    <a href="{{ url('/kebijakan_privasi') }}">Kebijakan Privasi</a>
     <a href="{{ url('/persyaratan_pengguna') }}">Persyaratan Pengguna</a>
  </div>
</div>

      </div>
    </div>
  </footer>

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

    // Simple subscribe alert
    document.getElementById('subscribeForm').addEventListener('submit', function(e){
      e.preventDefault();
      alert('Terima kasih sudah berlangganan informasi dari Villa Al-Rasyid!');
      this.reset();
    });
  </script>
</body>
</html>
