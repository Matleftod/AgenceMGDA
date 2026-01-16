<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    // -------- SEO: title / description (avec overrides par page)
    $defaultDescription = "Agence MGDA : Je crée des sites vitrines écologiques et sur-mesure, pensés pour les commerçants, artisans, créatifs et entreprises à taille humaine. Des sites beaux, simples à gérer au quotidien, et conçus pour valoriser pleinement ton savoir-faire.";

    $isHome = $page->isHomePage();

    $seoTitle = $page->seo_title()->isNotEmpty()
      ? $page->seo_title()->value()
      : ($isHome
          ? "Agence web éco-conçue à Bègles | " . $site->title()->value()
          : $page->title()->value() . " | " . $site->title()->value()
        );

    $seoDescription = $page->seo_description()->isNotEmpty()
      ? $page->seo_description()->value()
      : $defaultDescription;

    // Canonical: jamais de hash (/#about etc.), donc URL “pure”
    $canonical = $isHome ? $site->url() : $page->url();

    // -------- OG image: home => 1ère image du hero, sinon 1ère image de la page, sinon fallback logo
    $ogFile = null;

    if ($isHome && $page->hero_section()->isNotEmpty()) {
      $ogFile = $page->hero_section()->toFiles()->first();
    } else {
      $ogFile = $page->images()->sortBy('sort', 'asc')->first();
    }

    $ogImageUrl = null;
    $ogImageW = null;
    $ogImageH = null;

    if ($ogFile) {
      $ogThumb = $ogFile->thumb([
        'width' => 1200,
        'height' => 630,
        'crop' => true,
        'format' => 'jpg',
        'quality' => 70
      ]);
      $ogImageUrl = $ogThumb->url();
      $ogImageW = 1200;
      $ogImageH = 630;
    } else {
      // fallback existant chez toi (png)
      $ogImageUrl = url('assets/images/logoMGDA.png');
    }

    $company = option('company', []);
    $companyUrl = $company['url'] ?? $site->url();
    $logoPath = $company['logo'] ?? '/assets/images/logoMGDA.png';
    $logoUrl = str_starts_with($logoPath, 'http') ? $logoPath : url(ltrim($logoPath, '/'));

    $schema = [
    '@context' => 'https://schema.org',
    '@type'    => 'ProfessionalService',
    '@id'      => rtrim($companyUrl, '/') . '/#org',
    'name'     => $company['name'] ?? $site->title()->value(),
    'url'      => $companyUrl,
    'email'    => $company['email'] ?? null,
    'telephone'=> $company['telephone'] ?? null,
    'logo'     => $logoUrl,
    'image'    => $logoUrl,
    'areaServed' => $company['areaServed'] ?? null,
    'sameAs'     => $company['sameAs'] ?? null,
    ];

    $addr = $company['address'] ?? null;
    if (is_array($addr)) {
    $schema['address'] = array_filter([
        '@type'           => 'PostalAddress',
        'streetAddress'   => $addr['streetAddress'] ?? null,
        'addressLocality' => $addr['addressLocality'] ?? null,
        'postalCode'      => $addr['postalCode'] ?? null,
        'addressRegion'   => $addr['addressRegion'] ?? null,
        'addressCountry'  => $addr['addressCountry'] ?? null,
    ]);
    }

    $schema = array_filter($schema, fn($v) => $v !== null && $v !== []);
    ?>
    
    <script type="application/ld+json">
    <?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
    </script>

    <?php
    // CSS cache-busting
    $cssRel  = 'assets/css/output.css';
    $cssPath = kirby()->root('assets') . '/css/output.css';
    $cssV    = is_file($cssPath) ? filemtime($cssPath) : null;
    ?>

    <title><?= esc($seoTitle) ?></title>
    <meta name="description" content="<?= esc($seoDescription) ?>">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="<?= esc($canonical) ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= esc($site->title()->value()) ?>">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:title" content="<?= esc($seoTitle) ?>">
    <meta property="og:description" content="<?= esc($seoDescription) ?>">
    <meta property="og:url" content="<?= esc($canonical) ?>">
    <meta property="og:image" content="<?= esc($ogImageUrl) ?>">
    <?php if ($ogImageW && $ogImageH): ?>
      <meta property="og:image:width" content="<?= $ogImageW ?>">
      <meta property="og:image:height" content="<?= $ogImageH ?>">
    <?php endif; ?>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= esc($seoTitle) ?>">
    <meta name="twitter:description" content="<?= esc($seoDescription) ?>">
    <meta name="twitter:image" content="<?= esc($ogImageUrl) ?>">

    <!-- Favicon principal -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Favicon PNG -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">

    <!-- Apple -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <!-- PWA -->
    <link rel="manifest" href="/site.webmanifest">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= url($cssRel) . ($cssV ? '?v=' . $cssV : '') ?>">
</head>
<body>

<header class="site-header">
    <div class="head-container transparent">
        <div class="logo">
            <a href="<?= $site->url() ?>">
                <img src="<?= url('assets/images/logoMGDA.webp') ?>" alt="<?= $site->title() ?> logo">
            </a>
        </div>

        <div class="burger-menu" id="burgerMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="main-nav" id="mainNav">
            <ul>
                <li><a href="/#home">Accueil</a></li>
                <li><a href="/#about">À propos de MGDA</a></li>
                <li><a href="/#services">Services</a></li>
                <li><a href="/#portfolio">Maquettes</a></li>
            </ul>
            <a href="/#contact" class="btn-primary"><span>Me Contacter</span></a>
        </nav>
    </div>
</header>