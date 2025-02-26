<footer class="site-footer">
    <div class="container footer-container">
        <div class="footer-logo">
            <span class="logo-text">Portfolio</span>
            <span class="logo-dot"></span>
        </div>

        <div class="footer-content">
            <div class="footer-section">
                <h3>Navigation</h3>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <?php if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true): ?>
                        <li><a href="connexion.php">Connexion</a></li>
                    <?php else: ?>
                        <li><a href="bio.php">Biographie</a></li>
                        <li><a href="logout.php">Déconnexion</a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contact</h3>
                <ul>
                    <li><i class="fas fa-envelope"></i> contact@johndoe.fr</li>
                    <li><i class="fas fa-phone"></i> +33 6 06 06 06 06</li>
                    <li><i class="fas fa-map-marker-alt"></i> Paris, France</li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Réseaux sociaux</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> Mon Portfolio. Tous droits réservés.</p>
        </div>
    </div>
</footer>