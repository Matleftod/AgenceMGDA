window.addEventListener("load", () => {
    const heroContent = document.querySelector(".hero-content");
    const heroImage = document.querySelector(".hero-image");

    // Ajoute les classes pour lancer les animations
    heroContent.classList.add("animate-slide-down");
    heroImage.classList.add("animate-fade-in");
});
