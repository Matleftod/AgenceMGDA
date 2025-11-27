export function initHero() {
  const slides = document.querySelectorAll('.slide');
  const tipElement = document.getElementById("hero-tip");
  const metricElement = document.getElementById("hero-metric");

  if (!slides.length || !tipElement || !metricElement) return;

  let slideIndex = 0;
  let tipIndex = 0;

  const tips = [
    "Un site professionnel rassure immédiatement vos futurs clients",
    "Une page simple et efficace vous démarque de vos concurrents sans effort",
    "Vos clients vous trouvent plus facilement grâce à un site clair et moderne"
  ];

  const metrics = [
    "+ 82 % des visiteurs jugent une entreprise sur son site web",
    "+ 68 % des clients contactent l’entreprise avec le site le plus clair",
    "+ 74 % des recherches locales aboutissent à une visite dans la journée"
  ];

  function updateSlides() {
    slides.forEach((s, i) => s.classList.toggle('active', i === slideIndex));
    slideIndex = (slideIndex + 1) % slides.length;
  }

  function updateTips() {
    tipElement.style.opacity = 0;
    metricElement.style.opacity = 0;

    setTimeout(() => {
      tipElement.textContent = tips[tipIndex];
      metricElement.textContent = metrics[tipIndex];

      tipElement.style.opacity = 1;
      metricElement.style.opacity = 1;

      tipIndex = (tipIndex + 1) % tips.length;
    }, 400);
  }

  function rotate() {
    updateSlides();
    updateTips();
  }

  // Démarrage synchro
  rotate();
  setInterval(rotate, 6000);
}