export function initPortfolio() {

  const video = document.getElementById('portfolioVideo');
  const tabs = document.querySelectorAll('.mac-tab');
  const tabWraps = document.querySelectorAll('.mac-tab-wrap');
  const badge = document.querySelector('.portfolio-caption .badge');
  const tagline = document.querySelector('.portfolio-caption .tagline');

  /* =============================
       VIDEO — Lazy Load au scroll
  ============================= */
  const io = new IntersectionObserver((entries) => {
    entries.forEach(({ isIntersecting }) => {
      if (isIntersecting) {
        video.load();
        video.play().catch(() => {});
        io.disconnect();
      }
    });
  }, { threshold: 0.25 });

  io.observe(video);


  /* =============================
       SWITCH VIDEO MULTI-FORMATS
  ============================= */
  function updateSources({ vp9, hevc, mp4 }) {
    video.innerHTML = ""; // reset

    const sources = [
      { src: vp9,  type: "video/webm" },
      { src: hevc, type: "video/mp4; codecs=hev1" },
      { src: mp4,  type: "video/mp4" }
    ];

    sources.forEach(data => {
      const s = document.createElement("source");
      s.src = data.src;
      s.type = data.type;
      video.appendChild(s);
    });
  }


  function switchPlan(btn) {

    // Reset visuel des tabs
    tabs.forEach(t => {
      t.classList.remove("active-mac-tab");
      t.setAttribute("aria-selected", "false");
    });

    tabWraps.forEach(w => w.classList.remove("active-mac-tab-bg"));

    btn.classList.add("active-mac-tab");
    btn.setAttribute("aria-selected", "true");
    btn.closest(".mac-tab-wrap").classList.add("active-mac-tab-bg");


    // Récup données
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