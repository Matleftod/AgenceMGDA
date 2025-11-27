export function positionGlow() {
  const hero = document.getElementById("home");
  const glow = document.querySelector(".bg-glow");

  if (!hero || !glow) return;

  const rect = hero.getBoundingClientRect();
  const offsetTop = window.scrollY + rect.bottom;
  glow.style.top = `${offsetTop - glow.offsetHeight / 2}px`;
  glow.style.left = `-200px`; // ajuste la position horizontale
}

export function initGlow() {
  positionGlow();
  window.addEventListener("resize", positionGlow);
  window.addEventListener("scroll", positionGlow);
  window.addEventListener("load", positionGlow);
}