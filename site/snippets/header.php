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
    <div class="container">
        <h1 class="logo">
            <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
        </h1>
        
        <!-- Navigation -->
        <nav class="main-nav">
            <ul>
                <li><a href="<?= $site->url() ?>">Home</a></li>
                <li><a href="<?= $site->url() ?>/services">Services</a></li>
                <li><a href="<?= $site->url() ?>/case-studies">Case Studies</a></li>
                <li><a href="<?= $site->url() ?>/contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
