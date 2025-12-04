export function initServices() {
    const cards = document.querySelectorAll(".service-card");

    const closeAll = () => {
        cards.forEach(card => {
            card.classList.remove("open");
            const toggle = card.querySelector(".service-toggle");
            if (toggle) toggle.textContent = "Voir plus";
        });
    };

    cards.forEach(card => {

        card.addEventListener("click", (e) => {
            const isOpen = card.classList.contains("open");

            // ferme tout
            closeAll();

            // si elle était fermée, on l'ouvre
            if (!isOpen) {
                card.classList.add("open");
                const toggle = card.querySelector(".service-toggle");
                if (toggle) toggle.textContent = "Voir moins";
            }
        });

    });
}