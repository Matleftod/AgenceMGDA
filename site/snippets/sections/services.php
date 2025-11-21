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
                </div>
            <?php endforeach ?>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>
  </section>
<?php endif ?>