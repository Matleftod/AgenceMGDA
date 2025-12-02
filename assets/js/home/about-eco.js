function isMobile() {
  return matchMedia("(max-width: 768px)").matches;
}

export function initAboutEco() {

  const leaves = document.querySelectorAll('.feuille-wrapper');

  leaves.forEach(wrapper => {

    const path   = wrapper.querySelector('.hitbox-path');      // hitbox SVG
    const img    = wrapper.querySelector('.feuille-img');      // image feuille
    const bubble = wrapper.querySelector('.bubble');           // bulle
    const mini   = bubble ? bubble.querySelector('.bubble-mini') : null;

    if (!path || !img) return;

    /* -----------------------------------------------------
       💡 FONCTIONS CENTRALISÉES POUR TOUT ACTION
    ----------------------------------------------------- */

    const activate = () => {
      wrapper.classList.add('is-hovered');
      img.classList.add('is-hovered');
      if (bubble) bubble.classList.add('open');
      if (mini) mini.classList.add('minihover');
    };

    const deactivate = () => {
      wrapper.classList.remove('is-hovered');
      img.classList.remove('is-hovered');
      if (bubble) bubble.classList.remove('open');
        if (mini) mini.classList.remove('minihover');
    };

    /* -----------------------------------------------------
       🖱️ DESKTOP — HOVER SUR FEUILLE OU MINI-BULLE
    ----------------------------------------------------- */
    if (!isMobile()) {

      // Hover sur la feuille (hitbox)
      path.addEventListener('mouseenter', activate);
      path.addEventListener('mouseleave', deactivate);

      // Hover sur le wrapper complet (au cas où tu ajoutes plus tard)
      wrapper.addEventListener('mouseenter', activate);
      wrapper.addEventListener('mouseleave', deactivate);

      // Hover sur mini bulle
      if (mini) {
        mini.addEventListener('mouseenter', activate);
        mini.addEventListener('mouseleave', deactivate);
      }
    }

    /* -----------------------------------------------------
       📱 MOBILE + DESKTOP — CLICK POUR OUVRIR/FERMER
    ----------------------------------------------------- */
    if (mini) {
      mini.addEventListener('click', e => {
        e.stopPropagation(); // évite les weird bugs
        const isOpen = bubble.classList.contains('open');

        if (!isOpen) activate();
        else deactivate();
      });
    }

  });
}