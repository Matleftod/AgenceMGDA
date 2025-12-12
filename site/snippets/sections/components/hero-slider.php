<?php

// Récupère correctement les fichiers du champ files
$slides = $page->hero_section()->toFiles();

?>

<?php if ($slides->isNotEmpty()): 
// Première image (utilisée en fallback mobile)
$first = $slides->first();
?>

<div class="hero-center">

  <!-- IMAGE MOBILE UNIQUEMENT -->
  <div class="hero-mobile-image">
    <img 
      src="<?= $first->thumb(['width' => 700, 'quality' => 60])->url() ?>"
      alt="<?= $first->alt() ?: 'hero' ?>"
      width="<?= $first->width() ?>"
      height="<?= $first->height() ?>"
      loading="lazy"
    >
  </div>

  <!-- SLIDER DESKTOP / TABLETTE -->
  <div class="hero-slider">
    <?php foreach ($slides as $i => $img): ?>
      <picture>

        <source 
          srcset="<?= $img->thumb([
            'width' => 1200,
            'format' => 'webp',
            'quality' => 60
          ])->url() ?>" 
          type="image/webp">

        <source 
          srcset="<?= $img->thumb([
            'width' => 1200,
            'format' => 'jpg',
            'quality' => 65
          ])->url() ?>" 
          type="image/jpeg">

        <img 
          src="<?= $img->thumb([
            'width' => 1200,
            'quality' => 65
          ])->url() ?>"
          class="slide <?= $i === 0 ? 'active' : '' ?>"
          alt="<?= $img->alt() ?: $img->filename() ?>"
          width="<?= $img->width() ?>"
          height="<?= $img->height() ?>"
          <?= $i === 0 ? '' : 'loading="lazy"' ?>
        >
      </picture>
    <?php endforeach ?>
  </div>
</div>
<?php endif; ?>