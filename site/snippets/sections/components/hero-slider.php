<?php

// Récupère correctement les fichiers du champ files
$slides = $page->hero_section()->toFiles();

?>

<?php if ($slides->isNotEmpty()): ?>
<div class="hero-center">
  <div class="hero-slider">

    <?php foreach ($slides as $i => $img): ?>
      <picture>

        <source 
          srcset="<?= $img->thumb([
            'width' => 960,
            'format' => 'webp',
            'quality' => 60
          ])->url() ?>" 
          type="image/webp">

        <source 
          srcset="<?= $img->thumb([
            'width' => 960,
            'format' => 'jpg',
            'quality' => 65
          ])->url() ?>" 
          type="image/jpeg">

        <img 
          src="<?= $img->thumb([
            'width' => 960,
            'quality' => 65
          ])->url() ?>"
          class="slide <?= $i === 0 ? 'active' : '' ?>"
          alt="<?= $img->alt() ?: $img->filename() ?>"
          width="<?= $img->width() ?>"
          height="<?= $img->height() ?>"
          <?= $i === 0 ? '' : 'loading="lazy"' ?>
        >

      </picture>
    <?php endforeach; ?>

  </div>
</div>
<?php endif; ?>