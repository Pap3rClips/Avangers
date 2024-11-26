<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Ultron - Anthony Stark</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/projects.css">
</head>
<body>
    <nav>
        <div class="nav-content">
            <div class="logo">A.S</div>
            <div class="nav-links">
                <a href="../index.php">Accueil</a>
                <a href="../about.php">À propos</a>
                <a href="../contact.php">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        <article class="project-details">
            <header class="project-header">
                <h1>Projet Ultron</h1>
                <p class="project-subtitle">Système de sécurité intelligent</p>
            </header>

            <section class="project-overview">
                <div class="project-image">
                    <img src="../images/ultron.jpg" alt="Interface Ultron" id="ultron_img">
                </div>
                <div class="project-description">
                    <h2>Vue d'ensemble</h2>
                    <p>Ultron est un système de sécurité avancé utilisant l'intelligence artificielle pour détecter et prévenir les menaces en temps réel.</p>
                    
                    <h3>Technologies utilisées</h3>
                    <ul class="tech-list">
                        <li>Python</li>
                        <li>TensorFlow</li>
                        <li>OpenCV</li>
                        <li>FastAPI</li>
                    </ul>

                    <h3>Fonctionnalités</h3>
                    <ul>
                        <li>Détection d'anomalies</li>
                        <li>Analyse comportementale</li>
                        <li>Alertes en temps réel</li>
                        <li>Dashboard sécurisé</li>
                    </ul>
                </div>
            </section>

            <section class="project-details-section">
                <h2>Architecture du système</h2>
                <div class="code-example">
                    <pre><code>
from ultron.core import SecuritySystem
from ultron.detectors import AnomalyDetector

system = SecuritySystem()
detector = AnomalyDetector(
    threshold=0.85,
    mode='realtime'
)

@system.on_threat_detected
async def handle_threat(threat_data):
    await system.trigger_alert(threat_data)
    await system.log_incident(threat_data)
                    </code></pre>
                </div>
            </section>
        </article>
    </main>

    <footer>
        <p>© 2024 Anthony Stark. Tous droits réservés.</p>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>