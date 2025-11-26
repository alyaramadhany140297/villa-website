<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kebijakan Privasi • Villa Al Rasyid</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet"/>

<style>
  :root{ --cream:#9C8B73; --ink:#2A2723; --footer:#897B66; --topbarH:64px }
  *{box-sizing:border-box}
  body{margin:0;font-family:Poppins,sans-serif;color:var(--ink);background:#F6F1E8;padding-top:var(--topbarH)}
  .container-narrow{max-width:900px;margin:0 auto;padding:0 20px}

  /* topbar */
  .topbar{position:fixed;inset:0 0 auto 0;height:var(--topbarH);z-index:1000;background:rgba(156,139,115,.92);backdrop-filter:saturate(120%) blur(6px);box-shadow:0 8px 18px rgba(0,0,0,.12)}
  .topbar-inner{height:100%;display:grid;grid-template-columns:1fr auto 1fr;align-items:center}
  .menu-trigger,.lang{border:0;background:transparent;color:#fff;font-weight:700}
  .brand img{height:44px;display:block;margin-inline:auto}
  .menu-panel{position:fixed;top:var(--topbarH);left:0;right:0;background:#F6F1E8;border-bottom:1px solid rgba(0,0,0,.08);box-shadow:0 18px 36px rgba(0,0,0,.16);transform:translateY(-8px);opacity:0;pointer-events:none;transition:.28s;padding:16px 0;z-index:999}
  .menu-panel.open{transform:translateY(0);opacity:1;pointer-events:auto}
  .menu-list{list-style:none;margin:0;padding:0;display:flex;gap:28px;justify-content:center;flex-wrap:wrap}
  .menu-cta{display:inline-flex;align-items:center;gap:8px;margin:12px auto;padding:10px 18px;border-radius:999px;background:var(--cream);color:#fff;font-weight:700}

  /* header section */
  .hero{background:#efe9df;border-bottom:1px solid rgba(0,0,0,.06)}
  .hero .inner{min-height:150px;display:grid;align-content:center;gap:8px}
  h1{font-family:"Playfair Display",serif;margin:0;font-size:clamp(26px,4vw,40px)}
  .lead{color:#6f6253}

  /* content */
  .content{margin:28px 0 70px}
  .content p{line-height:1.9;margin:0 0 16px;text-align:justify}
  .badge{display:inline-block;background:#fff;border:1px solid rgba(0,0,0,.08);padding:.25rem .55rem;border-radius:999px;font-size:.78rem;color:#6a5b49;margin-right:6px}

  /* footer (897B66) */
  footer{background:#897B66;color:#fff;padding:60px 80px 28px}
  .fwrap{max-width:1100px;margin:0 auto}
  .grid{display:grid;grid-template-columns:1.5fr 1fr 1fr 1fr;gap:40px}
  @media (max-width:900px){footer{padding:50px 24px}.grid{grid-template-columns:1fr 1fr}}
  .flogo img{width:160px;margin-bottom:15px}
  .social a{color:#fff;font-size:20px;margin-right:14px;opacity:.95}
  .fcol h4{margin:0 0 14px}
  .fcol ul{list-style:none;margin:0;padding:0}
  .fcol li{margin:8px 0}
  .fcol a{color:#f7f7f7}
  .sub{grid-column:1/-1;margin-top:18px;padding-top:18px;border-top:1px solid rgba(255,255,255,.18);display:flex;gap:12px;flex-wrap:wrap;align-items:center;justify-content:space-between}
  .sub form{display:flex;gap:10px}
  .sub input{background:transparent;border:none;border-bottom:1px solid #fff;color:#fff;padding:6px 0;min-width:150px}
  .sub button{background:#fff;color:#3b332b;border:none;padding:8px 18px;border-radius:6px;font-weight:700}
  .bot{margin-top:16px;border-top:1px solid rgba(255,255,255,.18);padding-top:14px;display:flex;justify-content:space-between;flex-wrap:wrap}
  .bot a{color:#fff;text-decoration:none;margin-left:18px}
</style>
</head>
<body>

<header class="topbar">
  <div class="container-narrow topbar-inner">
    <button class="menu-trigger" id="menuToggle"><i class="bi bi-list"></i> Menu</button>
    <a class="brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
    <button class="lang" id="langToggle" type="button">ENGLISH</button>
  </div>
  <nav class="menu-panel" id="menuPanel">
    <ul class="menu-list">
      <li><a href="{{ url('/#about') }}">About</a></li>
      <li><a href="{{ url('/our_story') }}">Our Story</a></li>
      <li><a href="{{ url('/our_blog') }}">Our Blog</a></li>
    </ul>
    <a class="menu-cta" href="{{ url('/#reservation') }}"><i class="bi bi-whatsapp"></i> Reservasi</a>
  </nav>
</header>

<section class="hero">
  <div class="container-narrow inner">
    <h1>Kebijakan Privasi</h1>
    <p class="lead">Bagaimana kami mengelola data & menjaga kepercayaan Anda.</p>
  </div>
</section>

<main class="container-narrow content">
  <p><span class="badge">1</span> <b>Villa Al Rasyid</b> menghargai privasi setiap pengunjung. Situs ini bertujuan memberikan informasi seputar villa dan membantu pemesanan.</p>
  <p><span class="badge">2</span> Kami tidak mengumpulkan data pribadi tanpa persetujuan. Data yang Anda kirim (mis. formulir atau pesan) hanya untuk komunikasi & layanan.</p>
  <p><span class="badge">3</span> Kami tidak membagikan informasi pribadi kepada pihak ketiga kecuali diwajibkan hukum, serta berupaya menjaga keamanan data.</p>
  <p><span class="badge">4</span> Tautan eksternal pada situs ini memiliki kebijakan masing-masing. Silakan tinjau kebijakan privasi situs tujuan.</p>
  <p><span class="badge">5</span> Kebijakan dapat diperbarui sewaktu-waktu. Dengan menggunakan situs, Anda menyetujui ketentuan yang berlaku.</p>
  <p><i>Terakhir diperbarui: 17 Oktober 2025.</i></p>
</main>

<footer>
  <div class="fwrap">
    <div class="flogo">
      <img src="{{ asset('images/logo.png') }}" alt="Villa Al-Rasyid Logo">
      <div class="social">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-tiktok"></i></a>
      </div>
    </div>
    <div class="fcol">
      <h4>ABOUT</h4>
      <ul>
        <li><a href="{{ url('/#about') }}">About</a></li>
        <li><a href="{{ url('/our_story') }}">Our Story</a></li>
        <li><a href="{{ url('/our_blog') }}">Our Blog</a></li>
      </ul>
    </div>
    <div class="fcol">
      <h4>CONTACT US</h4>
      <ul>
        <li><a href="{{ url('/#reservation') }}">Reservasi</a></li>
        <li><a href="#">Support</a></li>
      </ul>
    </div>
    <div class="fcol">
      <h4>LOCATION</h4>
      <p>Jl. Pelita Kp. Baru Jeruk<br/>Cisarua Bogor, Jawa Barat</p>
    </div>

    <div class="subscribe">
      <p>STAY IN TOUCH FOR EXCLUSIVE OFFERS, SPECIALS AND NEWS.</p>
      <form class="subform" id="subscribeForm">
        <input type="text" placeholder="FIRST NAME" required>
        <input type="email" placeholder="EMAIL" required>
        <button type="submit">SUBSCRIBE</button>
      </form>
    </div>

    <div class="fbot">
      <span>VILLA AL – RASYID 1997.</span>
      <div>
        <a href="{{ url('/kebijakan_privasi') }}">Kebijakan Privasi</a>
        <a href="{{ url('/persyaratan_pengguna') }}">Persyaratan Pengguna</a>
      </div>
    </div>
  </div>
</footer>
<script>
  document.getElementById('subscribeForm')?.addEventListener('submit',e=>{e.preventDefault();alert('Terima kasih!');e.target.reset();});
</script>

<script>
  // menu toggle
  (function(){
    const btn = document.getElementById('menuToggle'), panel=document.getElementById('menuPanel');
    const close=()=>{panel.classList.remove('open');document.removeEventListener('click',out,true)}
    const open =()=>{panel.classList.add('open');document.addEventListener('click',out,true)}
    const out=(e)=>{ if(!panel.contains(e.target) && e.target!==btn) close(); }
    btn.addEventListener('click',()=> panel.classList.contains('open')?close():open());
    panel.querySelectorAll('a').forEach(a=>a.addEventListener('click',close));
  })();
  // subscribe demo
  document.getElementById('subscribeForm').addEventListener('submit',e=>{e.preventDefault();alert('Terima kasih!');e.target.reset();});
  // fake language toggle
  document.getElementById('langToggle').addEventListener('click',()=>alert('Language switch (EN/ID) – samakan logic dengan homepage.'));
</script>
</body>
<header class="topbar" id="topbar">
  <div class="container-narrow topbar-inner">
    <button class="menu-trigger" id="menuToggle" aria-expanded="false" aria-controls="menuPanel">
      <i class="bi bi-list"></i> <span>Menu</span>
    </button>
    <a class="brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="Al Rasyid Villa"></a>
    <button class="lang" id="langToggle" type="button">ENGLISH</button>
  </div>

  <nav class="menu-panel" id="menuPanel" aria-hidden="true">
    <ul class="menu-list">
      <li><a href="{{ url('/#about') }}">About</a></li>
      <li><a href="{{ url('/our_story') }}">Our Story</a></li>
      <li><a href="{{ url('/our_blog') }}">Our Blog</a></li>
    </ul>
    <a class="menu-cta" href="{{ url('/#reservation') }}"><i class="bi bi-whatsapp"></i> Reservasi</a>
  </nav>
</header>

</html>
