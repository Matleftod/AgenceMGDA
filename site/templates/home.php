<?php snippet('header') ?>

<main class="home">

  <!-- Hero Section -->
  <?php if ($hero = $page->hero_section()->toStructure()->first()): ?>    
    <section class="hero" style="background-image: url('<?= $hero->background_image()->toFile()->url() ?>');">
      <div class="hero-content">
        <h1><?= $hero->title() ?></h1>
        <p><?= $hero->subtitle() ?></p>
      </div>
    </section>
  <?php endif ?>

  <!-- Services Section -->
  <?php if ($services = $page->services_section()->toStructure()): ?>
    <section class="services">
      <h2>Our Services</h2>
      <div class="services-list">
        <?php foreach ($services as $service): ?>
          <div class="service-item">
            <?php if ($icon = $service->icon()->toFile()): ?>
              <img src="<?= $icon->url() ?>" alt="<?= $service->title() ?>">
            <?php endif ?>
            <h3><?= $service->title() ?></h3>
            <p><?= $service->description() ?></p>
          </div>
        <?php endforeach ?>
      </div>
    </section>
  <?php endif ?>

  <!-- Testimonials Section -->
  <?php if ($testimonials = $page->testimonials_section()->toStructure()): ?>
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
  <?php endif ?>

  <!-- Case Studies Section -->
  <?php if ($case_studies = $page->case_studies_section()->toStructure()): ?>
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
  <?php endif ?>

</main>

<?php snippet('footer') ?>
