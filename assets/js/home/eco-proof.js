export function initEcoProofCards() {
  const cards = document.querySelectorAll('.eco-proof-card');

  cards.forEach(card => {
    card.addEventListener('click', () => {
      card.classList.toggle('is-flipped');
    });
  });
}