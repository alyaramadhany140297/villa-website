<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Al Rasyid Villa</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Great+Vibes&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <style>
      body {
        font-family: "Poppins", sans-serif;
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
        font-family: "Great Vibes", cursive;
        font-weight: 400;
        color: white;
        text-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
        font-size: 5rem;
        letter-spacing: 1px;
        margin-bottom: 10px;
        animation: fadeText 1.5s ease;
      }

      .hero-content p {
        font-family: "Playfair Display", serif;
        font-size: 1rem;
        letter-spacing: 3px;
        color: white;
        text-shadow: 0 6px rgba(0, 0, 0, 0.3);
      }

      @keyframes fadeText {
        from {
          opacity: 0;
          transform: translateY(300px);
        }
        to {
          opacity: 1;
          transform: translateY(20px);
        }
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

      /* Tombol Check Availability */
      .btn-availability {
        position: absolute;
        bottom: 50px;
        right: 50px;
        background-color: white;
        color: #a99077;
        border: 1px solid #a99077;
        font-family: "Playfair Display", serif;
        font-weight: 400;
        letter-spacing: 3px;
        font-size: 1rem;
        padding: 15px 30px;
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

      /* About Section */
      .about-section {
        background-color: white;
        color: rgb(15, 14, 14);
        padding: 80px 0;
      }

      .video-box {
        background-image: url("images/video-thumbnail.jpg");
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

      /* 
<section id="facility" class="facility-bg">
  <div class="container">
    <div class="panel">
      <!-- features + carousel -->
    </div>
  </div>
</section>
*/

      /* Panel khusus section facility: teks gelap di atas panel coklat */
      /* Paksa judul di tengah */
      .panel.facility .section-title {
        text-align: center;
        margin: 0 auto 28px; /* center block jika ada lebar khusus */
        width: 100%;
      }

      /* Jika parent .panel memakai flex/grid, ini mengamankan posisi */
      .panel.facility {
        display: block;
      } /* aman default */
      @supports (display: flex) {
        .panel.facility {
          display: flex;
          flex-direction: column;
        }
        .panel.facility .section-title {
          align-self: center;
        }
      }

      /* Grid fitur rapi seperti contoh */
      .panel.facility .features {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 34px; /* jarak antar fitur */
        align-items: start;
        margin-bottom: 22px; /* jarak ke carousel */
      }
      @media (max-width: 1000px) {
        .panel.facility .features {
          grid-template-columns: repeat(2, 1fr);
        }
      }
      @media (max-width: 560px) {
        .panel.facility .features {
          grid-template-columns: 1fr;
        }
      }

      /* Ikon tanpa bingkai, ukuran konsisten, posisi di atas */
      /* BESARKAN IKON */
      .panel.facility .icon-wrap {
        width: 200px !important; /* ubah 200px jika perlu lebih besar/kecil */
        height: 200px !important;
        margin: 0 auto 16px;
        display: grid;
        place-items: center;
        border: 0;
        background: transparent;
        backdrop-filter: none;
      }
      .panel.facility .icon-wrap img,
      .panel.facility .icon-wrap svg {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain;
        display: block;
      }

      /* tata letak agar muat di layar lebih kecil */
      @media (max-width: 1100px) {
        .features {
          grid-template-columns: repeat(2, 1fr);
        }
      }
      @media (max-width: 640px) {
        .panel.facility .icon-wrap {
          width: 140px !important;
          height: 140px !important;
        }
      }

      /* Jika SVG perlu warna gelap */
      .panel.facility .icon-wrap svg {
        stroke: #111;
        fill: none;
      }

      /* Label huruf renggang seperti Figma */
      .panel.facility .feature .label {
        font-size: 0.86rem;
        letter-spacing: 0.12rem; /* dari .45rem */
        word-spacing: -0.22em;
        font-weight: 700;
        text-align: center;
        margin-top: 6px;
        color: #111;
        text-transform: uppercase;
      }

      /* Deskripsi sempit dan rata-tengah */
      .panel.facility .feature .desc {
        max-width: 260px;
        margin: 8px auto 0;
        font-size: 0.86rem;
        line-height: 1.55;
        color: rgba(0, 0, 0, 0.78);
        text-align: center;
      }

      /* Carousel tampak tiga kartu, sudut membulat dan panah di tepi */
      :root {
        --perView: 3;
      } /* 3 kartu di desktop */
      @media (max-width: 1000px) {
        :root {
          --perView: 2;
        }
      }
      @media (max-width: 560px) {
        :root {
          --perView: 1;
        }
      }

      .carousel {
        position: relative;
        overflow: hidden;
        border-radius: 16px;
        padding: 6px 40px; /* ruang untuk tombol kiri/kanan */
        background: transparent;
      }
      .track {
        display: flex;
        gap: 16px;
        transition: transform 0.4s ease;
      }
      .slide {
        flex: 0 0 calc((100% - (var(--perView) - 1) * 16px) / var(--perView));
      }
      .slide img {
        display: block;
        width: 100%;
        height: 220px; /* mirip tinggi contoh */
        object-fit: cover;
        border-radius: 16px; /* sudut membulat seperti contoh */
      }
      @media (min-width: 760px) {
        .slide img {
          height: 260px;
        }
      }
      @media (min-width: 1100px) {
        .slide img {
          height: 300px;
        }
      }

      /* Tombol panah mengambang di kiri/kanan area carousel */
      .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 36px;
        height: 36px;
        border: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.94);
        color: #333;
        display: grid;
        place-items: center;
        cursor: pointer;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
      }
      .arrow.left {
        left: 8px;
      }

      .arrow.right {
        right: 8px;
      }
      .arrow:disabled {
        opacity: 0.4;
        cursor: not-allowed;
      }
      .arrow svg {
        width: 20px;
        height: 20px;
      }

      /* Jarak antara blok fitur (ikon) dan foto di bawahnya */
      .panel.facility .features {
        margin-bottom: 56px; /* ubah 40–72px sesuai kebutuhan */
      }

      /* Jika kontainer foto bernama .carousel/.gallery, beri top margin juga */
      .panel.facility .carousel,
      .panel.facility .gallery {
        margin-top: 12px;
      }

      /* Versi mobile lebih rapat sedikit */
      @media (max-width: 768px) {
        .panel.facility .features {
          margin-bottom: 28px;
        }
      }

      /* kecilkan foto di carousel fasilitas */
      #fac-carousel .track {
        display: flex;
        gap: 16px;
      }

      #fac-carousel .slide {
        flex: 0 0 28%; /* tampilkan beberapa foto sekaligus */
        max-width: 28%;
      }

      #fac-carousel .slide img {
        width: 100%;
        height: 180px; /* kecilkan tinggi di sini */
        object-fit: cover;
        border-radius: 16px;
      }

      @media (max-width: 768px) {
        #fac-carousel .slide {
          flex: 0 0 46%;
          max-width: 46%;
        }
        #fac-carousel .slide img {
          height: 140px;
        }
      }

      /* ------ ANIMASI HOVER ------ */
      .panel.facility .icon-wrap {
        transition:
          transform 0.35s cubic-bezier(0.2, 0.8, 0.2, 1),
          box-shadow 0.35s;
      }
      .panel.facility .feature:hover .icon-wrap {
        transform: translateY(-6px) scale(1.06);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.22);
      }
      .panel.facility .label {
        transition: letter-spacing 0.3s ease, opacity 0.3s ease;
      }
      .panel.facility .feature:hover .label {
        letter-spacing: 0.18em;
        opacity: 0.95;
      }

      /* ------ REVEAL SAAT DISCROLL ------ */
      .panel.facility .feature {
        opacity: 0;
        transform: translateY(18px);
        will-change: transform, opacity;
      }
      .panel.facility .feature.is-in {
        opacity: 1;
        transform: none;
        transition: transform 0.55s ease, opacity 0.55s ease;
        transition-delay: calc(var(--i, 0) * 90ms); /* stagger */
      }

      /* hormati preferensi user */
      @media (prefers-reduced-motion: reduce) {
        .panel.facility .feature,
        .panel.facility .icon-wrap,
        .panel.facility .feature.is-in {
          transition: none !important;
          animation: none !important;
        }
      }
      /* ANIMASI untuk label & kalimat penjelasan (.desc) */

      /* keadaan awal */
      .panel.facility .label,
      .panel.facility .desc {
        opacity: 0;
        transform: translateY(10px);
      }

      /* muncul saat discroll (staggered) */
      .panel.facility .feature.is-in .label {
        opacity: 1;
        transform: none;
        transition: opacity 0.45s ease, transform 0.45s ease;
        transition-delay: calc(var(--i, 0) * 90ms + 80ms);
      }
      .panel.facility .feature.is-in .desc {
        opacity: 1;
        transform: none;
        transition: opacity 0.55s ease, transform 0.55s ease;
        transition-delay: calc(var(--i, 0) * 90ms + 160ms);
      }

      /* interaksi hover */
      .panel.facility .feature:hover .desc {
        transform: translateY(-2px);
        transition: transform 0.25s ease;
      }

      /* hormati preferensi reduce motion */
      @media (prefers-reduced-motion: reduce) {
        .panel.facility .label,
        .panel.facility .desc {
          transition: none !important;
          transform: none !important;
          opacity: 1 !important;
        }
      }

      /* Animasi slide + fokus slide aktif */
      #fac-carousel {
        position: relative;
        overflow: hidden;
      }
      #fac-carousel .track {
        display: flex;
        transition: transform 0.55s cubic-bezier(0.22, 0.8, 0.2, 1);
        will-change: transform;
      }
      #fac-carousel .slide {
        flex: 0 0 100%;
      }
      #fac-carousel .slide img {
        width: 100%;
        height: 420px;
        object-fit: cover;
        display: block;
        border-radius: 16px;
        transition:
          transform 0.8s ease,
          filter 0.8s ease,
          opacity 0.4s ease;
      }
      #fac-carousel .slide:not(.is-active) img {
        transform: scale(0.96);
        filter: saturate(0.92) brightness(0.98);
        opacity: 0.95;
      }
      #fac-carousel .slide.is-active img {
        transform: scale(1.02);
      }

      @media (max-width: 768px) {
        #fac-carousel .slide img {
          height: 220px;
        }
      }

      /* Bentuk foto carousel seperti contoh */
      #fac-carousel {
        position: relative;
        padding: 0 44px;
      }
      #fac-carousel .track {
        display: flex;
        gap: 16px;
      }

      #fac-carousel .slide {
        position: relative;
        flex: 0 0 31%; /* tiga foto terlihat */
        aspect-ratio: 16/9; /* proporsi lebar */
        border-radius: 22px; /* sudut membulat */
        overflow: hidden; /* potong ke radius */
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.18);
      }
      #fac-carousel .slide::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: inherit;
        box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.85); /* garis putih tipis */
        pointer-events: none;
      }
      #fac-carousel .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }

      /* tombol panah bulat putih */
      #fac-carousel .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 0;
        background: #fff;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
      }
      #fac-carousel .arrow.left {
        left: 8px;
      }
      #fac-carousel .arrow.right {
        right: 8px;
      }

      /* responsif */
      @media (max-width: 768px) {
        #fac-carousel .slide {
          flex: 0 0 46%;
          aspect-ratio: 4/3;
          border-radius: 16px;
        }
      }

      /* swipe yang halus + aman di touch */
      #fac-carousel {
        user-select: none;
        touch-action: pan-y;
      }
      #fac-carousel .track {
        cursor: grab;
        will-change: transform;
      }
      #fac-carousel.dragging .track {
        cursor: grabbing;
      }

      /* Animasi zoom saat gambar muncul di lightbox */
      #facLightboxImg.lb-in {
        animation: facZoom 0.35s cubic-bezier(0.22, 0.8, 0.2, 1);
      }
      @keyframes facZoom {
        from {
          transform: scale(0.96);
          opacity: 0.2;
        }
        to {
          transform: scale(1);
          opacity: 1;
        }
      }

      /* animasi judul Interior & Facility */
      .panel.facility .section-title {
        text-align: center;
        margin: 0 auto 28px;
        width: 100%;
        opacity: 0;
        transform: translateY(12px) scale(0.98);
        filter: blur(1px);
        display: inline-block; /* agar underline bisa dianimasikan */
        background:
          linear-gradient(currentColor, currentColor) left bottom / 0 2px
            no-repeat; /* underline */
        padding-bottom: 6px;
      }

      .panel.facility .section-title.is-in {
        animation: facTitleIn 0.6s cubic-bezier(0.22, 0.8, 0.2, 1) forwards;
      }

      @keyframes facTitleIn {
        0% {
          opacity: 0;
          transform: translateY(12px) scale(0.98);
          filter: blur(1px);
          background-size: 0 2px;
        }
        100% {
          opacity: 1;
          transform: none;
          filter: blur(0);
          background-size: 100% 2px;
        }
      }

      /* latar untuk Interior & Facility */
      .facility-bg {
        background: #a99077; /* samakan dengan contoh */
        padding: 72px 0; /* ruang atas-bawah */
        color: #111; /* teks gelap seperti mockup */
      }
      .facility-bg .section-title {
        color: #111;
      } /* pastikan judul tetap gelap */
      @media (max-width: 768px) {
        .facility-bg {
          padding: 48px 0;
        }
      }

      .panel.facility .section-title {
        font-family: "Playfair Display", serif;
        font-weight: 600;
        font-size: clamp(28px, 3.2vw, 44px);
        line-height: 1.15;
        letter-spacing: 0.02em;
        text-transform: none;
      }

      /* coklat lebih tua untuk blok Interior & Fasilitas */
      .facility-bg {
        background: #8b725c; /* lebih tua dari #a99077 */
      }

      /* kartu fitur: lift + glow + shine */
      .panel.facility .feature {
        position: relative;
        border-radius: 18px;
        padding: 18px 14px;
        background: rgba(255, 255, 255, 0.04);
        transition:
          transform 0.45s cubic-bezier(0.22, 0.8, 0.2, 1),
          box-shadow 0.45s,
          background 0.45s;
        will-change: transform;
      }
      .panel.facility .feature:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.28);
        background: rgba(255, 255, 255, 0.06);
      }
      /* efek kilau menyapu */
      .panel.facility .feature::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
          120deg,
          transparent 20%,
          rgba(255, 255, 255, 0.18) 45%,
          transparent 70%
        );
        transform: translateX(-120%) skewX(-15deg);
        transition: transform 0.85s;
        pointer-events: none;
      }
      .panel.facility .feature:hover::after {
        transform: translateX(120%) skewX(-15deg);
      }

      /* ikon membesar halus + glow */
      .panel.facility .icon-wrap {
        position: relative;
      }
      .panel.facility .icon-wrap::before {
        content: "";
        position: absolute;
        inset: -6px;
        border-radius: 20px;
        background:
          radial-gradient(
            120px 120px at 50% 40%,
            rgba(255, 255, 255, 0.22),
            transparent 60%
          );
        opacity: 0;
        transition: opacity 0.45s;
      }
      .panel.facility .feature:hover .icon-wrap::before {
        opacity: 1;
      }
      .panel.facility .icon-wrap img {
        transition: transform 0.5s, filter 0.5s;
      }
      .panel.facility .feature:hover .icon-wrap img {
        transform: scale(1.06);
        filter: saturate(1.05) contrast(1.04);
      }

      /* jaga kontras teks di latar lebih gelap */
      .panel.facility .feature .label {
        color: #111;
      }
      .panel.facility .feature .desc {
        color: rgba(0, 0, 0, 0.82);
      }

      /* sedikit lebih kecil */
      .panel.facility .features {
        gap: 26px;
      }
      .panel.facility .feature {
        padding: 14px 12px;
      }

      .panel.facility .icon-wrap {
        width: 170px !important;
        height: 170px !important;
      }
      @media (max-width: 640px) {
        .panel.facility .icon-wrap {
          width: 120px !important;
          height: 120px !important;
        }
      }

      .panel.facility .feature .label {
        font-size: 0.8rem;
      }
      .panel.facility .feature .desc {
        font-size: 0.82rem;
        line-height: 1.5;
      }

      /* jika perlu kecilkan tinggi gambar carousel */
      #fac-carousel .slide img {
        height: 160px;
      }
      @media (max-width: 768px) {
        #fac-carousel .slide img {
          height: 120px;
        }
      }
    </style>
  </head>

  <!--
