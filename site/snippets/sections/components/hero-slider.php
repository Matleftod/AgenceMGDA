<?php
$slides = $page->hero_section()->toFiles();
if ($slides->isEmpty()) return;

$first = $slides->first();

// Placeholder 1×1 pour éviter tout téléchargement quand le media ne matche pas
$placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

// Breakpoints alignés avec ton responsive.css
$bpMobileMax = 768;  // mobile <= 768
$bpDesktopMin = 769; // slider >= 769 (inclut tablette)
?>

<div class="hero-center">

  <!-- IMAGE MOBILE UNIQUEMENT (ne télécharge rien au-dessus de 768px) -->
  <div class="hero-mobile-image">
    <?php
      $firstMobileWebp = $first->thumb(['width' => 700, 'format' => 'webp', 'quality' => 60]);
      $firstMobileJpg  = $first->thumb(['width' => 700, 'format' => 'jpg',  'quality' => 65]);
    ?>
    <picture>
      <source
        media="(max-width: <?= $bpMobileMax ?>px)"
        srcset="<?= $firstMobileWebp->url() ?>"
        type="image/webp"
      >
      <source
        media="(max-width: <?= $bpMobileMax ?>px)"
        srcset="<?= $firstMobileJpg->url() ?>"
        type="image/jpeg"
      >
      <img
        src="<?= $placeholder ?>"
        alt="<?= $first->alt() ?: 'hero' ?>"
        width="<?= $firstMobileJpg->width() ?>"
        height="<?= $firstMobileJpg->height() ?>"
        loading="eager"
        decoding="async"
        fetchpriority="high"
      >
    </picture>
  </div>

  <!-- SLIDER DESKTOP / TABLETTE (ne télécharge rien en dessous de 769px) -->
  <div class="hero-slider">
    <?php foreach ($slides as $i => $img): ?>
      <?php
        $desktopWebp = $img->thumb(['width' => 1200, 'format' => 'webp', 'quality' => 60]);
        $desktopJpg  = $img->thumb(['width' => 1200, 'format' => 'jpg',  'quality' => 65]);
      ?>
      <picture>
        <source
          media="(min-width: <?= $bpDesktopMin ?>px)"
          srcset="<?= $desktopWebp->url() ?>"
          type="image/webp"
        >
        <source
          media="(min-width: <?= $bpDesktopMin ?>px)"
          srcset="<?= $desktopJpg->url() ?>"
          type="image/jpeg"
        >
        <img
          src="<?= $placeholder ?>"
          class="slide <?= $i === 0 ? 'active' : '' ?>"
          alt="<?= $img->alt() ?: $img->filename() ?>"
          width="<?= $desktopJpg->width() ?>"
          height="<?= $desktopJpg->height() ?>"
          loading="<?= $i === 0 ? 'eager' : 'lazy' ?>"
          decoding="async"
          <?= $i === 0 ? 'fetchpriority="high"' : '' ?>
        >
      </picture>
    <?php endforeach ?>
  </div>

</div>