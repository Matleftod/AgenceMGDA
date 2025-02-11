<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= url('assets/css/main.css') ?>">
    
    <!-- Section-specific CSS -->
    <link rel="stylesheet" href="<?= url('assets/css/header.css') ?>">
    <link rel="stylesheet" href="<?= url('assets/css/footer.css') ?>">
    <?php if ($page->template() == 'home'): ?>
        <link rel="stylesheet" href="<?= url('assets/css/home.css') ?>">
    <?php endif ?>
</head>
<body>

<header class="site-header">
    <div class="head-container transparent">
        <div class="logo">
            <a href="<?= $site->url() ?>">
                <img src="<?= url('assets/images/logoMGDA.png') ?>" alt="<?= $site->title() ?> logo">
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
                <li><a href="#home">Accueil</a></li>
                <li><a href="#about">À propos de nous</a></li>
                <li><a href="#services">Nos Services</a></li>
            </ul>
            <a href="#contact" class="btn-primary"><span>Nous Contacter</span></a>
        </nav>
    </div>
</header>
