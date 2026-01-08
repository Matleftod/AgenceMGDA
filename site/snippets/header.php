<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agence MGDA : Nous créons des sites vitrines écologiques et sur-mesure, pensés pour les commerçants, artisans, créatifs et entreprises à taille humaine. Des sites beaux, simples à gérer au quotidien, et conçus pour valoriser pleinement votre savoir-faire.">
    <meta name="robots" content="index, follow">

    <!-- Favicon principal -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    
    <!-- Favicon PNG (pour Chrome & autres navigateurs modernes) -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">

    <!-- Icône Apple (iOS et macOS) -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <!-- Icônes pour Android et PWA -->
    <link rel="manifest" href="/site.webmanifest">

    <title><?= $site->title() ?> | <?= $page->title() ?></title>
    
    <!-- Section-specific CSS -->
    <?php
    $cssRel  = 'assets/css/output.css';
    $cssPath = kirby()->root('assets') . '/css/output.css';
    $cssV    = is_file($cssPath) ? filemtime($cssPath) : null;
    ?>
    <link rel="stylesheet" href="<?= url($cssRel) . ($cssV ? '?v=' . $cssV : '') ?>">
    <?php if ($page->template() == 'home'): ?>
    <?php endif ?>
</head>
<body>

<header class="site-header">
    <div class="head-container transparent">
        <div class="logo">
            <a href="<?= $site->url() ?>">
                <img src="<?= url('assets/images/logoMGDA.webp') ?>" alt="<?= $site->title() ?> logo">
            </a>
        </div>
        
        <!-- Burger menu -->
        <div class="burger-menu" id="burgerMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Navigation -->
        <nav class="main-nav" id="mainNav">
            <ul>
                <li><a href="/#home">Accueil</a></li>
                <li><a href="/#about">À propos de nous</a></li>
                <li><a href="/#services">Nos Services</a></li>
                <li><a href="/#portfolio">Nos Maquettes</a></li>
            </ul>
            <a href="/#contact" class="btn-primary"><span>Nous Contacter</span></a>
        </nav>
    </div>
</header>
