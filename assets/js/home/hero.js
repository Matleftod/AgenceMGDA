export function initHero() {
  const slides = document.querySelectorAll('.slide');
  const tipElement = document.getElementById("hero-tip");

  if (!slides.length || !tipElement) return;

  let slideIndex = 0;
  let tipIndex = 0;

  const tips = [
    "72 % des clients choisissent l’artisan avec le site le plus clair.",
    "1 page optimisée = 3× moins d’émissions CO₂ par visite.",
    "65 % des clients jugent une entreprise uniquement grâce à son site.",
    "74 % des recherches locales mènent à une visite en moins de 24h."
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