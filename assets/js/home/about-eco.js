export function initAboutEco() {
    const wrappers = document.querySelectorAll('.feuille-wrapper');

    wrappers.forEach(wrapper => {
        const img  = wrapper.querySelector('.feuille-img');
        const path = wrapper.querySelector('.hitbox-path');
        if (!img || !path) return;

        path.addEventListener('mouseenter', () => {
        img.classList.add('is-hovered');
        });

        path.addEventListener('mouseleave', () => {
        img.classList.remove('is-hovered');
        });
    });
}