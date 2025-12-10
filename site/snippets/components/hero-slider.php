<?php 
// Récupère les noms des fichiers (strings)
$filenames = $page->hero_section()->value();

// Convertit en tableau
$filenames = explode(',', $filenames);

// Convertit chaque string en objet File Kirby
$slides = array_map(fn($name) => $page->file(trim($name)), $filenames);

// Filtre les fichiers introuvables pour éviter les erreurs
$slides = array_filter($slides);
?>

<?php if (!empty($slides)): ?>
<div class="hero-center">
  <div class="hero-slider">

    <?php foreach ($slides as $i => $img): ?>
      <picture>

        <!-- WebP -->
        <source 
          srcset="<?= $img->thumb([
            'width' => 960,
            'format' => 'webp',
            'quality' => 60
          ])->url() ?>" 
          type="image/webp">

        <!-- JPG fallback -->
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
    <?php endforeach ?>

  </div>
</div>
<?php endif ?>