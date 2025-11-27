import { initHero } from "./home/hero.js";
import { initPortfolio } from "./home/portfolio.js";
import { initMockups } from "./home/mockups.js";
import { initAnimations } from "./home/animations.js";

document.addEventListener("DOMContentLoaded", () => {
  initAnimations();
  initHero();
  initPortfolio();
  initMockups();
});