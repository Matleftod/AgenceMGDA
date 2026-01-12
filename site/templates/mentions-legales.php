<?php snippet('header') ?>

<main class="min-h-screen bg-bg-1 text-text-1 py-20 px-6">
  <section class="max-w-3xl mx-auto">

    <div class="space-y-10">

      <!-- TITRE PRINCIPAL -->
      <header class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-text-1 mb-4">
          Mentions légales
        </h1>

        <p class="text-text-3 text-base leading-relaxed max-w-2xl mx-auto">
          Conformément aux dispositions des articles 6-III et 19 de la loi du 21 juin 2004 pour la Confiance dans l’Économie Numérique,
          voici les informations légales concernant le site <?= $site->url() ?>.
        </p>
      </header>

      <!-- BLOC 1 -->
      <section>
        <h2 class="text-2xl font-bold text-accent-1 mb-3">1. Informations légales</h2>
        <p class="leading-relaxed text-text-2">
          <strong>Éditeur du site :</strong><br>
          Nom commercial : Agence MGDA<br>
          Forme juridique : Entreprise individuelle (auto-entreprise)<br>
          SIRET : 93495099900011<br>
          Responsable de publication : Matéo Girollet Dit Androt<br>
          Téléphone : 06 76 76 30 55<br>
          Email : <a href="mailto:agence.mgda@gmail.com" class="text-accent-1 underline">agence.mgda@gmail.com</a>
        </p>
      </section>

      <!-- BLOC 2 -->
      <section>
        <h2 class="text-2xl font-bold text-accent-1 mb-3">2. Hébergeur du site</h2>
        <p class="leading-relaxed text-text-2">
          <strong>Nom :</strong> IONOS SARL<br>
          Adresse : 7 place de la Gare, 57200 Sarreguemines, France<br>
          Téléphone : 09 70 80 89 11<br>
          Site web : 
          <a href="https://www.ionos.fr" target="_blank" rel="noopener" class="text-accent-1 underline">www.ionos.fr</a>
        </p>
      </section>

      <!-- BLOC 3 -->
      <section>
        <h2 class="text-2xl font-bold text-accent-1 mb-3">3. Données personnelles (RGPD)</h2>
        <p class="leading-relaxed text-text-2">
          Les informations collectées via les formulaires du site sont uniquement utilisées pour répondre aux demandes des utilisateurs.<br>
          Conformément au RGPD, vous disposez d’un droit d’accès, de rectification et de suppression de vos données.<br>
          Vous pouvez exercer vos droits à cette adresse : 
          <a href="mailto:agence.mgda@gmail.com" class="text-accent-1 underline">agence.mgda@gmail.com</a>.<br>
          Vous pouvez également saisir la CNIL : 
          <a href="https://www.cnil.fr" target="_blank" rel="noopener" class="text-accent-1 underline">www.cnil.fr</a>.
        </p>
      </section>

      <!-- BLOC 4 -->
      <section>
        <h2 class="text-2xl font-bold text-accent-1 mb-3">4. Propriété intellectuelle</h2>
        <p class="leading-relaxed text-text-2">
          Tous les contenus présents sur ce site (textes, images, graphismes, logo, vidéos)
          sont la propriété exclusive de l’Agence MGDA, sauf mention contraire.<br>
          Toute reproduction ou exploitation, même partielle, est interdite sans autorisation écrite préalable.
        </p>
      </section>

      <!-- BLOC 5 -->
      <section>
        <h2 class="text-2xl font-bold text-accent-1 mb-3">5. Cookies</h2>
        <p class="leading-relaxed text-text-2">
          Le site utilise uniquement des cookies <strong>strictement nécessaires</strong> à son fonctionnement
          (ex. gestion de session et sécurité).<br>
          Aucun cookie publicitaire ni traceur de suivi n’est utilisé. Le site n’emploie pas non plus d’outil de mesure d’audience
          impliquant le dépôt de cookies.<br>
          Dans cette configuration, <strong>aucun bandeau de consentement n’est requis</strong> (les cookies utilisés sont techniques).<br>
          Pour plus d’informations, consulte notre
          <a href="/cookies" class="text-accent-1 underline">politique de cookies</a>.
        </p>
      </section>

    </div>

  </section>
</main>

<?php snippet('footer') ?>