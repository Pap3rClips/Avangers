<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Framework - Anthony Stark</title>
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
                <h1>Mark Framework</h1>
                <p class="project-subtitle">Framework JavaScript nouvelle génération</p>
            </header>

            <section class="project-overview">
                <div class="project-image">
                    <img src="../images/mark.jpg" alt="Mark Framework Demo" id="mark_img">
                </div>
                <div class="project-description">
                    <h2>Vue d'ensemble</h2>
                    <p>Mark Framework est un framework JavaScript moderne conçu pour offrir des performances exceptionnelles et une expérience de développement optimale.</p>
                    
                    <h3>Technologies utilisées</h3>
                    <ul class="tech-list">
                        <li>JavaScript</li>
                        <li>WebAssembly</li>
                        <li>Rust (compilation)</li>
                        <li>WebGL</li>
                    </ul>

                    <h3>Caractéristiques</h3>
                    <ul>
                        <li>Rendu ultra-rapide</li>
                        <li>Support WebAssembly natif</li>
                        <li>Hot Module Replacement</li>
                        <li>Zero-config</li>
                    </ul>
                </div>
            </section>

            <section class="project-details-section">
                <h2>Exemple d'utilisation</h2>
                <div class="code-example">
                    <pre><code>
import { createApp } from 'mark-framework';

const app = createApp({
    state: {
        count: 0
    },
    template: `
        <div>
            <h1>{{ count }}</h1>
            <button @click="increment">+1</button>
        </div>
    `,
    methods: {
        increment() {
            this.count++;
        }
    }
});

app.mount('#app');
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