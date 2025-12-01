function isMobile() {
  return matchMedia("(max-width: 768px)").matches;
}

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

    document.querySelectorAll('.feuille-wrapper').forEach(wrapper => {

        const bubble = wrapper.querySelector('.bubble');
        if (!bubble) return;

        const mini = bubble.querySelector('.bubble-mini');

        // Desktop : hover sur feuille OU mini-bulle
        if (!isMobile()) {

        wrapper.addEventListener('mouseenter', () => {
            bubble.classList.add('open');
        });

        wrapper.addEventListener('mouseleave', () => {
            bubble.classList.remove('open');
        });

        mini.addEventListener('mouseenter', () => {
            bubble.classList.add('open');
        });
        }

        // Mobile + Desktop : click pour ouvrir
        mini.addEventListener('click', () => {
        bubble.classList.toggle('open');
        });

    });

}