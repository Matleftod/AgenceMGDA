export function initMockups() {
  const btn = document.getElementById('moreMockupsBtn');
  const panel = document.getElementById('moreMockupsPanel');
  if (!btn || !panel) return;

  const setOpen = (open) => {
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    if (open) {
      panel.hidden = false;
      requestAnimationFrame(() => panel.dataset.open = 'true');
    } else {
      panel.dataset.open = 'false';
      panel.addEventListener('transitionend', function end() {
        panel.hidden = true;
        panel.removeEventListener('transitionend', end);
      });
    }
  };

  btn.addEventListener('click', () => {
    const open = btn.getAttribute('aria-expanded') === 'true';
    setOpen(!open);
  });
}