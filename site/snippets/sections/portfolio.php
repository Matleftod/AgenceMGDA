<section id="portfolio" class="portfolio">
  <div class="portfolio-container">

    <div class="mac-window w-full max-w-5xl mx-auto rounded-2xl overflow-hidden backdrop-blur-md border border-white/10 shadow-xl">

      <div class="mac-window-tab flex items-center px-4 pt-1 border-b border-white/10 bg-white/5">

        <div class="wrap-mac-btn flex items-center space-x-2 mr-4">
          <span class="w-3 h-3 rounded-full bg-red-500"></span>
          <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
          <span class="w-3 h-3 rounded-full bg-green-500"></span>
        </div>

        <div class="flex space-x-4 overflow-x-auto">

          <!-- Essentiel -->
          <div class="mac-tab-wrap active-mac-tab-bg">
            <button
              class="mac-tab active-mac-tab tab-essentiel px-3 pb-1.5 pt-0.5 text-xs sm:text-sm rounded-md font-semibold whitespace-nowrap"
              data-plan="Essentiel"
              data-tagline="L’essentiel pour démarrer vite et bien."
              data-poster="<?= url('assets/images/PosterMaq1.avif') ?>"
              data-mp4="<?= url('assets/videos/Maquette1mini.mp4') ?>"
              data-hevc="<?= url('assets/videos/Maquette1mini_hevc.mp4') ?>"
              data-vp9="<?= url('assets/videos/Maquette1mini_vp9.webm') ?>"
            >
              <span class="tab-label">Essentiel</span>
            </button>
          </div>

          <!-- Standard -->
          <div class="mac-tab-wrap">
            <button
              class="mac-tab tab-standard px-3 py-1.5 text-xs sm:text-sm rounded-md font-semibold whitespace-nowrap"
              data-plan="Standard"
              data-tagline="L’équilibre parfait : design + fonctionnalités."
              data-poster="<?= url('assets/images/PosterMaq2.avif') ?>"
              data-mp4="<?= url('assets/videos/Maquette2mini.mp4') ?>"
              data-hevc="<?= url('assets/videos/Maquette2mini_hevc.mp4') ?>"
              data-vp9="<?= url('assets/videos/Maquette2mini_vp9.webm') ?>"
            >
              <span class="tab-label">Standard</span>
            </button>
          </div>

          <!-- Premium -->
          <div class="mac-tab-wrap">
            <button
              class="mac-tab tab-premium px-3 py-1.5 text-xs sm:text-sm rounded-md font-semibold whitespace-nowrap"
              data-plan="Premium"
              data-tagline="Le haut de gamme, qui reflète ton identité."
              data-poster="<?= url('assets/images/PosterMaq3.avif') ?>"
              data-mp4="<?= url('assets/videos/Maquette3mini.mp4') ?>"
              data-hevc="<?= url('assets/videos/Maquette3mini_hevc.mp4') ?>"
              data-vp9="<?= url('assets/videos/Maquette3mini_vp9.webm') ?>"
            >
              <span class="tab-label">Premium</span>
            </button>
          </div>

        </div>
      </div>

      <!-- CONTENU -->
      <div class="p-6 text-gray-200 text-sm sm:text-base">

        <div class="portfolio-heading mb-8">
          <h2>
            Besoin d’inspiration ?<br>
            Découvrez nos <span>maquettes</span>.
          </h2>
          <h4>Quelques exemples pour visualiser différents styles et comparer nos gammes de sites.</h4>
        </div>

        <!-- VIDEO MULTI-FORMATS -->
        <div class="portfolio-stage">
          <div class="portfolio-video-wrapper">

            <video
              id="portfolioVideo"
              class="portfolio-video"
              muted
              playsinline
              loop
              preload="none"
              poster="<?= url('assets/images/PosterMaq1.avif') ?>"
              decoding="async"
            >
              <source src="<?= url('assets/videos/Maquette1mini_vp9.webm') ?>" type="video/webm">
              <source src="<?= url('assets/videos/Maquette1mini_hevc.mp4') ?>" type="video/mp4; codecs=hev1">
              <source src="<?= url('assets/videos/Maquette1mini.mp4') ?>" type="video/mp4">
            </video>

            <!-- Bouton play -->
            <button
              class="video-play-btn"
              aria-label="Lire la vidéo"
              type="button">
              ▶
            </button>

          </div>

          <div class="portfolio-caption">
            <span class="badge badge-essentiel">Essentiel</span>
            <p class="tagline">L’essentiel pour démarrer vite et bien.</p>
          </div>
        </div>

        <!-- Voir plus -->
        <div class="more-mockups">
          <button id="moreMockupsBtn"
            class="btn-secondary more-btn"
            type="button"
            aria-expanded="false"
            aria-controls="moreMockupsPanel"
          >
            <span class="more-btn-label">Voir d’autres maquettes</span>
            <span class="more-btn-icon">▾</span>
          </button>

          <div id="moreMockupsPanel" class="more-panel" hidden>
            <p class="more-intro">Des variations visuelles pour t'inspirer.</p>

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
    </div>

  </div>
</section>