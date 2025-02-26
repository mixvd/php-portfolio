<!-- Github Repository: https://github.com/mixvd/php-portfolio -->

<?php
// Start session to manage user authentication across pages
session_start();

// Initialize error message variable
$error = "";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the password from the form
    $password = $_POST["password"];

    // Define the correct password (in reality, this would be hashed and stored securely)
    $correct_password = "secret123";

    // Check if the password is correct
    if ($password === $correct_password) {
        // Set session variable to indicate successful authentication
        $_SESSION["authenticated"] = true;

        // Redirect to the bio page
        header("Location: bio.php");
        exit();
    } else {
        // Set error message for incorrect password
        $error = "Mot de passe incorrect. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Portfolio</title>
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
        <section class="login-section">
            <div class="login-container">
                <h1>Accès à ma biographie</h1>
                <p>Entrez le mot de passe pour accéder à ma biographie complète.</p>

                <?php if (!empty($error)): ?>
                    <div class="error-message">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="login-form">
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <div class="password-input">
                            <input type="password" id="password" name="password" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Accéder <i class="fas fa-key"></i></button>
                </form>

                <div class="login-hint">
                    <p><i class="fas fa-info-circle"></i> Indice : Le mot de passe est "secret123"</p>
                </div>
            </div>
            <div class="login-decoration">
                <div class="shape-1"></div>
                <div class="shape-2"></div>
                <div class="shape-3"></div>
            </div>
        </section>
    </main>

    <!-- Footer section included from a separate file -->
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>