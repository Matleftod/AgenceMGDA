import { initHero } from "./home/hero.js";
import { initPortfolio } from "./home/portfolio.js";
import { initMockups } from "./home/mockups.js";
import { initAnimations } from "./home/animations.js";
import { initGlow } from "./home/glow-position.js";
import { initAboutEco } from "./home/about-eco.js";
import { initServices } from "./home/services.js";

document.addEventListener("DOMContentLoaded", () => {
  initGlow();
  initAnimations();
  initHero();
  initPortfolio();
  initMockups();
  initAboutEco();
  initServices();
});