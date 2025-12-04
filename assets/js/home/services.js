export function initServices() {
    const cards = document.querySelectorAll(".service-card");

    const closeAll = () => {
        cards.forEach(card => card.classList.remove("open"));
    };

    cards.forEach(card => {
        /* HOVER — ne fait que l’effet glow visuel (CSS seulement)
           donc rien à gérer ici en JS */

        /* CLICK → expand/collapse */
        card.addEventListener("click", (e) => {
            const isOpen = card.classList.contains("open");

            // ferme tout
            closeAll();

            // réouvre si ce n’était pas déjà ouvert
            if (!isOpen) {
                card.classList.add("open");
            }
        });
    });
}