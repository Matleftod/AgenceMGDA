export function initMockups() {
  const btn = document.getElementById("moreMockupsBtn");
  const panel = document.getElementById("moreMockupsPanel");
  if (!btn || !panel) return;

  btn.addEventListener("click", () => {
    const open = panel.dataset.open === "true";

    if (open) {
      // ---- FERMETURE ----
      panel.dataset.open = "false";

      panel.addEventListener(
        "transitionend",
        function end(e) {
          if (e.propertyName === "max-height") {
            panel.hidden = true;
            panel.removeEventListener("transitionend", end);
          }
        }
      );
    } else {
      // ---- OUVERTURE ----
      panel.hidden = false;

      // Force reflow pour éviter les bugs Android
      panel.getBoundingClientRect();

      panel.dataset.open = "true";
    }

    btn.setAttribute("aria-expanded", (!open).toString());
  });
}