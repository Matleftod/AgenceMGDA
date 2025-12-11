export function initPortfolio() {

  const video = document.getElementById('portfolioVideo');
  const source = document.getElementById('portfolioSource');
  const tabs = document.querySelectorAll('.mac-tab');
  const tabWraps = document.querySelectorAll('.mac-tab-wrap');
  const badge = document.querySelector('.portfolio-caption .badge');
  const tagline = document.querySelector('.portfolio-caption .tagline');

  /* =============================
        VIDEO — Lazy Load
  ============================= */

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(({ isIntersecting, target }) => {
      if (isIntersecting) {
        target.load();
        target.play().catch(() => {});
        observer.unobserve(target);
      }
    });
  }, { threshold: 0.3 });

  observer.observe(video);

  /* =============================
        SWITCH TABS
  ============================= */

  function switchPlan(btn) {
    tabs.forEach(t => {
      t.classList.remove("active-mac-tab");
      t.setAttribute('aria-selected', 'false');
    });

    tabWraps.forEach(w => w.classList.remove("active-mac-tab-bg"));

    btn.classList.add("active-mac-tab");
    btn.setAttribute('aria-selected', 'true');
    btn.closest(".mac-tab-wrap").classList.add("active-mac-tab-bg");

    const mp4 = btn.dataset.mp4;
    const poster = btn.dataset.poster;
    const plan = btn.dataset.plan;
    const text = btn.dataset.tagline;

    video.classList.add('is-swapping');

    setTimeout(() => {
      video.setAttribute("poster", poster);
      source.setAttribute("src", mp4);
      video.load();
      video.play().catch(() => {});
      video.classList.remove('is-swapping');

      badge.textContent = plan;
      tagline.textContent = text;

      badge.className = 'badge';
      if (btn.classList.contains("tab-essentiel")) badge.classList.add("badge-essentiel");
      if (btn.classList.contains("tab-standard"))  badge.classList.add("badge-standard");
      if (btn.classList.contains("tab-premium"))   badge.classList.add("badge-premium");
    }, 120);
  }

  tabs.forEach(btn => {
    btn.addEventListener('click', () => switchPlan(btn));
  });
}