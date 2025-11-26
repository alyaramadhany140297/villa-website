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

    /* ===== NAVBAR (copy dari home) ===== */
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

    /* ===== Footer (copy dari home) ===== */
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

  <!-- NAVBAR (sama seperti home) -->
  <nav class="navbar">
    <div class="menu-area">
      <button class="menu-icon" aria-label="Open menu">☰ <span>MENU</span></button>
    </div>

    <a class="navbar-brand" href="{{ url('/') }}" aria-label="Al Rasyid Villa">
      <img src="{{ asset('images/logo_2-removebg-preview(1).png') }}" alt="Logo Villa Al-Rasyid"/>
    </a>

    <a class="navbar-right" href="https://www.google.com/maps?q=Villa+Al+Rasyid,+Puncak+Bogor" target="_blank" rel="noopener" aria-label="Buka lokasi di Google Maps">
      <i class="bi bi-geo-alt-fill"></i>
      <div class="right-text"><strong>Puncak, Bogor</strong><small>Jawa Barat, Indonesia</small></div>
    </a>

    <div class="nav-links">
      <a href="{{ url('/') }}#hero">Home</a>
      <a href="{{ url('/') }}#about">About</a>
      <a href="{{ url('/') }}#facility">Facility</a>
      <a href="{{ url('/') }}#review-section">Review</a>
      <a href="{{ route('our_blog') }}">Our Blog</a>
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
        <img src="/gambar1.jpg" alt="Kampung Rimba">
        <h3>Kampung Rimba by Annha</h3>
      </div>

      <div class="explore-item">
        <img src="/gambar2.jpg" alt="Kebun Teh">
        <h3>Keindahan Alam di Sekitar Villa Al Rasyid</h3>
        <p>
          Kebun Teh Gunung Mas dan Kampung Rimba Camp terletak dekat dengan Villa Al Rasyid — cocok untuk wisata alam singkat yang menenangkan.
        </p>
      </div>

      <div class="explore-item">
        <img src="/gambar3.jpg" alt="Kuliner Puncak">
        <h3>Kuliner Khas Puncak</h3>
        <p>
          Nasi Timbel jadi kuliner khas Sunda paling populer di Puncak. Selain itu, masih banyak makanan khas lain seperti Sate Maranggi, Soto Mie Bogor, dan Nasi Liwet yang wajib dicoba! 🍽
        </p>
      </div>

      <div class="explore-item">
        <img src="/gambar4.jpg" alt="Interior Villa">
        <h3>Kenali Villa Al Rasyid Lebih Dekat</h3>
        <p>
          Villa Al Rasyid — Tempat peristirahatan tenang dengan udara sejuk dan pemandangan hijau. Suasana damai dan fasilitas nyaman menjadikannya pilihan ideal untuk beristirahat dan berkumpul bersama keluarga.
        </p>
      </div>
    </div>
  </main>

  <!-- ===== FOOTER (sama seperti home) ===== -->
  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <img src="{{ asset('images/logo_2-removebg-preview(1).png') }}" alt="Villa Al-Rasyid Logo"/>
        <div class="social-icons">
          <a href="https://www.instagram.com/villa_alrasyid_puncak?igsh=eHR4N2Q5aHp3Y2l0" target="_blank" rel="noopener" aria-label="Instagram Villa Al Rasyid"><i class="fab fa-instagram"></i></a>
          <a href="https://www.tiktok.com/@villaalrasyidpuncak?_r=1&_t=ZS-91bSYRoQD9r" target="_blank" rel="noopener" aria-label="TikTok Villa Al Rasyid"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>

      <div class="footer-col">
        <h4>ABOUT</h4>
        <ul><li><a href="{{ route('our_blog') }}">Our Blog</a></li></ul>
      </div>

      <div class="footer-col">
        <h4>CONTACT US</h4>
        <ul>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#faqModal">Send a Message</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>LOCATION</h4>
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

  <!-- FAQ Modal (opsional, sama seperti home agar link "Send a Message" berfungsi) -->
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

  <!-- Scripts SAMA seperti home -->
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

    // Subscribe form fallback
    (function(){
      const sf = document.getElementById('subscribeForm');
      if (sf) sf.addEventListener('submit', function(e){
        e.preventDefault();
        alert('Terima kasih sudah berlangganan informasi dari Villa Al-Rasyid!');
        this.reset();
      });
    })();
  </script>
</body>
</html>
