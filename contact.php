<?php
require_once(__DIR__."\config\mysql.php");
require_once(__DIR__."\databaseconnect.php");

// Récupérer les informations à propos
$aboutStatement = $mysqlClient->prepare("SELECT * FROM about");
$aboutStatement->execute();
$about = $aboutStatement->fetchAll();

// Récupérer les informations de contact
$contactStatement = $mysqlClient->prepare("SELECT * FROM contact_info LIMIT 1");
$contactStatement->execute();
$contact = $contactStatement->fetch();

// Extraire les valeurs
$description = $about[0]['description'];
$parcour = $about[0]['parcour'];
$competences = $about[0]['competences'];
$competencesArray = explode(',', $competences);

// Extraire les informations de contact
$email = $contact['email'];
$linkedin = $contact['linkedin'];
$github = $contact['github'];
$telephone = $contact['telephone'];
$localisation = $contact['localisation'];
?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Anthony Stark</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    
    ?>
    <nav>
        <div class="nav-content">
            <div class="logo">A.S</div>
            <div class="nav-links">
                <a href="index.php">Accueil</a>
                <a href="about.php">À propos</a>
                <a href="contact.php" class="active">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        <section class="contact">
            <h1>Contact</h1>
            <div class="contact-content">
                <form id="contact-form" onsubmit="handleSubmit(event)">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" required></textarea>
                    </div>
                    <button type="submit">Envoyer</button>
                </form>
                <div class="contact-info">
                    <h2>Informations de contact :</h2>
                <ul>
                    <li>Email: <?php echo $email; ?></li>
                    <li>LinkedIn: <?php echo $linkedin; ?></li>
                    <li>GitHub: <?php echo $github; ?></li>
                    <li>Téléphone: <?php echo $telephone; ?></li>
                    <li>Localisation: <?php echo $localisation; ?></li>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2024 Anthony Stark. Tous droits réservés.</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>