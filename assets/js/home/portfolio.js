export function initPortfolio() {

  const video = document.getElementById('portfolioVideo');
  const tabs = document.querySelectorAll('.mac-tab');
  const tabWraps = document.querySelectorAll('.mac-tab-wrap');
  const badge = document.querySelector('.portfolio-caption .badge');
  const tagline = document.querySelector('.portfolio-caption .tagline');

  /* =============================
      STOP SI ON N’EST PAS SUR LA HOME
  ============================= */
  if (!video || tabs.length === 0) {
    return; // ❗ Empêche toute erreur sur les autres pages
  }

  /* =============================
        1) LAZY LOAD (1ère apparition)
  ============================= */
  const lazyIO = new IntersectionObserver((entries) => {
    entries.forEach(({ isIntersecting }) => {
      if (isIntersecting) {
        video.load();
        video.play().catch(() => {});
        lazyIO.disconnect(); // one-time
      }
    });
  }, { threshold: 0.25 });

  lazyIO.observe(video);

  /* =============================
        2) AUTO PLAY / PAUSE
  ============================= */
  const visibilityIO = new IntersectionObserver((entries) => {
    entries.forEach(({ isIntersecting }) => {
      if (isIntersecting) video.play().catch(() => {});
      else video.pause();
    });
  }, { threshold: 0.4 });

  visibilityIO.observe(video);


  /* =============================
        3) RECREATE SOURCES
  ============================= */
  function updateSources({ vp9, hevc, mp4 }) {
    video.innerHTML = "";

    [
      { src: vp9,  type: "video/webm" },
      { src: hevc, type: "video/mp4; codecs=hev1" },
      { src: mp4,  type: "video/mp4" }
    ].forEach(data => {
      const s = document.createElement("source");
      s.src = data.src;
      s.type = data.type;
      video.appendChild(s);
    });
  }


  /* =============================
        4) SWITCH TABS
  ============================= */
  function switchPlan(btn) {

    tabs.forEach(t => {
      t.classList.remove("active-mac-tab");
      t.setAttribute("aria-selected", "false");
    });

    tabWraps.forEach(w => w.classList.remove("active-mac-tab-bg"));

    btn.classList.add("active-mac-tab");
    btn.setAttribute("aria-selected", "true");
    btn.closest(".mac-tab-wrap").classList.add("active-mac-tab-bg");

    const data = {
      mp4: btn.dataset.mp4,
      hevc: btn.dataset.hevc,
      vp9: btn.dataset.vp9
    };

    const poster = btn.dataset.poster;
    const plan = btn.dataset.plan;
    const text = btn.dataset.tagline;

    video.classList.add("is-swapping");

    setTimeout(() => {
      video.setAttribute("poster", poster);
      updateSources(data);
      video.load();
      video.play().catch(() => {});
      video.classList.remove("is-swapping");

      badge.textContent = plan;
      tagline.textContent = text;

      badge.className = "badge";
      if (btn.classList.contains("tab-essentiel")) badge.classList.add("badge-essentiel");
      if (btn.classList.contains("tab-standard"))  badge.classList.add("badge-standard");
      if (btn.classList.contains("tab-premium"))   badge.classList.add("badge-premium");

    }, 120);
  }

  tabs.forEach(btn => {
    btn.addEventListener("click", () => switchPlan(btn));
  });

}