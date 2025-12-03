function isMobile() {
  return matchMedia("(max-width: 768px)").matches;
}

export function initAboutEco() {
  const cards = document.querySelectorAll(".eco-card");
  const leaves = document.querySelectorAll(".feuille-wrapper");

  const clearStates = () => {
    // retire l'animation des feuilles
    leaves.forEach(leaf => {
      const img = leaf.querySelector(".feuille-img");
      if (img) img.classList.remove("is-hovered");
    });

    // referme toutes les cartes
    cards.forEach(card => card.classList.remove("open"));
  };

  const setActiveByLeafId = (id) => {
    clearStates();

    const leaf = document.querySelector(`.feuille-wrapper[data-leaf="${id}"]`);
    const card = document.querySelector(`.eco-card[data-leaf="${id}"]`);

    if (leaf) {
      const img = leaf.querySelector(".feuille-img");
      if (img) img.classList.add("is-hovered");
    }

    if (card) {
      card.classList.add("open");
    }
  };

  /* ============================
     DESKTOP : HOVER
  ============================ */
  if (!isMobile()) {
    // Hover sur cartes
    cards.forEach(card => {
      const id = card.dataset.leaf;

      card.addEventListener("mouseenter", () => {
        setActiveByLeafId(id);
      });

      card.addEventListener("mouseleave", () => {
        clearStates();
      });
    });

    // Hover sur feuilles (via hitbox)
    leaves.forEach(leaf => {
      const id = leaf.dataset.leaf;
      const path = leaf.querySelector(".hitbox-path");
      if (!path) return;

      path.addEventListener("mouseenter", () => {
        setActiveByLeafId(id);
      });

      path.addEventListener("mouseleave", () => {
        clearStates();
      });
    });

  } else {
    /* ============================
       MOBILE : CLICK sur cartes
    ============================ */
    cards.forEach(card => {
      const id = card.dataset.leaf;

      card.addEventListener("click", () => {
        const isAlreadyOpen = card.classList.contains("open");

        if (isAlreadyOpen) {
          // si déjà ouverte → on ferme tout
          clearStates();
        } else {
          // sinon on active cette carte + feuille
          setActiveByLeafId(id);
        }
      });
    });

    // (optionnel : tu peux aussi gérer le click sur les feuilles
    // pour ouvrir la carte correspondante, si tu veux)
  }
}