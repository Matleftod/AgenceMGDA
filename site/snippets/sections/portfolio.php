<section id="portfolio" class="portfolio">
  <div class="portfolio-container">
    <div class="w-full max-w-4xl mx-auto rounded-2xl overflow-hidden backdrop-blur-md bg-white/5 border border-white/10 shadow-xl">

      <!-- Header macOS -->
      <div class="flex items-center px-4 py-2 border-b border-white/10 bg-white/5">

        <!-- Boutons macOS -->
        <div class="flex items-center space-x-2 mr-4">
          <span class="w-3 h-3 rounded-full bg-red-500"></span>
          <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
          <span class="w-3 h-3 rounded-full bg-green-500"></span>
        </div>

        <!-- Tabs bien espacés -->
        <div class="flex items-center space-x-2 overflow-x-auto">
          <button
            class="px-3 py-1.5 text-xs sm:text-sm rounded-md bg-white/10 text-white font-medium border border-white/20 whitespace-nowrap"
          >
            Cues (24)
          </button>

          <button
            class="px-3 py-1.5 text-xs sm:text-sm rounded-md text-gray-300 hover:bg-white/10 transition whitespace-nowrap"
          >
            Heatbox (12)
          </button>

          <button
            class="px-3 py-1.5 text-xs sm:text-sm rounded-md text-gray-300 hover:bg-white/10 transition whitespace-nowrap"
          >
            Seeds (156)
          </button>

          <button
            class="px-3 py-1.5 text-xs sm:text-sm rounded-md text-gray-300 hover:bg-white/10 transition whitespace-nowrap"
          >
            AI Agents
          </button>
        </div>

      </div>

      <!-- Contenu -->
      <div class="p-4 sm:p-6 text-gray-200 text-sm sm:text-base">
        Ton contenu ici...
      </div>

    </div>

    <h2>Nos maquettes</h2>
    <p>Quelques exemples visuels pour vous inspirer et vous donner une idée de notre style et de nos possibilités.</p>
    <div class="portfolio-switch">
      <nav class="portfolio-tabs" role="tablist" aria-label="Forfaits">
        <button class="tab is-active tab-essentiel"
                role="tab" aria-selected="true" aria-controls="portfolio-stage"
                data-plan="Essentiel"
                data-mp4="<?= url('assets/videos/Maquette1mini.mp4') ?>"
                data-poster="<?= url('assets/images/PosterMaq1.png') ?>"
                data-tagline="L’essentiel pour démarrer vite et bien.">
          Essentiel
        </button>
        <button class="tab tab-standard"
                role="tab" aria-selected="false" aria-controls="portfolio-stage"
                data-plan="Standard"
                data-mp4="<?= url('assets/videos/Maquette2mini.mp4') ?>"
                data-poster="<?= url('assets/images/PosterMaq2.png') ?>"
                data-tagline="L’équilibre parfait : design + fonctionnalités.">
          Standard
        </button>
        <button class="tab tab-premium"
                role="tab" aria-selected="false" aria-controls="portfolio-stage"
                data-plan="Premium"
                data-mp4="<?= url('assets/videos/Maquette3mini.mp4') ?>"
                data-poster="<?= url('assets/images/PosterMaq3.png') ?>"
                data-tagline="Le haut de gamme, qui reflète parfaitement votre identité.">
          Premium
        </button>
      </nav>

      <div id="portfolio-stage" class="portfolio-stage">
        <video id="portfolioVideo" class="portfolio-video" muted playsinline loop preload="metadata"
              poster="<?= url('assets/images/PosterMaq1.png') ?>">
          <source id="portfolioSource" src="<?= url('assets/videos/Maquette1mini.mp4') ?>" type="video/mp4">
        </video>

        <div class="portfolio-caption">
          <span class="badge badge-essentiel">Essentiel</span>
          <p class="tagline">L’essentiel pour démarrer vite et bien.</p>
        </div>
      </div>

      <div class="more-mockups">
        <button id="moreMockupsBtn"
          class="btn-secondary more-btn"
          type="button"
          aria-expanded="false"
          aria-controls="moreMockupsPanel">
          <span class="more-btn-label">Voir d’autres maquettes</span>
          <span class="more-btn-icon" aria-hidden="true">▾</span>
        </button>

        <div id="moreMockupsPanel" class="more-panel" hidden>
          <p class="more-intro">Des variations visuelles pour vous inspirer.</p>

          <div class="more-grid">
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq1.png') ?>"
                  alt="Maquette de site vitrine moderne en bleu clair."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq2.png') ?>"
                  alt="Maquette de site vitrine nature en vert et beige."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq3.png') ?>"
                  alt="Maquette de site vitrine haut de gamme en style sombre."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq4.png') ?>"
                  alt="Maquette de site vitrine coloré en jaune et beige."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq5.png') ?>"
                  alt="Maquette de site vitrine dynamique en rose, violet et jaune."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq6.png') ?>"
                  alt="Maquette de site vitrine moderne en dégradé multicolore."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq7.png') ?>"
                  alt="Maquette de site vitrine élégant en gris foncé avec villa moderne."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq8.png') ?>"
                  alt="Maquette de site vitrine chaleureux en beige et brun avec maison de campagne."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq9.png') ?>"
                  alt="Maquette de site vitrine minimaliste en blanc avec villa contemporaine."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq10.png') ?>"
                  alt="Maquette de site vitrine en bleu clair avec villa en bord de mer."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
            <figure class="more-card">
              <img src="<?= url('assets/images/mockups/maq11.png') ?>"
                  alt="Maquette de site vitrine élégant en beige avec villa moderne et piscine."
                  width="800" height="500" loading="lazy" decoding="async">
            </figure>
          </div>
        </div>
      </div>
    </div>
</section>