<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Villa Al Rasyid di Puncak Bogor — suasana tenang, udara sejuk, fasilitas lengkap. Hubungi kami untuk ketersediaan dan penawaran terbaik." />
  <title>Villa Al Rasyid — Soft Aesthetic</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"/>
  <!-- Icons + Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    /* =============================
       SOFT AESTHETIC — LINEN & BLUSH
    ============================== */
    :root{
      --bg: #F7F4EF;          /* body background */
      --bg-soft: #F9F6F1;     /* subtle section */
      --panel: #FFFFFF;       /* cards */
      --panel-2:#F1ECE4;      /* soft gradient */
      --ink: #3E3A37;         /* primary text */
      --ink-2: rgba(62,58,55,.78);
      --accent: #E5C7BE;      /* blush champagne */
      --ring: rgba(229,199,190,.42);
      --ring-2: rgba(229,199,190,.25);
      --shadow: 0 14px 36px rgba(34,26,20,.06);
      --shadow-h: 0 22px 54px rgba(34,26,20,.10);
      --radius: 18px;
      --perView: 3;
    }

    *{ box-sizing:border-box; }
    body{
      font-family:"Poppins",sans-serif; margin:0; color:var(--ink);
      background: linear-gradient(180deg, var(--bg), #FFFFFF);
      scroll-behavior:smooth;
    }
    a{ color:inherit; text-decoration:none; }

    /* ===== NAVBAR ===== */
    .navbar{
      position:fixed; inset:0 0 auto 0; width:100%; z-index:1000;
      padding:12px 18px; display:flex; align-items:center; gap:16px; color:var(--ink);
      background:linear-gradient(to bottom, rgba(255,255,255,.85), rgba(255,255,255,.55));
      border-bottom:1px solid var(--ring-2); backdrop-filter: blur(6px);
      transition:background .3s, padding .3s, box-shadow .3s;
    }
    .navbar.scrolled{ background:rgba(255,255,255,.92); box-shadow:var(--shadow); padding:8px 18px; }

    .menu-area{ display:flex; align-items:center; }
    .menu-icon{
      background:rgba(0,0,0,.04); border:1px solid rgba(0,0,0,.08);
      color:var(--ink); border-radius:999px; padding:6px 12px; cursor:pointer; font-size:16px;
      display:flex; align-items:center; gap:6px; letter-spacing:.12em;
    }

    .navbar-brand{ margin:0 auto 0 8px; display:flex; flex-direction:column; align-items:center; gap:2px; line-height:1; color:var(--ink); }
    .brand-main{ font-family:"Playfair Display",serif; font-weight:600; font-size:clamp(18px,2.2vw,28px); letter-spacing:.18em; text-transform:uppercase; white-space:nowrap; }
    .brand-sub{ font-weight:600; font-size:10px; letter-spacing:.18em; text-transform:uppercase; opacity:.8; }

    .navbar-right{
      margin-left:auto; display:grid; grid-auto-flow:column; align-items:center; gap:10px;
      background:rgba(229,199,190,.18); padding:8px 12px; border-radius:999px; border:1px solid var(--ring);
      color:var(--ink);
    }

    .nav-links{ position:fixed; inset:0; background:rgba(255,255,255,.96); display:flex; flex-direction:column; justify-content:center; align-items:center; gap:18px; opacity:0; pointer-events:none; transition:opacity .3s; z-index:900; }
    .navbar.nav-open .nav-links{ opacity:1; pointer-events:auto; }
    .nav-links a{ font-size:12px; letter-spacing:.18em; text-transform:uppercase; padding:6px 0; opacity:.9 }
    .nav-links a:hover{ opacity:1; }

    @media(min-width:992px){ .menu-area{ display:none; } .nav-links{ position:static; opacity:1!important; pointer-events:auto!important; background:transparent; flex-direction:row; gap:24px; margin-left:18px; } .nav-links a{ font-size:11px; letter-spacing:.14em; } }

    /* ===== HERO ===== */
    .hero{ position:relative; height:100vh; overflow:hidden; margin-top:66px; color:var(--ink); }
    @media (min-width: 992px){ .hero{ margin-top:120px; } }
    .hero img{ position:absolute; inset:0; width:100%; height:100%; object-fit:cover; opacity:0; transition:opacity 1s ease; }
    .hero img.active{ opacity:1; }
    .hero::after{ content:""; position:absolute; inset:0; background:linear-gradient(to bottom, rgba(62,58,55,.15), rgba(62,58,55,.55)); }
    .hero .overlay{ position:absolute; inset:0; display:flex; align-items:center; justify-content:center; padding:0 32px; z-index:1; color:#fff; }
    .hero-content{ max-width:960px; text-align:center; }
    .hero-badge{ display:inline-block; padding:4px 14px; border-radius:999px; border:1px solid var(--ring); background:rgba(229,199,190,.25); color:#2f2a22; font-size:10px; letter-spacing:.18em; text-transform:uppercase; margin-bottom:14px; }
    .hero-content h1{ font-family:"Playfair Display",serif; font-size:clamp(30px,3.6vw,42px); letter-spacing:.14em; text-transform:uppercase; margin:0 0 14px; line-height:1.35; color:#fff; text-shadow:0 10px 26px rgba(0,0,0,.4); }
    .hero-subtitle{ margin:0 auto 22px; max-width:640px; font-size:14px; line-height:1.8; color:#f5f1ea; }
    .hero .btn-availability{ display:inline-flex; align-items:center; gap:8px; padding:11px 28px; border-radius:999px; background:linear-gradient(135deg,#fffdf8,#efe8d8); color:#2f2a22; font-weight:600; letter-spacing:.12em; text-transform:uppercase; font-size:11px; border:1px solid var(--ring); box-shadow:var(--shadow); }
    .hero .btn-availability:hover{ transform:translateY(-2px); box-shadow:var(--shadow-h); }
    .hero .btn-ghost{ display:inline-flex; align-items:center; justify-content:center; padding:11px 22px; border-radius:999px; border:1px solid var(--ring); background:rgba(255,255,255,.3); color:#2f2a22; font-size:11px; letter-spacing:.12em; text-transform:uppercase; font-weight:500; backdrop-filter:blur(10px); }

    /* ===== ABOUT ===== */
    .about-section{ position:relative; min-height:100dvh; background:url("images/villa.jpg") center/cover no-repeat fixed; display:flex; align-items:center; padding:120px 0 80px; overflow:hidden; color:#fff; }
    .about-section::before{ content:""; position:absolute; inset:0; background:inherit; filter:blur(14px) brightness(.55); transform:scale(1.05); z-index:0; }
    .about-section::after{ content:""; position:absolute; inset:0; background:linear-gradient(180deg, rgba(62,58,55,.20), rgba(62,58,55,.45)); z-index:1; }
    .about-section .container{ position:relative; z-index:2; }
    .video-box{ position:relative; background:rgba(255,255,255,.08); border-radius:24px; overflow:hidden; width:100%; box-shadow:var(--shadow); border:1px solid var(--ring); backdrop-filter:blur(12px); min-height:380px; display:flex; align-items:center; justify-content:center; cursor:pointer; }
    .video-box video{ width:100%; height:100%; object-fit:cover; opacity:.9; }
    .video-overlay i{ font-size:84px; color:rgba(255,255,255,.95); filter:drop-shadow(0 8px 22px rgba(0,0,0,.55)); }
    .text-content{ background:rgba(255,255,255,.7); border-radius:24px; padding:28px 30px; color:var(--ink); box-shadow:var(--shadow); border:1px solid var(--ring); }

    /* ===== FACILITIES ===== */
    .facility-bg{ background: linear-gradient(180deg, var(--bg), var(--bg-soft)); padding: 80px 0; color: var(--ink); }
    .section-title{ font-family:"Playfair Display",serif; font-weight:600; text-align:center; margin:0 auto 32px; width:100%; color:var(--ink); font-size:clamp(28px,3vw,42px); letter-spacing:.02em; position:relative; display:inline-block; }
    .section-title:after{ content:""; display:block; height:2px; width:160px; margin:10px auto 0; background:linear-gradient(90deg, transparent, var(--accent), transparent); opacity:.9; }

    .features{ display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:22px; margin-bottom:46px; }
    @media(max-width:1000px){ .features{ grid-template-columns:repeat(2,1fr); } }
    @media(max-width:560px){ .features{ grid-template-columns:1fr; } }

    .feature{ position:relative; border-radius:var(--radius); padding:20px 18px; overflow:hidden; isolation:isolate; background: linear-gradient(180deg, var(--panel), var(--panel-2)); border:1px solid var(--ring); box-shadow: var(--shadow); transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease; }
    .feature:before{ content:""; position:absolute; inset:-30% -50%; transform:rotate(14deg) translateX(-100%); background:linear-gradient(120deg, transparent 45%, rgba(229,199,190,.22) 52%, transparent 58%); transition: transform .9s cubic-bezier(.22,.8,.2,1); pointer-events:none; }
    .feature:hover{ transform:translateY(-6px) scale(1.01); box-shadow:var(--shadow-h); border-color:rgba(229,199,190,.55); }
    .feature:hover:before{ transform:rotate(14deg) translateX(120%); }

    .icon-wrap{ width:84px; height:84px; margin:6px auto 14px; display:grid; place-items:center; border-radius:999px; background: radial-gradient(circle at 30% 20%, rgba(229,199,190,.22), rgba(255,255,255,.5)); border:1px solid var(--ring); box-shadow: inset 0 1px 0 rgba(255,255,255,.6), 0 10px 22px rgba(0,0,0,.06); }
    .icon-wrap img{ width:56%; height:56%; object-fit:contain; opacity:.98; filter:drop-shadow(0 4px 8px rgba(0,0,0,.08)); }

    .feature .label{ font-weight:700; text-align:center; font-size:14px; letter-spacing:.08em; text-transform:uppercase; color:var(--ink); }
    .feature .desc{ max-width:340px; margin:8px auto 2px; font-size:.95rem; line-height:1.6; color:var(--ink-2); text-align:center; }

    /* Carousel foto fasilitas */
    @media(max-width:1000px){ :root{ --perView:2; } }
    @media(max-width:560px){ :root{ --perView:1; } }
    .carousel{ position:relative; overflow:hidden; border-radius:16px; padding:10px 44px; background: linear-gradient(180deg, rgba(255,255,255,.55), rgba(255,255,255,.35)); border:1px solid var(--ring); box-shadow: var(--shadow); }
    .track{ display:flex; gap:16px; transition:transform .45s cubic-bezier(.22,.8,.2,1); }
    .slide{ flex:0 0 calc((100% - (var(--perView) - 1)*16px)/var(--perView)); cursor:pointer; }
    .slide img{ display:block; width:100%; height:260px; object-fit:cover; border-radius:14px; box-shadow: 0 12px 28px rgba(0,0,0,.08); transform:translateZ(0); }
    @media(min-width:760px){ .slide img{ height:300px; } }
    @media(min-width:1100px){ .slide img{ height:340px; } }
    .arrow{ position:absolute; top:50%; transform:translateY(-50%); width:40px; height:40px; border:0; border-radius:50%; background:#fff; color:var(--ink); display:grid; place-items:center; cursor:pointer; box-shadow:0 8px 18px rgba(0,0,0,.10); }
    .arrow svg{ width:20px; height:20px; }
    .arrow.left{ left:10px; } .arrow.right{ right:10px; }
    .arrow:disabled{ opacity:.45; }

    /* ===== REVIEW ===== */
    #review-section.review-section{ background: linear-gradient(180deg, var(--bg-soft), #FFFFFF); color: var(--ink); padding:80px 16px 70px; }
    #review-section .review-wrapper{ background: linear-gradient(135deg, var(--panel), var(--panel-2)); border: 1px solid var(--ring-2); box-shadow: var(--shadow); border-radius:26px; max-width:1120px; margin:0 auto; text-align:center; padding:48px 32px 40px; }
    .badge-review{ display:inline-block; font-size:11px; letter-spacing:.18em; text-transform:uppercase; color:var(--ink); padding:4px 14px; border-radius:999px; border:1px solid var(--ring); background:rgba(229,199,190,.25); margin-bottom:10px; }
    .stars{ color:#F2C94C; font-size:38px; margin-bottom:12px; letter-spacing:3px; }
    .review-text{ font-family:"Playfair Display",serif; font-size:22px; color:var(--ink); margin:8px auto 16px; line-height:1.7; max-width:720px; }
    .author{ font-weight:600; margin-bottom:30px; color:#8A7B6F; font-size:13px; letter-spacing:.15em; text-transform:uppercase; }
    .photo-layout{ display:grid; grid-template-columns:repeat(4,minmax(0,1fr)); grid-auto-rows:170px; gap:16px; max-width:1000px; margin:10px auto 0; }
    .photo-layout img{ width:100%; height:100%; object-fit:cover; border-radius:18px; display:block; transition:transform .35s, box-shadow .35s, filter .35s; }
    .photo-layout img:nth-child(1){ grid-column:span 2; grid-row:span 2; }
    .photo-layout img:nth-child(2){ grid-column:span 2; }
    .photo-layout img:nth-child(3){ grid-row:span 2; }
    .photo-layout img:nth-child(5){ grid-column:span 2; }
    .photo-layout img:hover{ transform:translateY(-4px) scale(1.03); box-shadow:0 10px 24px rgba(0,0,0,.12); filter:saturate(1.05) contrast(1.05); }

    /* ===== RESERVATION ===== */
    .reservation{ background-image:url("/images/villa.jpg"); background-repeat:no-repeat; background-size:cover; background-position:center; min-height:70vh; display:flex; align-items:center; justify-content:center; position:relative; overflow:hidden; }
    .reservation::after{ content:""; position:absolute; inset:0; background:linear-gradient(180deg, rgba(62,58,55,.20), rgba(62,58,55,.45)); }
    .overlay-reservation{ position:relative; z-index:2; width:100%; padding:40px 20px; text-align:center; color:#fff; }
    .reservation-content{ max-width:620px; margin:0 auto; }
    .reservation-content h1{ font-family:"Playfair Display",serif; font-size:34px; font-weight:500; letter-spacing:3px; text-transform:uppercase; margin-bottom:28px; }
    .wa-cta{ display:inline-flex; align-items:center; gap:10px; padding:12px 38px; border-radius:999px; background:#fff; color:#1e9e64; font-size:16px; font-weight:600; box-shadow:var(--shadow); border:1px solid var(--ring); }
    .wa-cta:hover{ transform:translateY(-2px); box-shadow:var(--shadow-h); }
    .tagline{ margin-top:18px; font-size:13px; letter-spacing:2px; text-transform:uppercase; color:#f5f1ea; }

    /* ===== FOOTER ===== */
    footer{ background: var(--bg); color: var(--ink); padding:60px 80px 30px; font-family:"Playfair Display",serif; border-top:1px solid var(--ring-2); }
    .footer-container{ display:grid; grid-template-columns:1.5fr 1fr 1fr 1fr; gap:40px; align-items:flex-start; }
    .footer-logo img{ width:160px; margin-bottom:15px; filter: drop-shadow(0 6px 14px rgba(0,0,0,.06)); }
    .social-icons a{ color: var(--ink); font-size:20px; margin-right:15px; }
    .social-icons a:hover{ color: var(--accent); }
    .footer-col h4{ font-weight:600; font-size:15px; letter-spacing:1px; margin-bottom:20px; color:var(--ink); }
    .footer-col ul{ list-style:none; padding:0; }
    .footer-col ul li{ margin-bottom:10px; }
    .footer-col ul li a{ color:var(--ink-2); font-size:14px; }
    .footer-col ul li a:hover{ color:var(--accent); text-decoration: underline; }
    .footer-map{ width:100%; border:0; border-radius:12px; min-height:200px; box-shadow:0 8px 18px rgba(0,0,0,.06); border:1px solid var(--ring-2); overflow:hidden; }
    .footer-subscribe{ grid-column:span 4; margin-top:40px; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; border-top:1px solid var(--ring-2); padding-top:30px; }
    .footer-subscribe input{ background:transparent; border:none; border-bottom:1px solid var(--ink); padding:5px 0; color:var(--ink); width:180px; font-size:13px; }
    .footer-subscribe button{ background: linear-gradient(180deg, var(--panel), var(--panel-2)); border:1px solid var(--ring); color:var(--ink); padding:8px 22px; border-radius:999px; cursor:pointer; font-weight:600; font-size:13px; }
    .footer-subscribe button:hover{ filter: brightness(1.05); }
    .footer-bottom{ margin-top:30px; border-top:1px solid var(--ring-2); display:flex; justify-content:space-between; align-items:center; padding-top:20px; font-size:12px; flex-wrap:wrap; }
    .footer-bottom a{ color:var(--ink-2); margin-left:16px; font-size:12px; }
    .footer-bottom a:hover{ color:var(--accent); text-decoration: underline; }
    @media(max-width:800px){ footer{ padding:40px 24px 24px; } .footer-container{ grid-template-columns:1fr 1fr; gap:30px; } .footer-subscribe{ flex-direction:column; align-items:flex-start; } .footer-bottom{ flex-direction:column; align-items:flex-start; gap:10px; } }

    /* ===== FAQ Modal ===== */
    .faq-title{ font-family:"Playfair Display",serif; letter-spacing:.12em; text-transform:uppercase; color:var(--ink); margin:0; text-align:center; }
    .modal-faq .modal-content{ background: linear-gradient(180deg, var(--panel), var(--panel-2)); border:0; border-radius:22px; box-shadow: var(--shadow); color:var(--ink); }
    .modal-faq .accordion-item{ background:transparent; border:0; border-bottom:1px solid var(--ring-2); }
    .accordion-button{ background:transparent !important; font-weight:600; color:var(--ink); letter-spacing:.02em; }
    .accordion-button:focus{ box-shadow:none; }

    /* Desktop alignment fix */
    @media (min-width: 992px){ .navbar{ display:grid; grid-template-columns: 1fr minmax(0, max-content) 1fr; grid-auto-rows:auto; align-items:center; } .navbar .navbar-brand{ grid-column:1 / -1; grid-row:1; justify-self:center; margin:0; } .navbar .navbar-right{ grid-column:1; grid-row:2; justify-self:start; } .navbar .nav-links{ grid-column:2; grid-row:2; justify-self:center; margin-left:0 !important; position:relative; left:auto; transform:none; } }

    /* Reduced motion */
    @media (prefers-reduced-motion: reduce){ .feature, .section-title:after, .carousel .slide img, .arrow { transition:none !important; animation:none !important; } }

    /* ===== TATA LETAK FEATURES: tetap rapi dengan 4 kartu ===== */
#facility .features{
  display:grid;
  gap:22px;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  align-items:stretch;
}

/* Biar semua kartu tingginya konsisten */
#facility .feature{
  display:flex;
  flex-direction:column;
  height:100%;
}
#facility .feature .desc{
  flex:1 1 auto;
}

/* Centering tombol play di dalam .video-box */
.video-box { position: relative; } /* sudah ada, aman diulang */
.video-overlay{
  position: absolute;
  inset: 0;
  display: grid;
  place-items: center;   /* benar-benar tengah */
  pointer-events: none;  /* klik di mana saja tetap buka modal */
}
.video-overlay i{
  font-size: 84px;
  color: rgba(255,255,255,.95);
  filter: drop-shadow(0 8px 22px rgba(0,0,0,.55));
  transition: transform .2s ease;
}
.video-box:hover .video-overlay i{ transform: scale(1.06); }

/* TYPOGRAPHY — About text next to video */
.about-section .text-content{
  font-smooth: always;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Keterangan kecil di atas judul */
.about-section .text-content h6{
  font-family: "Poppins", system-ui, -apple-system, sans-serif;
  letter-spacing: .16em;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  color: rgba(62,58,55,.65);
  margin: 0 0 10px;
}

/* Judul: lebih editorial & elegan */
.about-section .text-content h2{
  font-family: "Playfair Display", serif;
  font-weight: 600;
  font-size: clamp(26px, 3.2vw, 44px);
  line-height: 1.18;
  letter-spacing: .01em;
  margin: 0 0 12px;
  color: #3E3A37;
}

/* Paragraf: nyaman dibaca */
.about-section .text-content p{
  font-family: "Poppins", system-ui, -apple-system, sans-serif;
  font-size: clamp(14px, 1.05vw, 16.5px);
  line-height: 1.85;
  color: rgba(62,58,55,.78);  /* selaras var(--ink-2) */
  margin: 10px 0;
}

/* Opsi: berikan sedikit aksen pada tanda hubung — */
.about-section .text-content p em{
  font-style: normal;
  color: #6e655f;
}
/* ==== Navbar: kapsul lokasi kecil & di pojok kanan ==== */

/* tampilan kapsul lebih ringkas */
.navbar-right{
  padding: 6px 10px;
  gap: 6px;
  border-radius: 999px;
  background: rgba(229,199,190,.18);
  border: 1px solid rgba(229,199,190,.42);
  line-height: 1;
}
.navbar-right i{ font-size: 14px; }
.navbar-right .right-text small{ display: none; } /* sembunyikan baris kedua */
.navbar-right .right-text strong{
  font-size: 12px;
  letter-spacing: .01em;
  white-space: nowrap;
}

/* posisikan di pojok kanan pada desktop, menu tetap di tempatnya */
@media (min-width: 992px){
  .navbar{
    display: grid;
    grid-template-columns: 1fr minmax(0,max-content) 1fr; /* kiri | brand | kanan */
    grid-auto-rows: auto;
    align-items: center;
  }
  .navbar .navbar-brand{
    grid-column: 2;
    grid-row: 1;
    justify-self: center;
    margin: 0;
  }
  .navbar .nav-links{
    grid-column: 2;
    grid-row: 2;               /* menu tetap di baris kedua, tengah */
    justify-self: center;
    position: relative; left:auto; transform:none; margin-left:0 !important;
  }
  .navbar .navbar-right{
    grid-column: 3;            /* pojok kanan atas */
    grid-row: 1;
    justify-self: end;
  }
}

/* mobile: tetap di kanan, ringkas */
@media (max-width: 991.98px){
  .navbar-right{
    margin-left: auto;         /* dorong ke kanan */
  }
}
  </style>
</head>
<body>
  <!-- ================= NAVBAR ================= -->
  <nav class="navbar">
    <div class="menu-area">
      <button class="menu-icon" aria-label="Buka menu">☰ <span>MENU</span></button>
    </div>
    <a class="navbar-brand" href="#hero" aria-label="Villa Al Rasyid">
      <span class="brand-main">VILLA AL RASYID</span>
      <span class="brand-sub">VILLA · RESORT · PUNCAK</span>
    </a>
   <a class="navbar-right"
   href="https://www.google.com/maps?q=Villa+Al+Rasyid,+Puncak+Bogor"
   target="_blank" rel="noopener noreferrer"
   aria-label="Buka lokasi di Google Maps">
  <i class="bi bi-geo-alt-fill"></i>
  <div class="right-text">
    <strong>Puncak Bogor</strong>
  </div>
</a>

    </a>
    <div class="nav-links">
      <a href="#hero">Beranda</a>
      <a href="#about">Tentang</a>
      <a href="#facility">Fasilitas</a>
      <a href="#review-section">Ulasan</a>
      <a href="#reservasi">Reservasi</a>
    </div>
  </nav>

  <!-- ================= HERO ================= -->
  <section class="hero" id="hero">
    <img src="images/villa.jpg" class="active" alt="Pemandangan Villa" loading="eager" decoding="async"/>
    <img src="images/villa1.jpg" alt="Pemandangan Villa 1" loading="lazy" decoding="async"/>
    <img src="images/villa2.jpg" alt="Pemandangan Villa 2" loading="lazy" decoding="async"/>
    <img src="images/villa3.jpg" alt="Pemandangan Villa 3" loading="lazy" decoding="async"/>

    <div class="overlay">
      <div class="hero-content">
        <span class="hero-badge">VILLA AL RASYID · PUNCAK</span>
        <h1>Serenity in the Highlands</h1>
        <p class="hero-subtitle">Udara sejuk, pemandangan pegunungan, dan villa pribadi untuk momen paling berkesan bersama orang tersayang.</p>
        <div class="hero-actions">
          <a href="#reservasi" class="btn-availability"><span>Cek Ketersediaan</span><i class="bi bi-arrow-right-short"></i></a>
          <a href="#facility" class="btn-ghost">Lihat Fasilitas</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= ABOUT ================= -->
  <section class="about-section" id="about">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <div class="video-box" data-bs-toggle="modal" data-bs-target="#videoModal">
            <video src="video/video1.mp4" muted playsinline loop poster="images/video-thumb.jpg"></video>
            <div class="video-overlay"><i class="bi bi-play-fill" aria-hidden="true"></i></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="text-content">
            <h6>Liburan tenang dengan view gunung &amp; city light</h6>
            <p>Butuh tempat liburan dengan suasana tenang, udara sejuk, dan pemandangan menakjubkan? Villa Al Rasyid siap menjadi destinasi sempurna untuk Anda dan keluarga.</p>
            <p>Dikelilingi panorama asri: pegunungan hijau di siang hari dan gemerlap city light di malam hari.</p>
            <p>Fasilitas modern: kolam renang privat, dapur lengkap, ruang keluarga luas — hangat, nyaman, berkesan.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Video Modal -->
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

  <!-- ================= FACILITIES ================= -->
  <section class="section facility-bg" id="facility">
    <div class="container">
      <h2 class="section-title">Interior &amp; Fasilitas</h2>

      <div class="features">
        <div class="feature">
          <div class="icon-wrap"><img src="/images/karaoke-removebg-preview.png" alt="Karaoke" loading="lazy" decoding="async"/></div>
          <div class="label">Karaoke</div>
          <p class="desc">Sistem karaoke modern untuk malam penuh tawa &amp; sing-along.</p>
        </div>
        <div class="feature">
          <div class="icon-wrap"><img src="/images/swimm-removebg-preview.png" alt="Kolam Renang" loading="lazy" decoding="async"/></div>
          <div class="label">Kolam Renang Privat</div>
          <p class="desc">Eksklusif, nyaman, dan aman untuk semua usia.</p>
        </div>
        <div class="feature">
          <div class="icon-wrap"><img src="/images/wifi-removebg-preview.png" alt="Wi‑Fi" loading="lazy" decoding="async"/></div>
          <div class="label">Wi‑Fi</div>
          <p class="desc">Internet stabil dan cepat untuk seluruh tamu.</p>
        </div>
        <div class="feature">
          <div class="icon-wrap"><img src="/images/airpanas-removebg-preview.png" alt="Air Panas" loading="lazy" decoding="async"/></div>
          <div class="label">Air Panas</div>
          <p class="desc">Berendam hangat dengan nuansa alami yang menenangkan.</p>
        </div>
      </div>

      <!-- Carousel Foto Fasilitas -->
      <div class="carousel" id="fac-carousel">
        <button class="arrow left" aria-label="Sebelumnya" data-dir="-1">
          <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 6L9 12l6 6" stroke="currentColor" stroke-width="2"/></svg>
        </button>
        <div class="track">
          <div class="slide"><img src="/images/balkon.jpg" alt="Balkon" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/kolam renang.jpg" alt="Kolam Renang" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/billiard.jpg" alt="Meja Biliar" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/ruang karaoke.jpg" alt="Ruang Karaoke" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/gazebo.jpg" alt="Gazebo" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/kamar mandi.jpg" alt="Kamar Mandi" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/kamar mandi 2.jpg" alt="Kamar Mandi 2" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/kamar tidur 3.jpg" alt="Kamar Tidur 3" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/kamar tidur 4.jpg" alt="Kamar Tidur 4" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/kamar tidur 5.jpg" alt="Kamar Tidur 5" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/tempat kumpul.jpg" alt="Area Berkumpul" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/kitchen.jpg" alt="Dapur" loading="lazy" decoding="async"/></div>
          <div class="slide"><img src="/images/ruangan.jpg" alt="Ruang Dalam" loading="lazy" decoding="async"/></div>
        </div>
        <button class="arrow right" aria-label="Berikutnya" data-dir="1">
          <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2"/></svg>
        </button>
      </div>
    </div>
  </section>

  <!-- Lightbox Foto -->
  <div class="modal fade" id="facLightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content bg-black bg-opacity-75 border-0">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Tutup"></button>
        <div class="modal-body p-0 d-flex align-items-center justify-content-center position-relative">
          <img id="facLightboxImg" src="" alt="Gambar fasilitas" class="img-fluid" style="max-height:90vh"/>
          <button class="btn btn-light rounded-circle position-absolute" id="lbPrev" aria-label="Sebelumnya" style="left:16px">&#10094;</button>
          <button class="btn btn-light rounded-circle position-absolute" id="lbNext" aria-label="Berikutnya" style="right:16px">&#10095;</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ================= REVIEW ================= -->
  <section id="review-section" class="review-section">
    <div class="review-wrapper">
      <div class="review-header">
        <span class="badge-review">Guest Review</span>
        <div class="stars" aria-label="Rating 5 bintang">★★★★★</div>
        <p class="review-text">Absolute perfection.<br/>The service, the decor, the villa, the view, the staff — everything.<br/>It truly feels like you’ve moved to your own private estate.</p>
        <p class="author">ANNA M. — Google Review</p>
      </div>
      <div class="photo-layout">
        <img src="/images/review one.jpg" alt="Kolam renang Villa Al Rasyid" loading="lazy" decoding="async"/>
        <img src="/images/review two.jpg" alt="Kamar tidur Villa Al Rasyid" loading="lazy" decoding="async"/>
        <img src="/images/review three.jpg" alt="Ruang keluarga Villa Al Rasyid" loading="lazy" decoding="async"/>
        <img src="/images/review four.jpg" alt="Balkon Villa Al Rasyid" loading="lazy" decoding="async"/>
        <img src="/images/review five.jpg" alt="Area makan Villa Al Rasyid" loading="lazy" decoding="async"/>
        <img src="/images/review six.jpg" alt="Pemandangan malam Villa Al Rasyid" loading="lazy" decoding="async"/>
      </div>
    </div>
  </section>

  <!-- ================= RESERVATION ================= -->
  <section class="reservation" id="reservasi">
    <div class="overlay-reservation">
      <div class="reservation-content">
        <h1>Hubungi Kami</h1>
        <!-- Gunakan format internasional untuk WhatsApp: 62xxxxxxxxxx -->
        <a href="https://wa.me/6283857770074?text=Halo%20saya%20ingin%20melihat%20katalog%20Villa%20Al%20Rasyid" class="wa-cta" target="_blank" rel="noopener noreferrer">
          <span>Katalog via WhatsApp</span><i class="bi bi-whatsapp" aria-hidden="true"></i>
        </a>
        <p class="tagline">Unlock the best rates &amp; exclusive perks here.</p>
      </div>
    </div>
  </section>

  <!-- ================= FOOTER ================= -->
  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <img src="images/logo_2-removebg-preview(1).png" alt="Logo Villa Al Rasyid"/>
        <div class="social-icons">
          <a href="https://www.instagram.com/villa_alrasyid_puncak?igsh=eHR4N2Q5aHp3Y2l0" target="_blank" rel="noopener noreferrer" aria-label="Instagram Villa Al Rasyid"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          <a href="https://www.tiktok.com/@villaalrasyidpuncak?_r=1&_t=ZS-91bSYRoQD9r" target="_blank" rel="noopener noreferrer" aria-label="TikTok Villa Al Rasyid"><i class="fab fa-tiktok" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Tentang</h4>
        <ul><li><a href="{{ route('our_blog') }}">Blog Kami</a></li></ul>
      </div>
      <div class="footer-col">
        <h4>Hubungi Kami</h4>
        <ul><li><a href="#" data-bs-toggle="modal" data-bs-target="#faqModal">Kirim Pesan</a></li></ul>
      </div>
      <div class="footer-col">
        <h4>Lokasi</h4>
        <div class="footer-map">
          <iframe title="Peta lokasi Villa Al Rasyid" src="https://www.google.com/maps?q=Villa+Al+Rasyid+Puncak+Bogor&output=embed" width="100%" height="220" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <div class="footer-subscribe">
      <p>Stay in touch for exclusive offers, specials, and news.</p>
      <form id="subscribeForm" autocomplete="off">
        <input type="text" name="firstname" placeholder="First Name" required/>
        <input type="email" name="email" placeholder="Email" required/>
        <button type="submit">Subscribe</button>
      </form>
    </div>

    <div class="footer-bottom">
      <span>Villa Al Rasyid © 1997.</span>
      <div>
        <a href="{{ url('/kebijakan_privasi') }}">Kebijakan Privasi</a>
        <a href="{{ url('/persyaratan_pengguna') }}">Persyaratan Pengguna</a>
      </div>
    </div>
  </footer>

  <!-- ===== FAQ MODAL ===== -->
  <div class="modal fade modal-faq" id="faqModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="faq-title w-100">Frequently Asked Questions</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="q1h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q1">Apakah Villa Al Rasyid dekat dengan tempat wisata?</button>
              </h2>
              <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Ya. Lokasi kami strategis di Puncak — dekat Cimory, Taman Safari, pasar tradisional, dan spot kuliner populer.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="q2h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">Bagaimana cara melakukan pemesanan?</button>
              </h2>
              <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Klik tombol WhatsApp di halaman ini untuk cek ketersediaan. Admin akan membantu proses booking dan pembayaran DP.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="q3h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">Apakah cocok untuk keluarga?</button>
              </h2>
              <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Sangat cocok. Tersedia kolam renang, karaoke, dapur lengkap, dan banyak kamar — ideal untuk quality time keluarga.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="q4h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4">Apakah ada area parkir?</button>
              </h2>
              <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Ada. Parkir cukup untuk beberapa mobil dan akses masuk kendaraan mudah.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="q5h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q5">Apakah menyediakan makanan/catering?</button>
              </h2>
              <div id="q5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Kami dapat merekomendasikan catering dan BBQ set. Dapur lengkap tersedia bila ingin memasak sendiri.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="q6h">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q6">Apakah bisa untuk gathering/meeting kecil?</button>
              </h2>
              <div id="q6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">Bisa. Ruang keluarga luas dan area outdoor nyaman. Hubungi kami untuk paket dekor dan sound system.</div>
              </div>
            </div>
          </div>
          <div class="text-center mt-4">
            <a class="btn btn-light px-4 py-2 rounded-pill" href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20bertanya%20tentang%20Villa%20Al%20Rasyid" target="_blank" rel="noopener noreferrer">
              <i class="bi bi-whatsapp me-2" aria-hidden="true"></i>Tanya Admin via WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Navbar: shrink on scroll
    window.addEventListener("scroll", () => {
      document.querySelector(".navbar").classList.toggle("scrolled", window.scrollY > 80);
    });

    // Mobile menu overlay
    (function(){
      const navbar = document.querySelector(".navbar");
      const menuBtn = document.querySelector(".menu-icon");
      const navLinks = document.querySelector(".nav-links");
      if(!navbar || !menuBtn || !navLinks) return;
      menuBtn.addEventListener("click", () => navbar.classList.toggle("nav-open"));
      navLinks.querySelectorAll("a").forEach(a => a.addEventListener("click", () => navbar.classList.remove("nav-open")));
    })();

    // Hero slideshow
    (function(){
      const slides = document.querySelectorAll(".hero img");
      if (!slides.length) return;
      let i = 0;
      setInterval(() => {
        slides[i].classList.remove("active");
        i = (i + 1) % slides.length;
        slides[i].classList.add("active");
      }, 4000);
    })();

    // About video
    (function(){
      const modal = document.getElementById("videoModal");
      const video = document.getElementById("villaVideo");
      if (!modal || !video) return;
      modal.addEventListener("show.bs.modal", () => { video.currentTime = 0; video.play(); });
      modal.addEventListener("hidden.bs.modal", () => { video.pause(); });
    })();

    // Facility carousel
    (function(){
      const root = document.documentElement;
      const wrap = document.getElementById("fac-carousel");
      if (!wrap) return;
      const track = wrap.querySelector(".track");
      const slides = [...track.children];
      const btnL = wrap.querySelector(".arrow.left");
      const btnR = wrap.querySelector(".arrow.right");
      let index = 0, timer = null;

      const perView = () => Math.max(1, parseInt(getComputedStyle(root).getPropertyValue("--perView")) || 1);
      const gapPx  = () => parseFloat(getComputedStyle(track).gap || "16px");
      const slideW = () => slides[0].getBoundingClientRect().width;
      const maxIdx = () => Math.max(0, slides.length - perView());

      function update(){ const offset = index * (slideW() + gapPx()); track.style.transform = `translateX(${-offset}px)`; btnL.disabled = index <= 0; btnR.disabled = index >= maxIdx(); }
      function go(dir){ index = Math.min(Math.max(index + dir, 0), maxIdx()); update(); }
      function start(){ stop(); timer = setInterval(() => { if (index >= maxIdx()) index = -1; go(1); }, 3500); }
      function stop(){ if (timer){ clearInterval(timer); timer = null; } }
      function pauseThenResume(){ stop(); setTimeout(start, 6000); }

      btnL.addEventListener("click", () => { go(-1); pauseThenResume(); });
      btnR.addEventListener("click", () => { go(1);  pauseThenResume(); });
      window.addEventListener("resize", update);
      wrap.addEventListener("pointerenter", stop);
      wrap.addEventListener("pointerleave", start);
      update(); start();
    })();

    // Lightbox from carousel
    (function(){
      const root = document.getElementById("fac-carousel");
      if (!root) return;
      const track   = root.querySelector(".track");
      const imgs    = Array.from(track.querySelectorAll(".slide img"));
      const modalEl = document.getElementById("facLightbox");
      const modalImg= document.getElementById("facLightboxImg");
      const btnPrev = document.getElementById("lbPrev");
      const btnNext = document.getElementById("lbNext");
      const bsModal = new bootstrap.Modal(modalEl);
      let idx = 0;

      function show(i){
        idx = (i + imgs.length) % imgs.length;
        modalImg.src = imgs[idx].src;
        modalImg.alt = imgs[idx].alt || "Gambar fasilitas";
        bsModal.show();
      }
      track.addEventListener("click", (e) => { const img = e.target.closest(".slide img"); if (!img) return; show(imgs.indexOf(img)); });
      btnPrev.addEventListener("click", () => show(idx - 1));
      btnNext.addEventListener("click", () => show(idx + 1));
    })();

    // Subscribe form (dummy)
    (function(){
      const sf = document.getElementById('subscribeForm');
      if (!sf) return;
      sf.addEventListener('submit', function(e){
        e.preventDefault();
        alert('Terima kasih! Langganan Anda telah tercatat.');
        this.reset();
      });
    })();
  </script>
</body>
</html>