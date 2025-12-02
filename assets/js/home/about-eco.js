function isMobile() {
  return matchMedia("(max-width: 768px)").matches;
}

export function initAboutEco() {

  document.querySelectorAll('.feuille-wrapper').forEach(wrapper => {

    const path   = wrapper.querySelector('.hitbox-path');
    const img    = wrapper.querySelector('.feuille-img');
    const bubble = wrapper.querySelector('.bubble');
    const body   = bubble?.querySelector('.bubble-body');

    if (!path || !img || !body) return;

    const activate = () => {
      wrapper.classList.add('is-hovered');
      img.classList.add('is-hovered');
      bubble.classList.add('open');
      body.classList.add('minihover');
    };

    const deactivate = () => {
      wrapper.classList.remove('is-hovered');
      img.classList.remove('is-hovered');
      bubble.classList.remove('open');
      body.classList.remove('minihover');
    };

    // Desktop hover
    if (!isMobile()) {
      path.addEventListener('mouseenter', activate);
      path.addEventListener('mouseleave', deactivate);
      body.addEventListener('mouseenter', activate);
      body.addEventListener('mouseleave', deactivate);
    }

    // Mobile + Desktop click
    body.addEventListener('click', e => {
      e.stopPropagation();
      bubble.classList.toggle('open');
      bubble.classList.contains('open') ? activate() : deactivate();
    });
  });
}