<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Al Rasyid Villa</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"/>

  <!-- Icons + Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    :root { --perView: 3; }

    * { box-sizing: border-box; }
    body { font-family: "Poppins", sans-serif; margin: 0; padding: 0; scroll-behavior: smooth; background-color: #f5f3ee; }
    a { text-decoration: none; }

    /* ===== NAVBAR ===== */
    .navbar{
      position:fixed;top:0;left:0;width:100%;
      padding:10px 18px;z-index:1000;display:flex;align-items:center;gap:16px;
      color:#fff;background:linear-gradient(to bottom,rgba(0,0,0,.9),rgba(0,0,0,.25));
      transition:background .3s ease,box-shadow .3s ease,padding .3s ease
    }
    .navbar.scrolled{background:rgba(0,0,0,.9);box-shadow:0 8px 20px rgba(0,0,0,.5);padding:6px 18px;backdrop-filter:blur(12px)}
    .menu-area{display:flex;align-items:center}
    .menu-icon{
      background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.6);
      color:#fff;border-radius:999px;padding:4px 10px;cursor:pointer;font-size:18px;
      display:flex;align-items:center;gap:6px
    }
    .menu-icon span{font-size:11px;letter-spacing:.18em;text-transform:uppercase}

    .navbar-brand{ margin:0 auto 0 8px;display:flex;align-items:center;gap:10px;color:#fff!important }
    .navbar-brand img{ height:38px;width:auto;display:block;filter:drop-shadow(0 3px 8px rgba(0,0,0,.35));transition:height .25s ease, transform .25s ease }
    .navbar.scrolled .navbar-brand img{height:32px}
    @media(min-width:992px){ .navbar-brand img{height:44px}.navbar.scrolled .navbar-brand img{height:36px} }
    @media(max-width:575.98px){ .navbar{padding-inline:14px} .navbar-brand img{height:34px} }

    .navbar-right{
      margin-left:auto;display:grid;grid-auto-flow:column;align-items:center;gap:10px;
      color:#fff;background:rgba(255,255,255,.08);padding:8px 12px;border-radius:999px;
      border:1px solid rgba(255,255,255,.28);backdrop-filter:blur(10px)
    }
    .navbar-right i{font-size:18px;filter:drop-shadow(0 2px 6px rgba(0,0,0,.35))}
    .navbar-right .right-text{display:grid;line-height:1.1}
    .navbar-right .right-text strong{font-size:13px;letter-spacing:.02em}
    .navbar-right .right-text small{font-size:10.5px;opacity:.9;letter-spacing:.08em;text-transform:uppercase}

    .nav-links{
      position:fixed;inset:0;background:rgba(0,0,0,.94);display:flex;flex-direction:column;
      justify-content:center;align-items:center;gap:18px;opacity:0;pointer-events:none;
      transition:opacity .3s ease;z-index:900
    }
    .navbar.nav-open .nav-links{opacity:1;pointer-events:auto}
    .nav-links a{color:#fff;font-size:13px;letter-spacing:.30em;text-transform:uppercase;padding:6px 0;text-align:center}
    .nav-links a:hover{text-decoration:underline}
    @media(min-width:992px){
      .menu-area{display:none}
      .nav-links{position:static;opacity:1!important;pointer-events:auto!important;background:transparent;flex-direction:row;gap:24px;margin-left:18px}
      .nav-links a{font-size:11px;letter-spacing:.22em}
    }
    @media(max-width:768px){ .navbar-right .right-text small{display:none} }

    /* ===== Hero ===== */
    .hero{position:relative;height:100vh;overflow:hidden;margin-top:66px}
    .hero img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 1s ease}
    .hero img.active{opacity:1}
    .hero .overlay{
      position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,.75),transparent 50%);
      display:flex;align-items:flex-end;justify-content:center;padding-bottom:120px;text-align:center;color:#fff
    }
    .hero .overlay h1{font-family:"Playfair Display",serif;font-size:clamp(32px,4vw,48px);letter-spacing:.15em;text-transform:uppercase}
    .hero .overlay p{margin-top:6px;letter-spacing:.3em;font-size:13px;text-transform:uppercase}
    .hero .btn-availability{
      position:absolute;bottom:40px;left:50%;transform:translateX(-50%);padding:10px 30px;border-radius:999px;
      background:#fff;color:#333;font-weight:500;letter-spacing:.12em;text-transform:uppercase;font-size:12px
    }
    .hero .btn-availability:hover{transform:translateX(-50%) translateY(-2px);box-shadow:0 8px 20px rgba(0,0,0,.4)}

    /* ===== ABOUT ===== */
    .about-section{
      position:relative;min-height:100dvh;background:url("images/villa.jpg") center/cover no-repeat fixed;
      display:flex;align-items:center;padding:120px 0 80px;overflow:hidden;color:#fff
    }
    .about-section::before{content:"";position:absolute;inset:0;background:inherit;filter:blur(14px) brightness(.55);transform:scale(1.05);z-index:0}
    .about-section::after{content:"";position:absolute;inset:0;background:
      radial-gradient(circle at top left, rgba(255,255,255,.18), transparent 55%),
      linear-gradient(to bottom right, rgba(0,0,0,.4), rgba(0,0,0,.75));z-index:1}
    .about-section .container{position:relative;z-index:2}
    .video-box{position:relative;background:rgba(255,255,255,.12);border-radius:24px;overflow:hidden;width:100%;
      box-shadow:0 18px 45px rgba(0,0,0,.45);border:1px solid rgba(255,255,255,.22);backdrop-filter:blur(18px);min-height:380px;display:flex;align-items:center;justify-content:center;cursor:pointer}
    .video-box video{width:100%;height:100%;object-fit:cover;display:block;opacity:.9}
    .video-overlay{position:absolute;inset:0;display:grid;place-items:center;text-align:center}
    .video-overlay i{font-size:84px;color:rgba(255,255,255,.95);filter:drop-shadow(0 8px 22px rgba(0,0,0,.55))}
    .text-content{background:rgba(255,255,255,.12);border-radius:24px;padding:28px 30px;color:#fff;
      box-shadow:0 18px 45px rgba(0,0,0,.45);backdrop-filter:blur(18px);border:1px solid rgba(255,255,255,.22)}
    .text-content h6{font-size:13px;letter-spacing:.25em;text-transform:uppercase;opacity:.9;margin-bottom:14px}
    .text-content h2{font-size:28px;margin-bottom:18px;font-weight:700}
    .text-content p{line-height:1.8;font-size:15px;color:rgba(255,255,255,.92);margin-bottom:12px}
    @media(max-width:991.98px){ .about-section{padding:100px 0 60px} }
    @media(max-width:767.98px){ .text-content{padding:22px 18px} .text-content h2{font-size:22px} }

    /* ===== Facility ===== */
    .facility-bg{background:#8b725c;padding:72px 0;color:#111}
    @media(max-width:768px){ .facility-bg{padding:48px 0} }
    .panel.facility .section-title{
      font-family:"Playfair Display",serif;font-weight:600;font-size:clamp(28px,3.2vw,44px);
      line-height:1.15;letter-spacing:.02em;text-align:center;margin:0 auto 28px;width:100%;
      opacity:0;transform:translateY(12px) scale(.98);filter:blur(1px);display:inline-block;
      background:linear-gradient(currentColor,currentColor) left bottom/0 2px no-repeat;padding-bottom:6px
    }
    .panel.facility .section-title.is-in{animation:facTitleIn .6s cubic-bezier(.22,.8,.2,1) forwards}
    @keyframes facTitleIn{0%{opacity:0;transform:translateY(12px) scale(.98);filter:blur(1px);background-size:0 2px}100%{opacity:1;transform:none;filter:blur(0);background-size:100% 2px}}
    .panel.facility .features{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:26px;align-items:start;margin-bottom:56px}
    @media(max-width:1000px){ .panel.facility .features{grid-template-columns:repeat(2,1fr)} }
    @media(max-width:560px){ .panel.facility .features{grid-template-columns:1fr} }
    .panel.facility .feature{position:relative;border-radius:18px;padding:14px 12px;background:rgba(255,255,255,.08);transition:transform .45s cubic-bezier(.22,.8,.2,1), box-shadow .45s, background .45s;opacity:0;transform:translateY(18px)}
    .panel.facility .feature.is-in{opacity:1;transform:none}
    .panel.facility .feature:hover{transform:translateY(-8px) scale(1.02);box-shadow:0 18px 40px rgba(0,0,0,.28);background:rgba(255,255,255,.15)}
    .panel.facility .icon-wrap{width:170px;height:170px;margin:0 auto 16px;display:grid;place-items:center}
    .panel.facility .icon-wrap img{width:100%;height:100%;object-fit:contain;display:block}
    @media(max-width:640px){ .panel.facility .icon-wrap{width:120px;height:120px} }
    .panel.facility .feature .label{font-size:.8rem;letter-spacing:.12rem;font-weight:700;text-align:center;margin-top:6px;color:#111;text-transform:uppercase}
    .panel.facility .feature .desc{max-width:260px;margin:8px auto 0;font-size:.82rem;line-height:1.5;color:rgba(0,0,0,.82);text-align:center}

    /* Carousel fasilitas */
    @media(max-width:1000px){ :root{--perView:2} }
    @media(max-width:560px){ :root{--perView:1} }
    .carousel{position:relative;overflow:hidden;border-radius:16px;padding:6px 40px}
    .track{display:flex;gap:16px;transition:transform .4s ease}
    .slide{flex:0 0 calc((100% - (var(--perView) - 1)*16px)/var(--perView));cursor:pointer}
    .slide img{display:block;width:100%;height:220px;object-fit:cover;border-radius:16px}
    @media(min-width:760px){ .slide img{height:260px} }
    @media(min-width:1100px){ .slide img{height:300px} }
    .arrow{position:absolute;top:50%;transform:translateY(-50%);width:36px;height:36px;border:0;border-radius:50%;background:#fff;color:#333;display:grid;place-items:center;cursor:pointer;box-shadow:0 6px 20px rgba(0,0,0,.25)}
    .arrow.left{left:8px}.arrow.right{right:8px}.arrow:disabled{opacity:.4;cursor:not-allowed}
    #facLightboxImg.lb-in{animation:facZoom .35s cubic-bezier(.22,.8,.2,1)}
    @keyframes facZoom{from{transform:scale(.96);opacity:.2}to{transform:scale(1);opacity:1}}

    /* ===== Review / Gallery ===== */
    .review-section{background:#f7f1e8;padding:80px 16px 70px}
    .review-wrapper{max-width:1120px;margin:0 auto;text-align:center;padding:48px 32px 40px;border-radius:26px;background:linear-gradient(135deg,#fffaf5,#f2e1c9);box-shadow:0 18px 40px rgba(0,0,0,.12);position:relative;overflow:hidden}
    .badge-review{display:inline-block;font-size:11px;letter-spacing:.22em;text-transform:uppercase;color:#7c6a54;padding:4px 14px;border-radius:999px;border:1px solid rgba(124,106,84,.25);background:rgba(255,255,255,.7);margin-bottom:10px}
    .stars{color:#ffd700;font-size:38px;margin-bottom:12px;letter-spacing:3px}
    .review-text{font-family:"Playfair Display",serif;font-size:22px;color:#333;margin:8px auto 16px;line-height:1.7;max-width:720px}
    .author{font-weight:600;margin-bottom:30px;color:#6b5b48;font-size:13px;letter-spacing:.15em;text-transform:uppercase}
    .photo-layout{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));grid-auto-rows:170px;gap:16px;max-width:1000px;margin:10px auto 0}
    .photo-layout img{width:100%;height:100%;object-fit:cover;border-radius:18px;display:block;transition:transform .35s, box-shadow .35s, filter .35s}
    .photo-layout img:nth-child(1){grid-column:span 2;grid-row:span 2}
    .photo-layout img:nth-child(2){grid-column:span 2}
    .photo-layout img:nth-child(3){grid-row:span 2}
    .photo-layout img:nth-child(5){grid-column:span 2}
    .photo-layout img:hover{transform:translateY(-4px) scale(1.03);box-shadow:0 10px 24px rgba(0,0,0,.25);filter:saturate(1.08) contrast(1.06)}

    /* ===== OUR BLOG (Aesthetic) ===== */
    .blog{background:#f6efe4;padding:80px 16px}
    .blog .lead-top{display:flex;gap:18px;justify-content:center;align-items:center;margin-bottom:34px;color:#6a5f51;letter-spacing:.18em;text-transform:uppercase;font-size:12px}
    .blog h2{font-family:"Playfair Display",serif;text-align:center;margin:0 0 28px;color:#40382f;font-size:clamp(28px,3.2vw,40px);letter-spacing:.02em}
    .blog-grid{max-width:1120px;margin:0 auto;display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px}
    @media(max-width:900px){ .blog-grid{grid-template-columns:repeat(2,1fr)}}
    @media(max-width:560px){ .blog-grid{grid-template-columns:1fr}}
    .blog-card{position:relative;overflow:hidden;border-radius:18px;background:#fff;box-shadow:0 12px 28px rgba(0,0,0,.08);display:flex;flex-direction:column}
    .blog-card .thumb{position:relative;height:220px;overflow:hidden}
    .blog-card .thumb img{width:100%;height:100%;object-fit:cover;transition:transform .6s ease}
    .blog-card:hover .thumb img{transform:scale(1.06)}
    .blog-card .tag{position:absolute;left:12px;bottom:12px;background:rgba(0,0,0,.65);color:#fff;border-radius:999px;padding:6px 12px;font-size:11px;letter-spacing:.12em;text-transform:uppercase}
    .blog-card .content{padding:16px 16px 18px}
    .blog-card h3{font-family:"Playfair Display",serif;font-size:20px;margin:0 0 6px;color:#2f2721}
    .blog-card p{font-size:13.5px;color:#5c5347;margin:0 0 10px}
    .blog-card .meta{display:flex;justify-content:space-between;align-items:center;font-size:12px;color:#8a7d6c}
    .blog-card .meta a{color:#8a7d6c}
    .blog-card .meta a:hover{color:#5a4f43;text-decoration:underline}

    /* ===== Reservation ===== */
    .reservation{background-image:url("/images/villa.jpg");background-repeat:no-repeat;background-size:cover;background-position:left center;min-height:70vh;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
    .reservation::after{content:"";position:absolute;inset:0;background:rgba(0,0,0,.42)}
    .overlay-reservation{position:relative;z-index:2;width:100%;padding:40px 20px;text-align:center;color:#fff}
    .reservation-content{max-width:620px;margin:0 auto}
    .reservation-content h1{font-family:"Playfair Display",serif;font-size:34px;font-weight:400;letter-spacing:3px;text-transform:uppercase;margin-bottom:28px}
    .wa-cta{display:inline-flex;align-items:center;gap:10px;padding:12px 38px;border-radius:999px;background:#fff;color:#25d366;font-size:16px;font-weight:500;box-shadow:0 10px 25px rgba(0,0,0,.35)}
    .wa-cta i{font-size:20px}
    .wa-cta:hover{transform:translateY(-2px);box-shadow:0 14px 32px rgba(0,0,0,.45);background:#f7f7f7}
    .tagline{margin-top:18px;font-size:13px;letter-spacing:2px;text-transform:uppercase;color:#f5f5f5}

    /* ===== Footer ===== */
    footer{background-color:#8b7a65;color:#fff;padding:60px 80px 30px;font-family:"Playfair Display",serif}
    .footer-container{display:grid;grid-template-columns:1.5fr 1fr 1fr 1fr;gap:40px;align-items:flex-start}
    .footer-logo img{width:160px;margin-bottom:15px}
    .social-icons a{color:#fff;font-size:20px;margin-right:15px;transition:.3s}
    .social-icons a:hover{color:#e0d5c3}
    .footer-col h4{font-weight:600;font-size:15px;letter-spacing:1px;margin-bottom:20px}
    .footer-col ul{list-style:none;padding:0}
    .footer-col ul li{margin-bottom:10px}
    .footer-col ul li a{color:#f2f2f2;font-size:14px}
    .footer-map{width:100%;border:0;border-radius:12px;min-height:200px;box-shadow:0 8px 18px rgba(0,0,0,.18);overflow:hidden}
    .footer-subscribe{grid-column:span 4;margin-top:40px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;border-top:1px solid rgba(255,255,255,.2);padding-top:30px}
    .footer-subscribe input{background:transparent;border:none;border-bottom:1px solid #fff;padding:5px 0;color:#fff;width:150px;font-size:13px}
    .footer-subscribe button{background:#7a6a57;border:none;color:#fff;padding:8px 25px;border-radius:2px;cursor:pointer;font-weight:600;font-size:13px}
    .footer-bottom{margin-top:30px;border-top:1px solid rgba(255,255,255,.2);display:flex;justify-content:space-between;align-items:center;padding-top:20px;font-size:12px;flex-wrap:wrap}
    .footer-bottom a{color:#fff;margin-left:25px;font-size:12px}
    @media(max-width:800px){
      footer{padding:40px 24px 24px}
      .footer-container{grid-template-columns:1fr 1fr;gap:30px}
      .footer-subscribe{flex-direction:column;align-items:flex-start}
      .footer-subscribe form{justify-content:flex-start}
      .footer-bottom{flex-direction:column;align-items:flex-start;gap:10px}
    }

    /* ===== Aesthetic FAQ Modal ===== */
    .faq-title{font-family:"Playfair Display",serif;letter-spacing:.12em;text-transform:uppercase;color:#4e453b;margin:0;text-align:center}
    .modal-faq .modal-content{background:linear-gradient(180deg,#fbf7f1,#efe2cf);border:0;border-radius:22px;box-shadow:0 24px 60px rgba(0,0,0,.25)}
    .modal-faq .modal-header{border:0;padding:28px 28px 0}
    .modal-faq .modal-body{padding:6px 22px 26px}
    .accordion-button{background:transparent !important;font-weight:600;color:#4e453b;letter-spacing:.02em}
    .accordion-button:focus{box-shadow:none}
    .accordion-item{border:0;border-bottom:1px solid rgba(0,0,0,.08);background:transparent}
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="menu-area"><button class="menu-icon" aria-label="Open menu">☰ <span>MENU</span></button></div>
    <a class="navbar-brand" href="#hero" aria-label="Al Rasyid Villa">
      <img src="images/logo_2-removebg-preview(1).png" alt="Logo Villa Al-Rasyid"/>
    </a>
    <a class="navbar-right" href="https://www.google.com/maps?q=Villa+Al+Rasyid,+Puncak+Bogor" target="_blank" rel="noopener" aria-label="Buka lokasi di Google Maps">
      <i class="bi bi-geo-alt-fill"></i>
      <div class="right-text"><strong>Puncak, Bogor</strong><small>Jawa Barat, Indonesia</small></div>
    </a>
    <div class="nav-links">
      <a href="#hero">Home</a>
      <a href="#about">About</a>
      <a href="#facility">Facility</a>
      <a href="#review-section">Review</a>
      <a href="#our-blog">Our Blog</a>
      <a href="#reservasi">Reservasi</a>
    </div>
  </nav>

  <!-- ===== Hero ===== -->
  <section class="hero" id="hero">
    <img src="images/villa.jpg" class="active" alt="Villa view"/>
    <img src="images/villa1.jpg" alt="Villa view 1"/>
    <img src="images/villa2.jpg" alt="Villa view 2"/>
    <img src="images/villa3.jpg" alt="Villa view 3"/>
    <div class="overlay"><div class="hero-content text-center"><h1>Serenity in the Highlands</h1><p>AL RASYID PUNCAK</p></div></div>
    <a href="#reservasi" class="btn-availability">Check Availability</a>
  </section>

  <!-- ===== About ===== -->
  <section class="about-section" id="about">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <div class="video-box" data-bs-toggle="modal" data-bs-target="#videoModal">
            <video src="video/video1.mp4" muted playsinline loop poster="images/video-thumb.jpg"></video>
            <div class="video-overlay"><i class="bi bi-play-fill"></i></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="text-content">
            <h6>LIBURAN TENANG DENGAN VIEW GUNUNG &amp; CITY LIGHT</h6>
            <h2>Villa Al Rasyid – Hidden Gem di Puncak Bogor</h2>
            <p>Sedang mencari tempat liburan dengan suasana tenang, udara sejuk, dan pemandangan yang menakjubkan? Villa Al Rasyid siap menjadi destinasi sempurna untuk Anda dan keluarga.</p>
            <p>Dikelilingi panorama alam yang asri, nikmati pegunungan hijau di siang hari dan gemerlap city light di malam hari.</p>
            <p>Fasilitas modern: kolam renang pribadi, dapur lengkap, ruang keluarga luas — hangat, nyaman, berkesan.</p>
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
          <video id="villaVideo" controls playsinline>
            <source src="video/video1.mp4" type="video/mp4"/>
            Browser Anda tidak mendukung pemutaran video HTML5.
          </video>
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
          <div class="feature"><div class="icon-wrap"><img src="/images/karaoke-removebg-preview.png" alt="Karaoke"/></div><div class="label">K A R A O K E</div><p class="desc">Siapkan suara terbaik Anda. Fasilitas karaoke modern kami menjamin malam yang penuh tawa dan lagu.</p></div>
          <div class="feature"><div class="icon-wrap"><img src="/images/swimm-removebg-preview.png" alt="Swimming Pool"/></div><div class="label">S W I M M I N G&nbsp;P O O L</div><p class="desc">Bersantai dan segarkan diri di kolam renang eksklusif vila. Cocok untuk semua usia.</p></div>
          <div class="feature"><div class="icon-wrap"><img src="/images/wifi-removebg-preview.png" alt="Wi-Fi"/></div><div class="label">W I F I</div><p class="desc">Koneksi internet nirkabel stabil dan cepat tersedia gratis untuk semua tamu.</p></div>
          <div class="feature"><div class="icon-wrap"><img src="/images/airpanas-removebg-preview.png" alt="Air Panas"/></div><div class="label">A I R &nbsp; P A N A S</div><p class="desc">Nikmati suasana tenang bernuansa alami dengan berendam air panas.</p></div>
        </div>
      </div>

      <!-- Carousel multi-kartu -->
      <div class="carousel" id="fac-carousel">
        <button class="arrow left" aria-label="Sebelumnya" data-dir="-1"><svg viewBox="0 0 24 24" fill="none"><path d="M15 6L9 12l6 6" stroke="currentColor" stroke-width="2"/></svg></button>
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
        <button class="arrow right" aria-label="Berikutnya" data-dir="1"><svg viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2"/></svg></button>
      </div>
    </div>
  </section>

  <!-- Lightbox Foto -->
  <div class="modal fade" id="facLightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content bg-black bg-opacity-75 border-0">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body p-0 d-flex align-items-center justify-content-center position-relative">
          <img id="facLightboxImg" src="" alt="" class="img-fluid" style="max-height: 90vh"/>
          <button class="btn btn-light rounded-circle position-absolute" id="lbPrev" aria-label="Sebelumnya" style="left: 16px">&#10094;</button>
          <button class="btn btn-light rounded-circle position-absolute" id="lbNext" aria-label="Berikutnya" style="right: 16px">&#10095;</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Gallery & Review -->
  <section id="review-section" class="review-section">
    <div class="review-wrapper">
      <div class="review-header">
        <span class="badge-review">Guest Review</span>
        <div class="stars">★★★★★</div>
        <p class="review-text">Absolute perfection.<br/>The service, the decor, the villa, the view, the staff—the everything.<br/>It truly feels like you’ve moved to your own private estate.</p>
        <p class="author">ANNA M. — Google Review</p>
      </div>
      <div class="photo-layout">
        <img src="/images/review one.jpg" alt="Villa Al Rasyid"/>
        <img src="/images/review two.jpg" alt="Villa Al Rasyid"/>
        <img src="/images/review three.jpg" alt="Villa Al Rasyid"/>
        <img src="/images/review four.jpg" alt="Villa Al Rasyid"/>
        <img src="/images/review five.jpg" alt="Villa Al Rasyid"/>
        <img src="/images/review six.jpg" alt="Villa Al Rasyid"/>
      </div>
    </div>
  </section>

  <!-- ===== OUR BLOG ===== -->
  <section id="our-blog" class="blog">
    <div class="lead-top">ALL <span style="opacity:.5">—</span> explore puncak bogor</div>
    <h2>Stories Around Villa Al Rasyid</h2>

    <div class="blog-grid">
      <!-- Card 1 -->
      <article class="blog-card">
        <div class="thumb">
          <img src="/images/blog/kampung-rimba.jpg" alt="Kampung Rimba" />
          <span class="tag">Nature</span>
        </div>
        <div class="content">
          <h3>Kampung Rimba: Cabin Hidden Gem</h3>
          <p>Suasana hutan pinus yang sejuk, cocok untuk short escape & foto-foto manis sebelum ke villa.</p>
          <div class="meta">
            <span>by Admin</span>
            <a href="#">Read more</a>
          </div>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="blog-card">
        <div class="thumb">
          <img src="/images/blog/teh-gunung.jpg" alt="Perkebunan Teh Puncak" />
          <span class="tag">Outdoor</span>
        </div>
        <div class="content">
          <h3>Jalur Santai di Perkebunan Teh</h3>
          <p>Running tipis atau jalan pagi di hamparan teh dekat Villa Al Rasyid — segar & menenangkan.</p>
          <div class="meta">
            <span>5 min read</span>
            <a href="#">Read more</a>
          </div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="blog-card">
        <div class="thumb">
          <img src="/images/blog/nasi-timbel.jpg" alt="Kuliner Puncak" />
          <span class="tag">Food</span>
        </div>
        <div class="content">
          <h3>Nasi Timbel & Kuliner Khas Puncak</h3>
          <p>Pilihan kuliner favorit keluarga: nasi timbel, sate maranggi, susu murni, dan kopi hangat.</p>
          <div class="meta">
            <span>Guide</span>
            <a href="#">Read more</a>
          </div>
        </div>
      </article>
    </div>
  </section>

  <!-- Reservation -->
  <section class="reservation" id="reservasi">
    <div class="overlay-reservation">
      <div class="reservation-content">
        <h1>HUBUNGI KAMI</h1>
        <a href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20melihat%20katalog%20Villa%20Al%20Rasyid" class="wa-cta" target="_blank" rel="noopener">
          <span>Katalog Via WhatsApp</span><i class="bi bi-whatsapp"></i>
        </a>
        <p class="tagline">UNLOCK THE BEST RATES &amp; EXCLUSIVE PERKS HERE.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <img src="images/logo_2-removebg-preview(1).png" alt="Villa Al-Rasyid Logo"/>
        <div class="social-icons">
          <a href="https://www.instagram.com/villa_alrasyid_puncak?igsh=eHR4N2Q5aHp3Y2l0" target="_blank" rel="noopener" aria-label="Instagram Villa Al Rasyid"><i class="fab fa-instagram"></i></a>
          <a href="https://www.tiktok.com/@villaalrasyidpuncak?_r=1&_t=ZS-91bSYRoQD9r" target="_blank" rel="noopener" aria-label="TikTok Villa Al Rasyid"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>

      <div class="footer-col">
        <h4>ABOUT</h4>
        <ul><li><a href="#our-blog">Our Blog</a></li></ul>
      </div>

      <div class="footer-col">
        <h4>CONTACT US</h4>
        <ul>
          <!-- aktif: buka modal FAQ -->
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#faqModal">Send a Message</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>LOCATION</h4>
        <!-- ganti alamat teks -> embed maps langsung -->
        <div class="footer-map">
          <iframe
            src="https://www.google.com/maps?q=Villa+Al+Rasyid+Puncak+Bogor&output=embed"
            width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>

    <div class="footer-subscribe">
      <p>STAY IN TOUCH FOR EXCLUSIVE OFFERS, SPECIALS AND NEWS.</p>
      <form id="subscribeForm">
        <input type="text" placeholder="FIRST NAME" required/>
        <input type="email" placeholder="EMAIL" required/>
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
  </footer>

  <!-- ===== FAQ Modal (Aesthetic) ===== -->
  <div class="modal fade modal-faq" id="faqModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="faq-title w-100">FREQUENTLY ASKED QUESTIONS</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="q1h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                  Apakah Villa Al Rasyid dekat dengan tempat wisata?
                </button>
              </h2>
              <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Ya, lokasi kami strategis di Puncak—dekat Cimory, Taman Safari, pasar tradisional, dan spot kuliner populer.</div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="q2h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                  Bagaimana cara melakukan pemesanan?
                </button>
              </h2>
              <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Cek ketersediaan via tombol WhatsApp di halaman ini. Admin akan membantu proses booking & pembayaran DP.</div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="q3h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">
                  Apakah cocok untuk keluarga?
                </button>
              </h2>
              <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Sangat cocok. Tersedia kolam renang, karaoke, dapur lengkap, dan banyak kamar—ideal untuk family time.</div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="q4h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4">
                  Apakah ada area parkir?
                </button>
              </h2>
              <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Ada. Parkir cukup untuk beberapa mobil, dan akses masuk kendaraan mudah.</div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="q5h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q5">
                  Apakah menyediakan makanan / catering?
                </button>
              </h2>
              <div id="q5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Kami bisa bantu rekomendasi catering & BBQ set. Dapur lengkap tersedia jika ingin masak sendiri.</div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="q6h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q6">
                  Apakah bisa untuk gathering/meeting kecil?
                </button>
              </h2>
              <div id="q6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Bisa. Ruang keluarga luas & area outdoor nyaman. Hubungi kami untuk paket dekor & sound system.</div>
              </div>
            </div>
          </div>

          <div class="text-center mt-4">
            <a class="btn btn-dark px-4 py-2 rounded-pill" href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20bertanya%20tentang%20Villa%20Al%20Rasyid" target="_blank" rel="noopener">
              <i class="bi bi-whatsapp me-2"></i>Tanya Admin via WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Navbar shrink
    window.addEventListener("scroll",()=>{document.querySelector(".navbar").classList.toggle("scrolled",window.scrollY>80)});

    // Mobile menu overlay
    (function(){
      const navbar=document.querySelector(".navbar");
      const menuBtn=document.querySelector(".menu-icon");
      const navLinks=document.querySelector(".nav-links");
      if(!navbar||!menuBtn||!navLinks) return;
      menuBtn.addEventListener("click",()=>{navbar.classList.toggle("nav-open")});
      navLinks.querySelectorAll("a").forEach(a=>a.addEventListener("click",()=>navbar.classList.remove("nav-open")));
    })();

    // Hero slideshow
    (function(){
      const slides=document.querySelectorAll(".hero img"); if(!slides.length) return;
      let i=0; setInterval(()=>{slides[i].classList.remove("active"); i=(i+1)%slides.length; slides[i].classList.add("active");},4000);
    })();

    // About video modal auto play/pause
    (function(){
      const modal=document.getElementById("videoModal");
      const video=document.getElementById("villaVideo");
      if(!modal||!video) return;
      modal.addEventListener("show.bs.modal",()=>{video.currentTime=0; video.play();});
      modal.addEventListener("hidden.bs.modal",()=>{video.pause();});
    })();

    // Reveal facility
    (function(){
      const items=document.querySelectorAll(".panel.facility .feature, .panel.facility .section-title");
      if(!items.length) return;
      const io=new IntersectionObserver((ents)=>{ents.forEach(e=>{if(e.isIntersecting){e.target.classList.add("is-in"); io.unobserve(e.target);}})},{threshold:.2});
      items.forEach(el=>io.observe(el));
    })();

    // Carousel fasilitas
    (function(){
      const root=document.documentElement;
      const wrap=document.getElementById("fac-carousel"); if(!wrap) return;
      const track=wrap.querySelector(".track");
      const slides=[...track.children];
      const btnL=wrap.querySelector(".arrow.left");
      const btnR=wrap.querySelector(".arrow.right");
      let index=0, timer=null;

      const perView=()=>Math.max(1, parseInt(getComputedStyle(root).getPropertyValue("--perView"))||1);
      const gapPx=()=>parseFloat(getComputedStyle(track).gap||"16px");
      const slideW=()=>slides[0].getBoundingClientRect().width;
      const maxIdx=()=>Math.max(0, slides.length - perView());

      function update(){ const offset=index*(slideW()+gapPx()); track.style.transform=`translateX(${-offset}px)`; btnL.disabled=index<=0; btnR.disabled=index>=maxIdx(); }
      function go(dir){ index=Math.min(Math.max(index+dir,0),maxIdx()); update(); }
      function start(){ stop(); timer=setInterval(()=>{ if(index>=maxIdx()) index=-1; go(1); },3500); }
      function stop(){ if(timer){ clearInterval(timer); timer=null; } }
      function pauseThenResume(){ stop(); setTimeout(start,6000); }

      btnL.addEventListener("click",()=>{go(-1); pauseThenResume();});
      btnR.addEventListener("click",()=>{go(1); pauseThenResume();});
      window.addEventListener("resize",update);
      wrap.addEventListener("pointerenter",stop);
      wrap.addEventListener("pointerleave",start);
      update(); start();
    })();

    // Lightbox dari carousel
    (function(){
      const root=document.getElementById("fac-carousel"); if(!root) return;
      const track=root.querySelector(".track"); const imgs=Array.from(track.querySelectorAll(".slide img"));
      const modalEl=document.getElementById("facLightbox"); const modalImg=document.getElementById("facLightboxImg");
      const btnPrev=document.getElementById("lbPrev"); const btnNext=document.getElementById("lbNext");
      const bsModal=new bootstrap.Modal(modalEl); let idx=0;
      function show(i){ idx=(i+imgs.length)%imgs.length; modalImg.classList.remove("lb-in"); modalImg.src=imgs[idx].src; modalImg.alt=imgs[idx].alt||""; bsModal.show(); }
      track.addEventListener("click",(e)=>{ const img=e.target.closest(".slide img"); if(!img) return; show(imgs.indexOf(img)); });
      btnPrev.addEventListener("click",()=>show(idx-1)); btnNext.addEventListener("click",()=>show(idx+1));
      modalImg.addEventListener("load",()=>modalImg.classList.add("lb-in"));
    })();

    // Subscribe dummy
    document.getElementById("subscribeForm").addEventListener("submit",function(e){ e.preventDefault(); alert("Terima kasih sudah berlangganan informasi dari Villa Al-Rasyid!"); this.reset(); });
  </script>
</body>
</html>
