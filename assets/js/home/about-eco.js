function isMobile() {
  return matchMedia("(max-width: 1024px)").matches;
}

export function initAboutEco() {

  const entries = document.querySelectorAll(".eco-entry");
  const leaves = document.querySelectorAll(".feuille-wrapper");
  const plantImages = document.querySelectorAll(".plante-layer");
  const aboutSection = document.querySelector(".about-eco");

  if (!aboutSection) return;

  /* ============================
     FONCTIONS DE BASE
  ============================ */

  const clearLeafAnimations = () => {
    leaves.forEach(leaf => {
      const img = leaf.querySelector(".feuille-img");
      if (img) img.classList.remove("is-hovered");
    });
  };

  const clearEntries = () => {
    entries.forEach(entry => entry.classList.remove("open"));
  };

  const clearAll = () => {
    clearLeafAnimations();
    clearEntries();
  };

  const setActiveByLeafId = (id) => {
    clearAll();

    // Active la feuille
    const leaf = document.querySelector(`.feuille-wrapper[data-leaf="${id}"]`);
    if (leaf) {
      const img = leaf.querySelector(".feuille-img");
      if (img) img.classList.add("is-hovered");
    }

    // Active l'entrée
    const entry = document.querySelector(`.eco-entry[data-leaf="${id}"]`);
    if (entry) {
      entry.classList.add("open");
    }
  };

  /* ============================================
     CHARGEMENT LAZY DE LA PLANTE (Important)
  ============================================ */

  const loadPlantImages = () => {
    plantImages.forEach(img => {
      if (img.dataset.src) {
        img.src = img.dataset.src;     // si tu utilises data-src pour éviter preload
      }
      img.loading = "eager"; // force l’image à se charger maintenant
    });
  };

  /* ============================================
     INITIALISATION DES ÉCOUTEURS ANIMATIONS
  ============================================ */

  const initDesktopInteractions = () => {

    // Hover sur les entrées
    entries.forEach(entry => {
      const id = entry.dataset.leaf;

      entry.addEventListener("mouseenter", () => {
        setActiveByLeafId(id);
      });

      entry.addEventListener("mouseleave", () => {
        clearAll();
      });
    });

    // Hover sur les feuilles hitbox
    leaves.forEach(leaf => {
      const id = leaf.dataset.leaf;
      const path = leaf.querySelector(".hitbox-path");
      if (!path) return;

      path.addEventListener("mouseenter", () => {
        setActiveByLeafId(id);
      });

      path.addEventListener("mouseleave", () => {
        clearAll();
      });
    });
  };

  const initMobileInteractions = () => {
    entries.forEach(entry => {
      const id = entry.dataset.leaf;
      const header = entry.querySelector(".eco-header");

      header.addEventListener("click", () => {
        const isOpen = entry.classList.contains("open");

        clearAll();
        if (!isOpen) {
          setActiveByLeafId(id);
        }
      });
    });
  };

  /* ============================================
     INTERSECTION OBSERVER (Lazy init section)
  ============================================ */

  const observer = new IntersectionObserver((entries) => {

    if (!entries[0].isIntersecting) return;

    // Charge les images de plante
    loadPlantImages();

    // Active interactions selon device
    if (!isMobile()) {
      initDesktopInteractions();
    } else {
      initMobileInteractions();
    }

    // Stop observing
    observer.disconnect();

  }, { threshold: 0.2 });

  observer.observe(aboutSection);
}