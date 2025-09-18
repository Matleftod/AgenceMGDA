<?php snippet('header') ?>

<main class="home">

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="hero-container">
      <div class="hero-content animate-slide-down">
          <h1>Votre succès digital<br> à la <span class="highlight">française</span></h1>
          <p>Chez MGDA, on crée des sites web modernes, uniques et qui vous ressemblent vraiment. 
            Que vous soyez une conciergerie, une agence de location ou une petite entreprise, 
            on est là pour donner vie à vos idées avec un site qui claque, efficace et sur-mesure.</p>
          <div class="hero-buttons">
              <a href="#contact" class="btn-primary"><span>C'est parti !</span></a>
              <a href="#services" class="btn-secondary"><span>Nos services</span></a>

          </div>
      </div>
      <div class="hero-image animate-fade-in">
          <img src="<?= url('assets/images/undraw_building_websites_i78t.svg') ?>" alt="Illustration">
      </div>
    </div>
  </section>

  <!-- New About Section -->
  <section id="about" class="about">
    <div class="about-container">
        <!-- Media Section -->
        <div class="about-media">
            <video autoplay muted loop playsinline>
                <source src="<?= url('assets/videos/chill.mp4') ?>" type="video/mp4">
                Votre navigateur ne supporte pas les vidéos HTML5.
            </video>
        </div>

        <!-- Text Section -->
        <div class="about-text">
          <h2>
              Un site qui <span class="highlight"> vous ressemble 
              <img src="<?= url('assets/images/sparkles-svgrepo-com.svg') ?>" alt="sparkles">
              </span>
          </h2>
          <p>
              Chez MGDA, on est là pour les pros qui veulent du concret. 
              Spécialistes en création de sites pour les conciergeries et agences de location de vacances, on imagine des solutions simples, efficaces et adaptées à vos attentes (et votre budget). 
              Site vitrine ? Plateforme de réservation ? Référencement qui fait le job ? Vous avez l’idée, on s’occupe du reste. 
              Ensemble, on construit un site qui reflète votre style et fait parler de vous.
          </p>
          <h4>
              <a href="#contact" class="btn-tertiary">Alors, on démarre ?</a>
          </h4>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <?php if ($services_section = $page->services_section()->toStructure()): ?>
    <section id="services" class="services">
      <div class="services-container">
        <div class="services-title">
          <div class="service-title-div">
            <h2>Nos Services</h2>
            <p>Que vous ayez besoin d’un site vitrine, d’une plateforme de réservation ou d’une stratégie de visibilité, on a tout ce qu’il faut pour booster votre présence en ligne.</p>
          </div>
          <div class="services-image">
            <img src="<?= url('assets/images/undraw_startup_life_re_8ow9.svg') ?>" alt="Illustration">
          </div>
        </div>
        <div class="services-list">
          <?php foreach ($services_section as $section): ?>
            <?php if ($services = $section->service()->toStructure()): ?>
              <?php foreach ($services as $service): ?>
                <div class="service-item">
                  <div class="service-icon-wrapper">
                    <?php if ($icon = $service->icon()->toFile()): ?>
                      <img src="<?= $icon->url() ?>" alt="<?= $service->title() ?>" class="service-icon">
                    <?php endif ?>
                  </div>
                  <h3 class="service-title"><?= $service->title() ?></h3>
                  <p class="service-description"><?= $service->description() ?></p>
                  <!-- <a href="#" class="service-link">Read More ⟶</a> -->
                </div>
              <?php endforeach ?>
            <?php endif ?>
          <?php endforeach ?>
        </div>
      </div>
    </section>
  <?php endif ?>

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio">
    <div class="portfolio-container">
      <h2>Nos maquettes</h2>
      <p>Quelques exemples visuels pour vous inspirer et vous donner une idée de notre style et de nos possibilités.</p>
      <!-- Switch Forfaits -->
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
            <span class="badge badge-essentiel">Essentiel</span> <!-- ⬅ badge initial en vert -->
            <p class="tagline">L’essentiel pour démarrer vite et bien.</p>
          </div>
        </div>
  </section>

  <!-- Eco-Design Section -->
  <section class="eco-design">
      <div class="eco-container">
          <!-- Première section : Éco-conception -->
          <div class="eco-section1">
              <div class="eco-text">
                  <h2 class="eco-title">L'éco-conception au cœur de nos sites web</h2>
                  <p class="eco-description">
                      Chez MGDA, nous concevons des sites web en suivant les règles de l'éco-conception. 
                      Grâce à des pratiques allégées et respectueuses de l'environnement, nous offrons des sites web légers, rapides et optimisés. 
                      De plus, notre <strong>certification INR</strong> garantit notre engagement vers un web plus durable.
                  </p>
              </div>
              <div class="eco-image">
                  <img src="<?= url('assets/images/inr.png') ?>" alt="Logo Eco-Conception INR" class="logo-eco">
              </div>
          </div>

          <!-- Deuxième section : Kirby -->
          <div class="eco-section2">
              <div class="eco-image">
                  <img src="<?= url('assets/images/logo_of_kirby_cms.png') ?>" alt="Logo Kirby" class="logo-kirby">
              </div>
              <div class="eco-text">
                  <h2 class="eco-title">Un CMS léger et éco-responsable</h2>
                  <p class="eco-description">
                      Nos sites sont conçus avec <strong>Kirby</strong>, un CMS moderne qui n'utilise pas de base de données, réduisant ainsi l'empreinte écologique et améliorant la vitesse de chargement. 
                      Idéal pour les entreprises soucieuses d'un web performant et respectueux de l'environnement.
                  </p>
              </div>
          </div>
      </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact">
    <div class="contact-container">
      <div class="contact-div">
          <h2>Contactez-nous</h2>
          <p>
              Pour toute demande ou information, n'hésitez pas à nous contacter directement :
          </p>
          <div class="contact-details">
              <div class="contact-item">
                  <img src="<?= url('assets/images/phone-icon.svg') ?>" alt="Téléphone">
                  <a href="tel:+33676763055">+33 6 76 76 30 55</a>
              </div>
              <div class="contact-item">
                  <img src="<?= url('assets/images/email-icon.svg') ?>" alt="E-mail">
                  <a href="mailto:agence.mgda@gmail.com">agence.mgda@gmail.com</a>
              </div>
          </div>
          <p class="contact-note">
              Disponible du lundi au vendredi, de 9h à 18h.
          </p>
      </div>
      <div class="contact-image">
          <img src="<?= url('assets/images/undraw_phone_call_re_hx6a.svg') ?>" alt="Illustration">
      </div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>