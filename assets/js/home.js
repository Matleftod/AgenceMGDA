window.addEventListener("load", () => {
    const heroContent = document.querySelector(".hero-content");
    const heroImage = document.querySelector(".hero-image");

    // Ajoute les classes pour lancer les animations
    heroContent.classList.add("animate-slide-down");
    heroImage.classList.add("animate-fade-in");
});

document.addEventListener('DOMContentLoaded', () => {
  const vids = document.querySelectorAll('.portfolio-video');

  const io = new IntersectionObserver((entries) => {
    entries.forEach(({isIntersecting, target}) => {
      if (isIntersecting) {
        // relancer systématiquement
        target.play().catch(()=>{});
      } else {
        // 1) pour copier le comportement "about", commente cette ligne:
        target.pause();
      }
    });
  }, { threshold: 0.25 });

  vids.forEach(v => io.observe(v));

  // Si onglet redevient actif et la vidéo est visible, rejoue
  document.addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'visible') {
      vids.forEach(v => {
        const r = v.getBoundingClientRect();
        const visible = r.top < window.innerHeight * 0.75 && r.bottom > window.innerHeight * 0.25;
        if (visible) v.play().catch(()=>{});
      });
    }
  });

  const tabs = document.querySelectorAll('.portfolio-tabs .tab');
  const video = document.getElementById('portfolioVideo');
  const source = document.getElementById('portfolioSource');
  const badge  = document.querySelector('.portfolio-caption .badge');
  const tagline = document.querySelector('.portfolio-caption .tagline');

  function switchPlan(btn) {
    // Maj visuelle onglets
    tabs.forEach(t => {
      t.classList.toggle('is-active', t === btn);
      t.setAttribute('aria-selected', t === btn ? 'true' : 'false');
    });

    // Swap vidéo (petit fondu)
    const mp4 = btn.dataset.mp4;
    const poster = btn.dataset.poster;
    const plan = btn.dataset.plan || btn.textContent.trim();
    const line = btn.dataset.tagline || '';

    video.classList.add('is-swapping');
    // petite attente pour l’effet (sans bloquer trop longtemps)
    setTimeout(() => {
        if (poster) video.setAttribute('poster', poster);
        source.setAttribute('src', mp4);
        video.load();
        video.play().catch(() => {});
        video.classList.remove('is-swapping');

        // Caption
        badge.textContent = plan;
        tagline.textContent = line;

        // Met à jour la couleur de badge selon l’onglet actif
        badge.className = 'badge'; // reset
        if (btn.classList.contains('tab-essentiel')) badge.classList.add('badge-essentiel');
        if (btn.classList.contains('tab-standard'))  badge.classList.add('badge-standard');
        if (btn.classList.contains('tab-premium'))   badge.classList.add('badge-premium');
    }, 120);
  }

  tabs.forEach(btn => {
    btn.addEventListener('click', () => switchPlan(btn));
    btn.addEventListener('keydown', (e) => {
      // accessibilité: flèches gauche/droite pour naviguer
      if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
        e.preventDefault();
        const arr = Array.from(tabs);
        const i = arr.indexOf(btn);
        const next = e.key === 'ArrowRight'
          ? arr[(i + 1) % arr.length]
          : arr[(i - 1 + arr.length) % arr.length];
        next.focus();
        switchPlan(next);
      }
    });
  });
});