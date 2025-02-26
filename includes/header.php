<header class="site-header">
    <div class="container header-container">
        <div class="logo">
            <a href="index.php">
                <span class="logo-text">Portfolio</span>
                <span class="logo-dot"></span>
            </a>
        </div>

        <nav class="main-nav">
            <button class="menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-links">
                <li><a href="index.php"
                        class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Accueil</a>
                </li>

                <?php if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true): ?>
                    <li><a href="connexion.php"
                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'connexion.php' ? 'active' : ''; ?>">Connexion</a>
                    </li>
                <?php else: ?>
                    <li><a href="bio.php"
                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'bio.php' ? 'active' : ''; ?>">Biographie</a>
                    </li>
                    <li><a href="logout.php" class="nav-btn">Déconnexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>