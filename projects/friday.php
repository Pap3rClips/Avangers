<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.R.I.D.A.Y - Anthony Stark</title>
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
                <h1>F.R.I.D.A.Y</h1>
                <p class="project-subtitle">Interface de gestion intelligente</p>
            </header>

            <section class="project-overview">
                <div class="project-image">
                    <img src="../images/friday.jpg" alt="Interface FRIDAY" id="friday_img">
                </div>
                <div class="project-description">
                    <h2>Vue d'ensemble</h2>
                    <p>F.R.I.D.A.Y est une interface de gestion de tâches intelligente qui utilise l'apprentissage automatique pour optimiser la productivité.</p>
                    
                    <h3>Technologies utilisées</h3>
                    <ul class="tech-list">
                        <li>React</li>
                        <li>Node.js</li>
                        <li>MongoDB</li>
                        <li>Socket.IO</li>
                    </ul>

                    <h3>Fonctionnalités</h3>
                    <ul>
                        <li>Planification intelligente</li>
                        <li>Suggestions contextuelles</li>
                        <li>Collaboration en temps réel</li>
                        <li>Analyses prédictives</li>
                    </ul>
                </div>
            </section>

            <section class="project-details-section">
                <h2>Interface utilisateur</h2>
                <div class="code-example">
                    <pre><code>
import { useFriday } from '@friday/core';

function TaskManager() {
    const { tasks, schedule, optimize } = useFriday();
    
    return (
        <div className="dashboard">
            <TaskList tasks={tasks} />
            <Timeline schedule={schedule} />
            <OptimizeButton onClick={optimize} />
        </div>
    );
}
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