<?php snippet('header') ?>

<main class="home">

  <!-- Hero Section -->
  <section id="home" class="hero">
      <div class="hero-content animate-slide-down">
          <h1>We help you create <br> your <span class="highlight">website</span></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At ut turpis adipiscing tempus, magna elit nunc iaculis sit. Libero velit quis leo non.</p>
          <div class="hero-buttons">
              <a href="#" class="btn-primary">Get Started</a>
              <a href="#" class="btn-secondary">Contact Us</a>
          </div>
      </div>
      <div class="hero-image animate-fade-in">
          <img src="<?= url('assets/images/undraw_building_websites_i78t.svg') ?>" alt="Illustration">
      </div>
  </section>


  <!-- Services Section -->
  <?php if ($services_section = $page->services_section()->toStructure()): ?>
    <section id="services" class="services">
      <div class="services-container">
        <div class="services-title">
          <div class="service-title-div">
            <h2>Our Services</h2>
            <p class="services-intro">Lorem ipsum dolor sit amet, consectetur sadipscing elit, sed diam nonumy eirmod tempor invidunt ut labore et.</p>
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


  <!-- Testimonials Section -->
  <!-- <?php if ($testimonials = $page->testimonials_section()->toStructure()): ?>
    <section class="testimonials">
      <h2>What Our Clients Say</h2>
      <div class="testimonials-list">
        <?php foreach ($testimonials as $testimonial): ?>
          <div class="testimonial-item">
            <?php if ($photo = $testimonial->photo()->toFile()): ?>
              <img src="<?= $photo->url() ?>" alt="<?= $testimonial->name() ?>">
            <?php endif ?>
            <blockquote>
              <p><?= $testimonial->quote() ?></p>
              <cite>
                <?= $testimonial->name() ?>, <?= $testimonial->position() ?> at <?= $testimonial->company() ?>
              </cite>
            </blockquote>
          </div>
        <?php endforeach ?>
      </div>
    </section>
  <?php endif ?> -->

  <!-- Case Studies Section -->
  <!-- <?php if ($case_studies = $page->case_studies_section()->toStructure()): ?>
    <section class="case-studies">
      <h2>Our Work</h2>
      <div class="case-studies-list">
        <?php foreach ($case_studies as $case): ?>
          <div class="case-study-item">
            <?php if ($image = $case->image()->toFile()): ?>
              <img src="<?= $image->url() ?>" alt="<?= $case->title() ?>">
            <?php endif ?>
            <h3><?= $case->title() ?></h3>
            <p><?= $case->excerpt() ?></p>
            <a href="<?= $case->link() ?>">Read More</a>
          </div>
        <?php endforeach ?>
      </div>
    </section>
  <?php endif ?> -->

</main>

<?php snippet('footer') ?>
