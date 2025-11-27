<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Blog — Al Rasyid Villa</title>

  <!-- Fonts & CSS SAMA seperti home.blade.php -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"/>
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


    /* ====== BLOG CONTENT styles (khusus halaman ini) ====== */
    .page-wrap { margin-top: 86px; } /* kasi offset karena navbar fixed */
    .explore-title { text-align:center; margin: 40px 0 10px; font-size: 18px; letter-spacing: 1px; }
    .explore-subtitle { text-align:center; font-size: 16px; color:#4b3d2b; margin-bottom: 40px; }
    .explore-container { max-width: 1000px; margin: 0 auto 80px; display: grid; grid-template-columns: 1fr 1fr; gap: 60px 40px; padding: 0 30px; }
    .explore-item { display:flex; flex-direction:column; align-items:flex-start; }
    .explore-item img { width:100%; border-radius:8px; box-shadow:0 4px 10px rgba(0,0,0,0.1); }
    .explore-item h3 { margin-top:20px; font-size:20px; color:#4b3d2b;}
    .explore-item p { margin-top:10px; font-size:16px; color:#5b4b3a; line-height:1.7; text-align:justify;}
    @media (max-width: 768px) {
      .explore-container { grid-template-columns:1fr; gap:40px; }
    }

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

    /* =========================
   OVERRIDES — Samakan dengan "Soft Aesthetic"
   Tempel di PALING BAWAH <style>
========================= */
:root{
  --bg:#F7F4EF; --bg-soft:#F9F6F1;
  --panel:#FFFFFF; --panel-2:#F1ECE4;
  --ink:#3E3A37; --ink-2:rgba(62,58,55,.78);
  --accent:#E5C7BE; --ring:rgba(229,199,190,.42); --ring-2:rgba(229,199,190,.25);
  --shadow:0 14px 36px rgba(34,26,20,.06); --shadow-h:0 22px 54px rgba(34,26,20,.10);
}
body{ background:linear-gradient(180deg,var(--bg),#fff); color:var(--ink); }
a{ color:inherit; }

/* NAVBAR: putih transparan + 2 baris */
.navbar{
  color:var(--ink);
  background:linear-gradient(to bottom,rgba(255,255,255,.85),rgba(255,255,255,.55));
  border-bottom:1px solid var(--ring-2);
  backdrop-filter:blur(6px);
  box-shadow:none; padding:12px 18px;
}
.navbar.scrolled{ background:rgba(255,255,255,.92); box-shadow:var(--shadow); padding:8px 18px; }
.menu-icon{ background:rgba(0,0,0,.04); border:1px solid rgba(0,0,0,.08); color:var(--ink); }

/* tata letak 2-baris: brand (row 1 center), menu (row 2 center), lokasi (row 1 right) */
@media (min-width:992px){
  .navbar{
    display:grid; grid-template-columns:1fr minmax(0,max-content) 1fr; align-items:center;
  }
  .navbar .navbar-brand{ grid-column:1 / -1; grid-row:1; justify-self:center; margin:0; }
  .navbar .nav-links{ grid-column:2; grid-row:2; justify-self:center; position:relative; left:auto; transform:none; margin-left:0!important; }
  .navbar .navbar-right{ grid-column:3; grid-row:1; justify-self:end; }
}
/* mobile overlay menu: terang */
.nav-links{ background:rgba(255,255,255,.96); }
.nav-links a{ color:var(--ink); letter-spacing:.18em; text-transform:uppercase; }
.nav-links a:hover{ opacity:.9; text-decoration:none; }

/* Kapsul lokasi: diperkecil & ringkas */
.navbar-right{
  margin-left:auto; display:grid; grid-auto-flow:column; align-items:center; gap:6px;
  padding:6px 10px; border-radius:999px;
  background:rgba(229,199,190,.18); border:1px solid var(--ring); color:var(--ink);
}
.navbar-right i{ font-size:14px; }
.navbar-right .right-text small{ display:none; }
.navbar-right .right-text strong{ font-size:12px; white-space:nowrap; letter-spacing:.01em; }

/* offset konten karena navbar 2-baris */
.page-wrap{ margin-top:120px; }

/* Judul & subjudul halaman */
.explore-title{
  font-family:"Playfair Display",serif; font-weight:600; letter-spacing:.12em;
  text-transform:uppercase; color:var(--ink);
}
.explore-subtitle{
  font-size:12px; letter-spacing:.18em; text-transform:uppercase;
  color:rgba(62,58,55,.7); margin-top:6px; margin-bottom:34px;
}

/* Kartu Explore: gaya lembut seperti "feature" di home */
.explore-container{ max-width:1120px; }
.explore-item{
  background:linear-gradient(180deg,var(--panel),var(--panel-2));
  border:1px solid var(--ring); border-radius:18px; padding:14px;
  box-shadow:var(--shadow);
  transition:transform .25s, box-shadow .25s, border-color .25s;
}
.explore-item:hover{ transform:translateY(-6px) scale(1.01); box-shadow:var(--shadow-h); border-color:rgba(229,199,190,.55); }
.explore-item img{ border-radius:14px; box-shadow:0 10px 24px rgba(0,0,0,.08); }
.explore-item h3{
  font-family:"Playfair Display",serif; font-weight:600; color:var(--ink);
  font-size:clamp(18px,2.2vw,22px); margin:16px 8px 6px;
}
.explore-item p{ color:var(--ink-2); line-height:1.8; margin:6px 8px 8px; text-align:left; }

/* Footer versi soft (hapus blok ini jika ingin footer gelap) */
footer{
  background:linear-gradient(180deg,var(--bg),var(--bg-soft)); color:var(--ink);
  border-top:1px solid var(--ring-2);
}
.footer-col h4, .footer-bottom a{ color:var(--ink); }
.footer-col ul li a{ color:var(--ink-2); }
.footer-col ul li a:hover{ color:var(--accent); text-decoration:underline; }
.footer-subscribe input{ border-bottom:1px solid var(--ink); color:var(--ink); }
.footer-subscribe button{
  background:linear-gradient(180deg,var(--panel),var(--panel-2));
  border:1px solid var(--ring); color:var(--ink);
}

  </style>
</head>
<body>

    <!-- ================= NAVBAR ================= -->
  <nav class="navbar">
    <div class="menu-area">
      <button class="menu-icon" aria-label="Buka menu">☰ <span>MENU</span></button>
    </div>

    <!-- BRAND: arahkan ke home section #hero -->
    <a class="navbar-brand" href="{{ url('/') }}#hero" aria-label="Villa Al Rasyid">
      <span class="brand-main">VILLA AL RASYID</span>
      <span class="brand-sub">VILLA · RESORT · PUNCAK</span>
    </a>

    <!-- Kapsul lokasi: tetap ke Google Maps, hilangkan </a> nyasar -->
    <a class="navbar-right"
       href="https://www.google.com/maps?q=Villa+Al+Rasyid,+Puncak+Bogor"
       target="_blank" rel="noopener noreferrer"
       aria-label="Buka lokasi di Google Maps">
      <i class="bi bi-geo-alt-fill"></i>
      <div class="right-text">
        <strong>Puncak Bogor</strong>
      </div>
    </a>

    <!-- MENU: arahkan ke section di halaman home -->
    <div class="nav-links">
      <a href="{{ url('/') }}#hero">Beranda</a>
      <a href="{{ url('/') }}#about">Tentang</a>
      <a href="{{ url('/') }}#facility">Fasilitas</a>
      <a href="{{ url('/') }}#review-section">Ulasan</a>
      <a href="{{ url('/') }}#reservasi">Reservasi</a>
    </div>
  </nav>

  <!-- ===== PAGE CONTENT (blog) ===== -->
  <main class="page-wrap">
    <!-- Judul Halaman -->
    <div class="explore-title"><strong>ALL</strong></div>
    <div class="explore-subtitle">explore puncak bogor</div>

    <!-- Konten -->
    <div class="explore-container">
      <div class="explore-item">
        <img src="images/kampung.jpg" alt="Kampung Rimba">
        <h3>Kampung Rimba by Annha</h3>
      </div>

      <div class="explore-item">
        <img src="images/kebun.tea.jpg" alt="Kebun Teh">
        <h3>Keindahan Alam di Sekitar Villa Al Rasyid</h3>
        <p>
          Kebun Teh Gunung Mas dan Kampung Rimba Camp terletak dekat dengan Villa Al Rasyid — cocok untuk wisata alam singkat yang menenangkan.
        </p>
      </div>

      <div class="explore-item">
        <img src="images/makanan_khas.jpg" alt="Kuliner Puncak">
        <h3>Kuliner Khas Puncak</h3>
        <p>
          Nasi Timbel jadi kuliner khas Sunda paling populer di Puncak. Selain itu, masih banyak makanan khas lain seperti Sate Maranggi, Soto Mie Bogor, dan Nasi Liwet yang wajib dicoba! 🍽
        </p>
      </div>

      <div class="explore-item">
        <img src="images/kitchen.jpg" alt="Interior Villa">
        <h3>Kenali Villa Al Rasyid Lebih Dekat</h3>
        <p>
          Villa Al Rasyid — Tempat peristirahatan tenang dengan udara sejuk dan pemandangan hijau. Suasana damai dan fasilitas nyaman menjadikannya pilihan ideal untuk beristirahat dan berkumpul bersama keluarga.
        </p>
      </div>
    </div>
  </main>

  <!-- ================= FOOTER ================= -->
  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <img src="images/logo.png" alt="Logo Villa Al Rasyid"/>
         <img src="images/logo_kami.png" alt="Logo Villa Al Rasyid"/>
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