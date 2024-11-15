<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        
        <!-- Navigation -->
        <nav class="main-nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="#contact" class="cta-button">Get a Quote</a>
        </nav>
    </div>
</header>
