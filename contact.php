<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Anthony Stark</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div class="nav-content">
            <div class="logo">A.S</div>
            <div class="nav-links">
                <a href="index.html">Accueil</a>
                <a href="about.html">À propos</a>
                <a href="contact.html" class="active">Contact</a>
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
                    <h2>Informations :</h2>
                    <p>Email: anthony.stark@jarvis.com</p>
                    <p>LinkedIn: @anthonystark</p>
                    <p>GitHub: @Anthony-stark</p>
                    <p>Téléphone: +33 07 38 68 59 85</p>
                    <p>Localisation : Paris </p>
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