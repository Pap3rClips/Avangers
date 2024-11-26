<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jerico - Anthony Stark</title>
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
                <h1>Jerico</h1>
                <p class="project-subtitle">assistant virtuel conçu pour la gestion des missions</p>
            </header>

            <section class="project-overview">
                <div class="project-image">
                    <img id="jerico_img" src="../images/jerico.avif" alt="Interface Jerico">
                </div>
                <div class="project-description">
                    <h2>Vue d'ensemble</h2>
                    <p>Jerico est un assistant virtuel conçu pour la gestion des missions et l’optimisation des performances des équipes de développement. Ce système permet de suivre l’avancement des projets, d'analyser les performances des tâches en temps réel, et de fournir des recommandations automatiques pour améliorer la productivité et la qualité des projets. Il intègre des outils modernes d'intelligence artificielle pour analyser les données de projet et propose des solutions intelligentes adaptées à chaque contexte.
                    </p>
                    
                    <h3>Technologies utilisées</h3>
                    <ul class="tech-list">
                        <li>Node.js</li>
                        <li>OpenAI API</li>
                        <li>WebSocket</li>
                        <li>Express.js</li>
                        <li>MongoDB</li>
                        <li>GitHub API</li>
                        <li>Jest</li>
                    </ul>

                    <h3>Fonctionnalités clés</h3>
                    <ul>
                        <li>Suivi de l'avancement des missions</li>
                        <li>Analyse en temps réel des performances</li>
                        <li>Recommandations automatiques</li>
                        <li>Gestion intelligente des tâches</li>
                        <li>Intégration avec GitLab/GitHub</li>
                    </ul>
                </div>
            </section>

            <section class="project-details-section">
                <h2>Défis techniques</h2>
                <p>L'un des principaux défis du projet a été l'intégration de modèles d'intelligence artificielle capables d'analyser et de recommander des actions de manière contextuelle, en tenant compte de la dynamique et des spécificités des projets. De plus, la gestion en temps réel des performances des équipes et des projets a nécessité une architecture scalable et réactive.</p>
                
                <div class="code-example">
                    <h3>Exemple d'utilisation</h3>
                    <pre><code>
                        const jerico = new JericoAssistant();
                        await jerico.analyzeProject({
                            repository: 'user/project',
                            branch: 'main'
                        });
                        
                        const performanceReport = await jerico.getPerformanceReport();
                        const suggestions = await jerico.getRecommendations();
                        
                        // Affichage des suggestions pour améliorer la productivité
                        console.log(suggestions);
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