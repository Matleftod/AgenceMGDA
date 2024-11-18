<footer class="site-footer">
    <div class="footer-container">
        <!-- Logo and Contact Info -->
        <div class="footer-logo-contact">
            <div class="footer-logo">
                <img src="<?= url('assets/images/logoMGDA.png') ?>" alt="Logo <?= $site->title() ?>">
            </div>
            <div class="footer-contact">
                <p>356 Route de Toulouse, 33130 Bègles</p>
                <p>+33 1 23 45 67 89 | <a href="mailto:exemple@email.com">exemple@email.com</a></p>
            </div>
        </div>
        
        <!-- Social Links -->
        <!-- <div class="footer-social">
            <a href="https://facebook.com" target="_blank"><img src="<?= url('assets/icons/facebook-icon.svg') ?>" alt="Facebook"></a>
            <a href="https://instagram.com" target="_blank"><img src="<?= url('assets/icons/instagram-icon.svg') ?>" alt="Instagram"></a>
            <a href="https://linkedin.com" target="_blank"><img src="<?= url('assets/icons/linkedin-icon.svg') ?>" alt="LinkedIn"></a>
            <a href="https://youtube.com" target="_blank"><img src="<?= url('assets/icons/youtube-icon.svg') ?>" alt="YouTube"></a>
        </div> -->

        <!-- Legal Links -->
        <div class="footer-legal">
            <p>&copy; <?= date('Y') ?> <?= $site->title() ?> - Tous droits réservés</p>
            <p>
                <a href="/mentions-legales">Mentions légales</a> -
                <a href="/cookies">Gestion des cookies</a> -
                <a href="/certificat">Certificat formation</a>
            </p>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<script src="<?= url('assets/js/header.js') ?>"></script>
<script src="<?= url('assets/js/home.js') ?>"></script>
</body>
</html>