<section class="section" id="facility">
  <div class="container">
    <div class="panel facility">
-->

  <body>
    <nav class="navbar">
      <div class="menu-area">
        <div class="menu-icon">☰ Menu</div>
        <div class="lang-switch">
          <a href="#">English</a>
        </div>
      </div>
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="Al Rasyid Villa" />
      </a>
      <div style="width: 190px"></div>
    </nav>

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
            <h6>LIBURAN TENANG DENGAN VIEW GUNUNG &amp; CITY LIGHT</h6>
            <p>
              Sedang mencari tempat liburan dengan suasana tenang, udara sejuk,
              dan pemandangan yang menakjubkan? Villa Al Rasyid, yang berlokasi
              di kawasan Puncak Bogor, siap menjadi destinasi sempurna untuk
              Anda dan keluarga.
            </p>
            <p>
              Dikelilingi panorama alam yang asri, villa ini menawarkan
              pengalaman menginap dengan pemandangan pegunungan hijau di siang
              hari dan gemerlap city light di malam hari. Setiap sudut dirancang
              untuk menghadirkan kenyamanan sekaligus harmoni dengan alam,
              menjadikannya tempat ideal untuk melepas penat dari hiruk pikuk
              perkotaan.
            </p>
            <p>
              Villa Al Rasyid dilengkapi dengan fasilitas modern — mulai dari
              kolam renang pribadi, dapur lengkap, hingga ruang keluarga yang
              luas. Semua dipersiapkan agar waktu Anda di Puncak terasa hangat,
              nyaman, dan berkesan.
            </p>
            <p>
              Nikmati kesejukan udara khas Puncak, bangun pagi dengan view
              pegunungan yang memukau, lalu akhiri malam dengan panorama city
              light yang menenangkan. Di sini, setiap momen liburan akan terasa
              istimewa.
            </p>
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

    <section class="section facility-bg" id="facility">
      <div class="container">
        <div class="panel facility">
          <h2 class="section-title">Interior &amp; Facility</h2>

          <div class="features">
            <div class="feature">
              <div class="icon-wrap">
                <img src="/images/karaoke-removebg-preview.png" alt="Karaoke" />
              </div>
              <div class="label">K A R A O K E</div>
              <p class="desc">
                Siapkan suara terbaik Anda. Fasilitas karaoke modern kami
                menjamin malam yang penuh tawa dan lagu.
              </p>
            </div>

            <div class="feature">
              <div class="icon-wrap">
                <img src="/images/swimm-removebg-preview.png" alt="Swimming Pool" />
              </div>
              <div class="label" aria-label="Swimming Pool">
                S W I M M I N G&nbsp;P O O L
              </div>

              <p class="desc">
                Bersantai dan segarkan diri di kolam renang eksklusif vila.
                Cocok untuk semua usia.
              </p>
            </div>

            <div class="feature">
              <div class="icon-wrap">
                <img src="/images/wifi-removebg-preview.png" alt="Wi-Fi" />
              </div>
              <div class="label">W I F I</div>
              <p class="desc">
                Koneksi internet nirkabel stabil dan cepat tersedia gratis
                untuk semua tamu.
              </p>
            </div>

            <div class="feature">
              <div class="icon-wrap">
                <img src="/images/airpanas-removebg-preview.png" alt="Air Panas" />
              </div>
              <div class="label">A I R &nbsp; P A N A S</div>
              <p class="desc">
                Nikmati suasana tenang bernuansa alami dengan berendam air
                panas.
              </p>
            </div>
          </div>
        </div>

        <!-- Carousel multi-kartu -->
        <div class="carousel" id="fac-carousel">
          <button class="arrow left" aria-label="Sebelumnya" data-dir="-1">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M15 6L9 12l6 6" stroke="currentColor" stroke-width="2" />
            </svg>
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
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" />
            </svg>
          </button>
        </div>
      </div>
    </section>

    <!-- Lightbox Foto -->
    <div class="modal fade" id="facLightbox" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content bg-black bg-opacity-75 border-0">
          <button
            type="button"
            class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
          <div class="modal-body p-0 d-flex align-items-center justify-content-center position-relative">
            <img
              id="facLightboxImg"
              src=""
              alt=""
              class="img-fluid"
              style="max-height: 90vh"
            />
            <button
              class="btn btn-light rounded-circle position-absolute"
              id="lbPrev"
              aria-label="Sebelumnya"
              style="left: 16px"
            >
              &#10094;
            </button>
            <button
              class="btn btn-light rounded-circle position-absolute"
              id="lbNext"
              aria-label="Berikutnya"
              style="right: 16px"
            >
              &#10095;
            </button>
          </div>
        </div>
      </div>
    </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      // Navbar shrink
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        navbar.classList.toggle("scrolled", window.scrollY > 80);
      });

      // Hero slideshow
      const slides = document.querySelectorAll(".hero img");
      let current = 0;
      function changeSlide() {
        slides[current].classList.remove("active");
        current = (current + 1) % slides.length;
        slides[current].classList.add("active");
      }
      setInterval(changeSlide, 4000);

      // Video modal autoplay
      const videoModal = document.getElementById("videoModal");
      const videoIframe = document.getElementById("villaVideo");
      const videoURL = "https://www.youtube.com/embed/Zg7E5t_1pXo";
      videoModal.addEventListener("show.bs.modal", () => {
        videoIframe.src = videoURL + "?autoplay=1";
      });
      videoModal.addEventListener("hidden.bs.modal", () => {
        videoIframe.src = "";
      });

      (function () {
        const root = document.documentElement;
        const wrap = document.getElementById("fac-carousel");
        const track = wrap.querySelector(".track");
        const slides = [...track.children];
        const btnL = wrap.querySelector(".arrow.left");
        const btnR = wrap.querySelector(".arrow.right");
        let index = 0;

        function perView() {
          return Math.max(1, parseInt(getComputedStyle(root).getPropertyValue("--perView")) || 1);
        }
        function gapPx() {
          const g = getComputedStyle(track).gap || "16px";
          return parseFloat(g);
        }
        function slideW() {
          return slides[0].getBoundingClientRect().width;
        }
        function maxIndex() {
          return Math.max(0, slides.length - perView());
        }
        function update() {
          const offset = index * (slideW() + gapPx());
          track.style.transform = translateX(${-offset}px);
          btnL.disabled = index <= 0;
          btnR.disabled = index >= maxIndex();
        }
        function go(dir) {
          index = Math.min(Math.max(index + dir, 0), maxIndex());
          update();
        }
        btnL.addEventListener("click", () => {
          go(-1);
          pauseThenResume();
        });
        btnR.addEventListener("click", () => {
          go(1);
          pauseThenResume();
        });
        window.addEventListener("resize", update);

        /* --- Reveal on scroll (stagger) --- */
        const io = new IntersectionObserver(
          (entries) => {
            entries.forEach((e) => {
              if (e.isIntersecting) {
                e.target.classList.add("in");
                io.unobserve(e.target);
              }
            });
          },
          { threshold: 0.15 }
        );
        // Tambah kelas dan jeda bertahap
        [...document.querySelectorAll(".feature, .slide")].forEach((el, i) => {
          el.classList.add("reveal");
          el.style.transitionDelay = i * 80 + "ms";
          io.observe(el);
        });

        /* --- Auto-play, pause on hover --- */
        let timer = null;
        function startAuto() {
          stopAuto();
          timer = setInterval(() => {
            if (index >= maxIndex()) index = -1;
            go(1);
          }, 3500);
        }
        function stopAuto() {
          if (timer) {
            clearInterval(timer);
            timer = null;
          }
        }
        function pauseThenResume() {
          stopAuto();
          setTimeout(startAuto, 6000);
        }
        wrap.addEventListener("pointerenter", stopAuto);
        wrap.addEventListener("pointerleave", startAuto);

        update();
        startAuto();
      })();
    </script>

    <script>
      // Stagger + reveal on scroll
      (function () {
        const items = document.querySelectorAll(".panel.facility .feature");
        items.forEach((el, i) => el.style.setProperty("--i", i));
        const io = new IntersectionObserver(
          (entries) => {
            entries.forEach((e) => {
              if (e.isIntersecting) {
                e.target.classList.add("is-in");
                io.unobserve(e.target);
              }
            });
          },
          { root: null, threshold: 0.2 }
        );
        items.forEach((el) => io.observe(el));
      })();
    </script>

    <script>
      (function () {
        const root = document.querySelector("#fac-carousel");
        if (!root) return;
        const track = root.querySelector(".track");
        const slides = Array.from(track.children);
        const prev = root.querySelector(".arrow.left");
        const next = root.querySelector(".arrow.right");

        let index = 0,
          timer = null;

        function set(i) {
          index = (i + slides.length) % slides.length;
          track.style.transform = "translateX(" + -index * 100 + "%)";
          slides.forEach((s, k) => s.classList.toggle("is-active", k === index));
        }
        function play() {
          stop();
          timer = setInterval(() => set(index + 1), 5000);
        }
        function stop() {
          if (timer) {
            clearInterval(timer);
            timer = null;
          }
        }

        prev && prev.addEventListener("click", () => set(index - 1));
        next && next.addEventListener("click", () => set(index + 1));
      })(); // tutup IIFE yang belum tertutup

      // swipe
      // <script>
      (function () {
        const root = document.querySelector("#fac-carousel");
        if (!root) return;

        const track = root.querySelector(".track");
        const slides = Array.from(track.children);
        const prev = root.querySelector(".arrow.left");
        const next = root.querySelector(".arrow.right");

        let index = 0,
          timer = null;

        function set(i) {
          index = (i + slides.length) % slides.length;
          track.style.transition = "transform .55s cubic-bezier(.22,.8,.2,1)";
          track.style.transform = translateX(${ -index * 100 }%);
          slides.forEach((s, k) => s.classList.toggle("is-active", k === index));
        }
        function play() {
          stop();
          timer = setInterval(() => set(index + 1), 5000);
        }
        function stop() {
          if (timer) {
            clearInterval(timer);
            timer = null;
          }
        }

        prev && prev.addEventListener("click", () => set(index - 1));
        next && next.addEventListener("click", () => set(index + 1));
        root.addEventListener("mouseenter", stop);
        root.addEventListener("mouseleave", play);
        root.tabIndex = 0;
        root.addEventListener("keydown", (e) => {
          if (e.key === "ArrowLeft") set(index - 1);
          if (e.key === "ArrowRight") set(index + 1);
        });

        // ----- SWIPE KEREN -----
        let down = false,
          startX = 0,
          lastX = 0,
          lastT = 0,
          dx = 0,
          v = 0,
          slideW = 0;

        function rubber(x) {
          // resist saat mentok
          const lim = slideW;
        }

        // pause saat hover
        root.addEventListener("mouseenter", stop);
        root.addEventListener("mouseleave", play);

        // keyboard
        root.setAttribute("tabindex", "0");
        root.addEventListener("keydown", (e) => {
          if (e.key === "ArrowLeft") set(index - 1);
          if (e.key === "ArrowRight") set(index + 1);
        });

        set(0);
        play();
      })();
    </script>

    <script>
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

        // klik slide -> buka lightbox
        track.addEventListener("click", (e) => {
          const img = e.target.closest(".slide img");
          if (!img) return;
          const i = imgs.indexOf(img);
          if (i >= 0) show(i);
        });

        // navigasi tombol
        btnPrev.addEventListener("click", () => show(idx - 1));
        btnNext.addEventListener("click", () => show(idx + 1));

        // animasi saat gambar selesai dimuat
        modalImg.addEventListener("load", () => modalImg.classList.add("lb-in"));

        // panah keyboard saat modal aktif
        modalEl.addEventListener("shown.bs.modal", () => modalEl.focus());
        modalEl.addEventListener("keydown", (e) => {
          if (e.key === "ArrowLeft") show(idx - 1);
          if (e.key === "ArrowRight") show(idx + 1);
        });
      })();
    </script>

    <script>
      // Stagger + reveal on scroll
      (function () {
        const items = document.querySelectorAll(
          ".panel.facility .feature, .panel.facility .section-title"
        );
        items.forEach((el, i) => el.style.setProperty("--i", i));
        const io = new IntersectionObserver(
          (entries) => {
            entries.forEach((e) => {
              if (e.isIntersecting) {
                e.target.classList.add("is-in");
                io.unobserve(e.target);
              }
            });
          },
          { root: null, threshold: 0.2 }
        );
        items.forEach((el) => io.observe(el));
      })();
    </script>
    </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        navbar.classList.toggle("scrolled", window.scrollY > 80);
      });

      const slides = document.querySelectorAll(".hero img");
      let current = 0;
      function changeSlide() {
        slides[current].classList.remove("active");
        current = (current + 1) % slides.length;
        slides[current].classList.add("active");
      }
      setInterval(changeSlide, 4000);

      const videoModal = document.getElementById("videoModal");
      const videoIframe = document.getElementById("villaVideo");
      const videoURL = "https://www.youtube.com/embed/Zg7E5t_1pXo";
      videoModal.addEventListener("show.bs.modal", () => {
        videoIframe.src = videoURL + "?autoplay=1";
      });
      videoModal.addEventListener("hidden.bs.modal", () => {
        videoIframe.src = "";
      });
    </script>
  </body>
</html>