export function initAboutEco() {

    const leaves = document.querySelectorAll('.feuille-wrapper');

    leaves.forEach(wrapper => {

        const path  = wrapper.querySelector('.hitbox-path');
        const img   = wrapper.querySelector('.feuille-img');

        if (!path || !img) return;

        path.addEventListener('mouseenter', () => {

            wrapper.classList.add('is-hovered');
            img.classList.add('is-hovered');
        });

        path.addEventListener('mouseleave', () => {
            wrapper.classList.remove('is-hovered');
            img.classList.remove('is-hovered');
        });
    });

}