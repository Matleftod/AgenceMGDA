export function initEcoProofCards() {
  const infoBlocks = document.querySelectorAll('.eco-proof-info');

  if (!infoBlocks.length) return;

  // Ferme l’info-bulle au clic en dehors
  document.addEventListener('click', (e) => {
    infoBlocks.forEach((details) => {
      if (!details.open) return;
      if (details.contains(e.target)) return;
      details.removeAttribute('open');
    });
  });

  // Ferme à Escape (utile clavier)
  document.addEventListener('keydown', (e) => {
    if (e.key !== 'Escape') return;
    infoBlocks.forEach((details) => details.removeAttribute('open'));
  });

  // Un seul bloc ouvert à la fois
  infoBlocks.forEach((details) => {
    details.addEventListener('toggle', () => {
      if (!details.open) return;
      infoBlocks.forEach((other) => {
        if (other !== details) other.removeAttribute('open');
      });
    });
  });
}