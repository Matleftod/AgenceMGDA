<?php snippet('header') ?>
<main>
  <section>
    <h1><?= $page->text() ?></h1>
    <?php foreach ($page->service_items()->toStructure() as $service): ?>
      <h2><?= $service->title() ?></h2>
      <p><?= $service->description() ?></p>
    <?php endforeach ?>
  </section>
</main>
<?php snippet('footer') ?>
