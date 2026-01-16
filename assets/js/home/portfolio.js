export function initPortfolio() {

  const video = document.getElementById('portfolioVideo');
  const playBtn = document.querySelector('.video-play-btn');
  const tabs = document.querySelectorAll('.mac-tab');
  const tabWraps = document.querySelectorAll('.mac-tab-wrap');
  const badge = document.querySelector('.portfolio-caption .badge');
  const tagline = document.querySelector('.portfolio-caption .tagline');

  if (!video || !playBtn || tabs.length === 0) return;

  let hasUserInteracted = false;

  /* =============================
        LECTURE AU CLIC UNIQUEMENT
  ============================= */
  playBtn.addEventListener('click', () => {
    hasUserInteracted = true;

    video.play().then(() => {
      playBtn.style.display = 'none';
    }).catch(() => {});
  });

  /* =============================
        RECREATE SOURCES
  ============================= */
  function updateSources({ vp9, hevc, mp4 }) {
    video.pause();
    video.removeAttribute('src');
    video.innerHTML = '';

    [
      { src: vp9,  type: 'video/webm' },
      { src: hevc, type: 'video/mp4; codecs=hev1' },
      { src: mp4,  type: 'video/mp4' }
    ].forEach(({ src, type }) => {
      const s = document.createElement('source');
      s.src = src;
      s.type = type;
      video.appendChild(s);
    });

    video.load();
  }

  /* =============================
        SWITCH TABS (sans autoplay)
  ============================= */
  function switchPlan(btn) {

    tabs.forEach(t => {
      t.classList.remove('active-mac-tab');
      t.setAttribute('aria-selected', 'false');
    });

    tabWraps.forEach(w => w.classList.remove('active-mac-tab-bg'));

    btn.classList.add('active-mac-tab');
    btn.setAttribute('aria-selected', 'true');
    btn.closest('.mac-tab-wrap').classList.add('active-mac-tab-bg');

    const data = {
      mp4: btn.dataset.mp4,
      hevc: btn.dataset.hevc,
      vp9: btn.dataset.vp9
    };

    video.setAttribute('poster', btn.dataset.poster);
    updateSources(data);

    // reset UI
    video.controls = false;
    playBtn.style.display = '';
    hasUserInteracted = false;

    badge.textContent = btn.dataset.plan;
    tagline.textContent = btn.dataset.tagline;

    badge.className = 'badge';
    if (btn.classList.contains('tab-essentiel')) badge.classList.add('badge-essentiel');
    if (btn.classList.contains('tab-standard'))  badge.classList.add('badge-standard');
    if (btn.classList.contains('tab-premium'))   badge.classList.add('badge-premium');
  }

  tabs.forEach(btn => {
    btn.addEventListener('click', () => switchPlan(btn));
  });
}