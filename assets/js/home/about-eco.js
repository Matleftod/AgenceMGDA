function isMobile() {
  return matchMedia("(max-width: 768px)").matches;
}

export function initAboutEco() {

  const entries = document.querySelectorAll(".eco-entry");
  const leaves = document.querySelectorAll(".feuille-wrapper");

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

  /* ============================
     DESKTOP : HOVER sur .eco-entry
  ============================ */
  if (!isMobile()) {

    entries.forEach(entry => {
      const id = entry.dataset.leaf;

      entry.addEventListener("mouseenter", () => {
        setActiveByLeafId(id);
      });

      entry.addEventListener("mouseleave", () => {
        clearAll();
      });
    });

    /* --- Hover sur les feuilles --- */
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

  } else {

    /* ============================
       MOBILE : CLICK SUR LE HEADER
    ============================ */

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

    // (optionnel) CLICK touches sur feuilles → ouvre la carte correspondante
    /*
    leaves.forEach(leaf => {
      const id = leaf.dataset.leaf;
      const path = leaf.querySelector(".hitbox-path");

      path.addEventListener("click", () => {
        const entry = document.querySelector(`.eco-entry[data-leaf="${id}"]`);
        const isOpen = entry.classList.contains("open");

        clearAll();

        if (!isOpen) {
          setActiveByLeafId(id);
        }
      });
    });
    */
  }
}