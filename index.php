<!-- Github Repository: https://github.com/mixvd/php-portfolio -->

<?php
// Start session to manage user authentication across pages
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
</head>

<body>
    <!-- Header section included from a separate file -->
    <?php include 'includes/header.php'; ?>

    <main class="container">
        <section class="hero">
            <div class="hero-content">
                <h1>Bienvenue sur mon portfolio</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio obcaecati inventore saepe nam ipsam
                    blanditiis consequuntur itaque illo corrupti, enim cum, doloremque error necessitatibus molestias
                    eaque illum velit. Fugit, nobis</p>
                <?php if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true): ?>
                    <a href="bio.php" class="btn">Découvrir ma bio <i class="fas fa-arrow-right"></i></a>
                <?php else: ?>
                    <a href="connexion.php" class="btn">Découvrir ma bio <i class="fas fa-arrow-right"></i></a>
                <?php endif; ?>
            </div>
            <div class="hero-image">
                <div class="shape"></div>
                <img src="assets/hero-image.jpg" alt="Placeholder">
            </div>
        </section>

        <section class="features">
            <div class="feature-card">
                <i class="fas fa-palette"></i>
                <h2>Créativité</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, fuga fugit.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-code"></i>
                <h2>Développement</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis unde expedita aperiam quae.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-lightbulb"></i>
                <h2>Innovation</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quaerat minus placeat.</p>
            </div>
        </section>
    </main>

    <!-- Footer section included from a separate file -->
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>