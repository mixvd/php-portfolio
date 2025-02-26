<!-- Github Repository: https://github.com/mixvd/php-portfolio -->

<?php
// Start session to manage user authentication across pages
session_start();

// Check if user is authenticated
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    // Redirect to login page if not authenticated
    header("Location: connexion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Biographie - Portfolio</title>
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
        <section class="bio-section">
            <div class="bio-header">
                <h1>À Propos de Moi</h1>
                <p class="bio-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <div class="bio-actions">
                    <a href="#" class="btn btn-outline"><i class="fas fa-download"></i> Télécharger CV</a>
                    <a href="#contact" class="btn"><i class="fas fa-envelope"></i> Me contacter</a>
                </div>
            </div>

            <div class="bio-content">
                <div class="bio-image">
                    <img src="assets/profile.jpg" alt="Photo de profil">
                    <div class="bio-social">
                        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <div class="bio-text">
                    <div class="bio-section-title">
                        <span class="line"></span>
                        <h2>À propos de moi</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>

                    <div class="bio-section-title">
                        <span class="line"></span>
                        <h2>Compétences</h2>
                    </div>
                    <div class="skills-container">
                        <div class="skill">
                            <span class="skill-name">HTML/CSS</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <span class="skill-name">JavaScript</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <span class="skill-name">PHP</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="skill">
                            <span class="skill-name">React</span>
                            <div class="skill-bar">
                                <div class="skill-level" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="bio-section-title">
                        <span class="line"></span>
                        <h2>Parcours</h2>
                    </div>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h3>Développeur Full Stack</h3>
                                <p class="timeline-date">2020 - Présent</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex impedit sint consequatur
                                    quia odio molestias veniam pariatur aut doloremque inventore consequuntur eius
                                    tempora iure, ab quae ipsa odit ut necessitatibus.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h3>Développeur Front-end</h3>
                                <p class="timeline-date">2018 - 2020</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsum quia corporis,
                                    laudantium iste sed magnam similique inventore aspernatur recusandae ad est tempora
                                    accusantium et nihil qui modi molestias amet?</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h3>Master en Informatique</h3>
                                <p class="timeline-date">2016 - 2018</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eius nostrum dolore
                                    labore sapiente incidunt neque sit beatae minima aliquid, minus a consequatur eos
                                    voluptates obcaecati magni, provident vitae! Adipisci.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contact" class="contact-section">
                <div class="bio-section-title">
                    <span class="line"></span>
                    <h2>Me contacter</h2>
                </div>
                <div class="contact-container">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <p>contact@johndoe.fr</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p>+33 6 06 06 06 06</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Paris, France</p>
                        </div>
                    </div>
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn">Envoyer <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer section included from a separate file -->
    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>