export function initServices() {

    const section = document.querySelector("#services");
    if (!section) return;

    const cards = section.querySelectorAll(".service-card");

    // Fermeture globale
    const closeAll = () => {
        cards.forEach(card => {
            card.classList.remove("open");
            card.querySelector(".service-toggle").textContent = "Voir plus";
        });
    };

    // Event delegation
    const handler = (e) => {

        const card = e.target.closest(".service-card");
        if (!card) return;

        const isOpen = card.classList.contains("open");
        closeAll();

        if (!isOpen) {
            card.classList.add("open");
            card.querySelector(".service-toggle").textContent = "Voir moins";
        }
    };

    /* Lazy init via IntersectionObserver */
    const obs = new IntersectionObserver((entries) => {
        if (!entries[0].isIntersecting) return;

        // Active le listener seulement si section visible
        section.addEventListener("click", handler);

        obs.disconnect();
    }, { threshold: 0.2 });

    obs.observe(section);
}