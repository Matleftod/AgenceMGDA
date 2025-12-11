<section id="portfolio" class="portfolio">
  <div class="portfolio-container">

    <!-- 🍎 Fenêtre macOS contenant TOUT le portfolio -->
    <div class="mac-window w-full max-w-5xl mx-auto rounded-2xl overflow-hidden backdrop-blur-md border border-white/10 shadow-xl">

      <!-- ──────────────── Barre macOS ──────────────── -->
      <div class="mac-window-tab flex items-center px-4 pt-1 border-b border-white/10 bg-white/5">

        <!-- Boutons mac -->
        <div class="wrap-mac-btn flex items-center space-x-2 mr-4">
          <span class="w-3 h-3 rounded-full bg-red-500"></span>
          <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
          <span class="w-3 h-3 rounded-full bg-green-500"></span>
        </div>

        <!-- Onglets = tes trois plans -->
        <div class="flex space-x-4 overflow-x-auto">
          <div class="mac-tab-wrap active-mac-tab-bg">
            <button
              class="mac-tab active-mac-tab tab-essentiel px-3 pb-1.5 pt-0.5 text-xs sm:text-sm rounded-md font-semibold whitespace-nowrap"
              data-plan="Essentiel"
              data-mp4="<?= url('assets/videos/Maquette1mini.mp4') ?>"
              data-poster="<?= url('assets/images/PosterMaq1.png') ?>"
              data-tagline="L’essentiel pour démarrer vite et bien."
            >
              <span class="tab-label">Essentiel</span>
            </button>
          </div>
          <div class="mac-tab-wrap">
            <button
              class="mac-tab tab-standard px-3 py-1.5 text-xs sm:text-sm rounded-md font-semibold whitespace-nowrap"
              data-plan="Standard"
              data-mp4="<?= url('assets/videos/Maquette2mini.mp4') ?>"
              data-poster="<?= url('assets/images/PosterMaq2.png') ?>"
              data-tagline="L’équilibre parfait : design + fonctionnalités."
            >
              <span class="tab-label">Standard</span>
            </button>
          </div>
          <div class="mac-tab-wrap">
            <button
              class="mac-tab tab-premium px-3 py-1.5 text-xs sm:text-sm rounded-md font-semibold whitespace-nowrap"
              data-plan="Premium"
              data-mp4="<?= url('assets/videos/Maquette3mini.mp4') ?>"
              data-poster="<?= url('assets/images/PosterMaq3.png') ?>"
              data-tagline="Le haut de gamme, qui reflète votre identité."
            >
              <span class="tab-label">Premium</span>
            </button>
          </div>
        </div>
      </div>

      <!-- ──────────────── Contenu de la fenêtre ──────────────── -->
      <div class="p-6 text-gray-200 text-sm sm:text-base">

        <div class="portfolio-heading mb-8">
          <h2>
            Besoin d’inspiration ?<br>
            Découvrez nos <span>maquettes</span>.
          </h2>

          <p>
            Quelques exemples pour visualiser différents styles et comparer nos gammes de sites.
          </p>
        </div>

        <!-- Vidéo -->
        <div class="portfolio-stage" id="portfolio-stage">
          <video
            id="portfolioVideo"
            class="portfolio-video"
            muted
            playsinline
            loop
            preload="none"
            poster="<?= url('assets/images/PosterMaq1.png') ?>"
          >
            <source id="portfolioSource" src="<?= url('assets/videos/Maquette1mini.mp4') ?>" type="video/mp4">
          </video>

          <div class="portfolio-caption">
            <span class="badge badge-essentiel">Essentiel</span>
            <p class="tagline">L’essentiel pour démarrer vite et bien.</p>
          </div>
        </div>

        <!-- Bouton Voir plus -->
        <div class="more-mockups">
          <button id="moreMockupsBtn"
            class="btn-secondary more-btn"
            type="button"
            aria-expanded="false"
            aria-controls="moreMockupsPanel">
            <span class="more-btn-label">Voir d’autres maquettes</span>
            <span class="more-btn-icon">▾</span>
          </button>

          <div id="moreMockupsPanel" class="more-panel" hidden>
            <p class="more-intro">Des variations visuelles pour vous inspirer.</p>

            <div class="more-grid">
              <?php foreach (range(1, 11) as $i): ?>
              <figure class="more-card">
                <img
                  src="<?= url("assets/images/mockups/maq{$i}.avif") ?>"
                  alt="Maquette <?= $i ?>"
                  loading="lazy"
                  decoding="async"
                >
              </figure>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

      </div>
      <!-- FIN contenu fenêtre -->
    </div>
    <!-- FIN fenêtre macOS -->

  </div>
</section>