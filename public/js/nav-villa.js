// shrink topbar
addEventListener("scroll",()=>document.getElementById("topbar")?.classList.toggle("shrink",scrollY>24));

// menu toggle (klik luar = close, ESC = close)
(function(){
  const btn=document.getElementById('menuToggle'), panel=document.getElementById('menuPanel');
  if(!btn||!panel) return;
  const esc=(e)=>{ if(e.key==='Escape') close(); };
  const out=(e)=>{ if(!panel.contains(e.target) && e.target!==btn) close(); };
  function open(){ panel.classList.add('open'); panel.setAttribute('aria-hidden','false'); btn.setAttribute('aria-expanded','true'); addEventListener('keydown',esc); addEventListener('click',out,true); }
  function close(){ panel.classList.remove('open'); panel.setAttribute('aria-hidden','true'); btn.setAttribute('aria-expanded','false'); removeEventListener('keydown',esc); removeEventListener('click',out,true); }
  btn.addEventListener('click',()=> panel.classList.contains('open')?close():open());
  panel.querySelectorAll('a').forEach(a=>a.addEventListener('click',close));
})();

// simple language toggle shared (pakai localStorage)
(function(){
  const btn=document.getElementById("langToggle"); if(!btn) return;
  let lang=localStorage.getItem("villa_lang")||"id";
  const label=()=> btn.textContent = (lang==='en'?'INDONESIA':'ENGLISH');
  label();
  btn.addEventListener('click',()=>{ lang=(lang==='en'?'id':'en'); localStorage.setItem("villa_lang",lang); label(); location.reload(); });
})();
