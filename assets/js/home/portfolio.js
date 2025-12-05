export function initPortfolio() {

  const vids = document.querySelectorAll('.portfolio-video');
  const tabs = document.querySelectorAll('.mac-tab');
  const tabWraps = document.querySelectorAll('.mac-tab-wrap');
  const video = document.getElementById('portfolioVideo');
  const source = document.getElementById('portfolioSource');
  const badge  = document.querySelector('.portfolio-caption .badge');
  const tagline = document.querySelector('.portfolio-caption .tagline');

  // IntersectionObserver
  const io = new IntersectionObserver((entries) => {
    entries.forEach(({isIntersecting, target}) => {
      if (isIntersecting) target.play().catch(()=>{});
      else target.pause();
    });
  }, { threshold: 0.25 });

  vids.forEach(v => io.observe(v));

  // Visibilité onglet
  document.addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'visible') {
      vids.forEach(v => {
        const r = v.getBoundingClientRect();
        const visible = r.top < window.innerHeight * 0.75 && r.bottom > window.innerHeight * 0.25;
        if (visible) v.play().catch(()=>{});
      });
    }
  });

  // Tabs
  function switchPlan(btn) {

    // Effet macOS actif
    tabs.forEach(t => {
      t.classList.remove("active-mac-tab");
      t.setAttribute('aria-selected', 'false');
    });

    btn.classList.add("active-mac-tab");
    btn.setAttribute('aria-selected', 'true');

    // Vidéos + captions
    const mp4 = btn.dataset.mp4;
    const poster = btn.dataset.poster;
    const plan = btn.dataset.plan || btn.textContent.trim();
    const line = btn.dataset.tagline || '';

    video.classList.add('is-swapping');

    setTimeout(() => {
      if (poster) video.setAttribute('poster', poster);
      source.setAttribute('src', mp4);
      video.load();
      video.play().catch(()=>{});
      video.classList.remove('is-swapping');

      badge.textContent = plan;
      tagline.textContent = line;

      badge.className = 'badge';
      if (btn.classList.contains('tab-essentiel')) badge.classList.add('badge-essentiel');
      if (btn.classList.contains('tab-standard'))  badge.classList.add('badge-standard');
      if (btn.classList.contains('tab-premium'))   badge.classList.add('badge-premium');
    }, 120);
  }

  tabs.forEach(btn => {
    btn.addEventListener('click', () => switchPlan(btn));
    btn.addEventListener('keydown', (e) => {
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
}