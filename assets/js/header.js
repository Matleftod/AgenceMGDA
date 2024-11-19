window.addEventListener("scroll", function () {
    const header = document.querySelector(".head-container");
    if (window.scrollY > 50) {
        header.classList.remove("transparent");
        header.classList.add("scrolled");
    } else {
        header.classList.add("transparent");
        header.classList.remove("scrolled");
    }
});