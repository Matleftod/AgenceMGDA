<?php snippet('header'); ?>

<main class="error-page">
  <div class="container">
    <h1>Oups ! Page non trouvée.</h1>
    <p>Désolé, la page que vous cherchez n'existe pas ou a été déplacée.</p>
    <a href="<?= $site->url() ?>" class="btn">Retour à l'accueil</a>
  </div>
</main>

<?php snippet('footer'); ?>