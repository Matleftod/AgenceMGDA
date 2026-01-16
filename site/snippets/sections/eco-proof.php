<?php
/**
 * Eco-proof
 * Mets à jour les chiffres ÉcoIndex ci-dessous quand tu veux rafraîchir la preuve.
 */
$eco = [
  'score'    => '74/100',
  'weight'   => '0,905 Mo',
  'requests' => '27',
  'elements' => '356',
  'page'     => 'Cette page',
  'date'     => '07/01/2026',
  'source'   => 'ÉcoIndex',
];
?>

<section class="eco-proof" id="eco-proof">
  <div class="eco-proof-container">

    <header class="eco-proof-header">
      <h2>
        Moins de <span>poids</span>, plus de vitesse, plus de durée de vie
      </h2>

      <div class="eco-proof-proof" aria-label="Preuve de légèreté du site">
        <div class="eco-proof-pill">
          <span class="eco-proof-metric"><strong>Ici : <?= $eco['weight'] ?></strong></span>
          <span class="eco-proof-sep" aria-hidden="true">•</span>
          <span class="eco-proof-metric"><strong><?= $eco['requests'] ?></strong> req.</span>
        </div>

        <details class="eco-proof-info">
          <summary aria-label="Voir le détail de la mesure">i</summary>
          <div class="eco-proof-tooltip" role="note">
            <p><strong><?= $eco['source'] ?></strong> · <?= $eco['page'] ?> · <?= $eco['score'] ?></p>
            <ul>
              <li>Poids transféré : <strong><?= $eco['weight'] ?></strong></li>
              <li>Requêtes : <strong><?= $eco['requests'] ?></strong></li>
              <li>Éléments DOM : <strong><?= $eco['elements'] ?></strong></li>
            </ul>
            <p class="eco-proof-tooltipMeta">Mesure du <?= $eco['date'] ?> · Première visite (cache froid).</p>
          </div>
        </details>
      </div>

      <p>
        J’allège là où ça compte : moins de dépendances, moins de ressources chargées,
        une base simple à maintenir. Résultat : un site rapide, stable et plus durable.
      </p>
    </header>

    <div class="eco-proof-grid">
      <article class="eco-proof-card">
        <div class="eco-proof-cardHead">
          <span class="eco-proof-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path
                    d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path
                    d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
          </span>
          <h3>Charger moins</h3>
        </div>

        <p class="eco-proof-desc">
          Je ne charge que le nécessaire : chaque kilo-octet a une raison.
        </p>

        <div class="eco-proof-chips" aria-label="Optimisations mises en place">
          <span class="eco-proof-chip">Images optimisées</span>
          <span class="eco-proof-chip">Lazy-load</span>
          <span class="eco-proof-chip">Fonts WOFF2</span>
          <span class="eco-proof-chip">CSS/JS minifiés</span>
        </div>

        <p class="eco-proof-impact">
          Impact : pages plus rapides, meilleures Core Web Vitals, navigation plus fluide.
        </p>
      </article>

      <article class="eco-proof-card">
        <div class="eco-proof-cardHead">
          <span class="eco-proof-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 9a4 4 0 0 1 8 0v2h1.2A2.8 2.8 0 0 1 20 13.8v3.4A2.8 2.8 0 0 1 17.2 20H6.8A2.8 2.8 0 0 1 4 17.2v-3.4A2.8 2.8 0 0 1 6.8 11H8V9Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
              <path d="M12 15v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </span>
          <h3>Réduire les dépendances</h3>
        </div>

        <p class="eco-proof-desc">
          Pas d’usine à gaz : moins de plugins, moins de JS, moins de points de rupture.
        </p>

        <div class="eco-proof-chips" aria-label="Choix techniques">
          <span class="eco-proof-chip">JS minimal</span>
          <span class="eco-proof-chip">Composants utiles</span>
          <span class="eco-proof-chip">Pas de surcouche</span>
          <span class="eco-proof-chip">Lisible & maintenable</span>
        </div>

        <p class="eco-proof-impact">
          Impact : maintenance plus simple, moins de bugs, évolutions plus rapides.
        </p>
      </article>

      <article class="eco-proof-card">
        <div class="eco-proof-cardHead">
          <span class="eco-proof-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 20h10a2 2 0 0 0 2-2V9.5a2 2 0 0 0-.6-1.4l-3.5-3.5A2 2 0 0 0 13.5 4H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
              <path d="M13 4v5a2 2 0 0 0 2 2h5" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
              <path d="M8 14h8M8 17h6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </span>
          <h3>Simplifier l’infra</h3>
        </div>

        <p class="eco-proof-desc">
          Kirby fonctionne en flat-file : pas de base de données, moins de surface de panne.
        </p>

        <div class="eco-proof-chips" aria-label="Architecture">
          <span class="eco-proof-chip">Sans DB</span>
          <span class="eco-proof-chip">Déploiement simple</span>
          <span class="eco-proof-chip">Surface d’attaque réduite</span>
          <span class="eco-proof-chip">Cache efficace</span>
        </div>

        <p class="eco-proof-impact">
          Impact : plus de stabilité, meilleure longévité, coûts d’exploitation plus bas.
        </p>
      </article>
    </div>

  </div>
</section>