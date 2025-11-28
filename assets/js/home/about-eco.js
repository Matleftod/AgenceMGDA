export function initAboutEco() {
  const accordions = document.querySelectorAll(".accordion");

  accordions.forEach(acc => {
    const header = acc.querySelector(".accordion-header");

    header.addEventListener("click", () => {
      const isOpen = acc.classList.contains("open");

      // Fermer tous les autres
      accordions.forEach(a => a.classList.remove("open"));

      // Réouvrir si ce n'était pas celui qu'on a cliqué
      if (!isOpen) acc.classList.add("open");
    });
  });
}