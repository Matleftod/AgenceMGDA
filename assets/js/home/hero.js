export function initHero() {
  const slides = document.querySelectorAll('.slide');
  const tipElement = document.getElementById("hero-tip");

  if (!slides.length || !tipElement) return;

  let slideIndex = 0;
  let tipIndex = 0;

  const tips = [
    "Un site simple à maintenir reste performant plus longtemps.",
    "Moins de poids, plus de vitesse : une expérience plus fluide sur mobile.",
    "Un message clair = des demandes plus qualifiées.",
    "Local : être trouvable, être crédible, être contactable."
  ];

  // --- SLIDER ---
  function updateSlides() {
    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === slideIndex);
    });
    slideIndex = (slideIndex + 1) % slides.length;
  }

  // --- TIPS ---
  function updateTips() {
    tipElement.style.opacity = 0;

    setTimeout(() => {
      tipElement.textContent = tips[tipIndex];
      tipElement.style.opacity = 1;
      tipIndex = (tipIndex + 1) % tips.length;
    }, 400);
  }

  // --- ROTATION SYNC ---
  function rotate() {
    updateSlides();
    updateTips();
  }

  // Lancement immédiat
  rotate();
  setInterval(rotate, 6000);
}