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
});