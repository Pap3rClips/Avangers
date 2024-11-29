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
    <?php 
        require_once(__DIR__."\..\config\mysql.php");
        require_once(__DIR__."\..\databaseconnect.php");

        $jericoStatement = $mysqlClient->prepare("SELECT * FROM projets WHERE projet_name='Jerico'");
        $jericoStatement->execute();
        $jerico = $jericoStatement->fetchAll();

        $name = $jerico[0]['projet_name'];
        $description = $jerico[0]['description'];
        $technoString = $jerico[0]['techno'];
        $fonctionString = $jerico[0]['fonction'];
        $technoArray = explode(',', $technoString);
        $fonctionArray = explode(',', $fonctionString);
    ?>

<nav>
        <div class="nav-content">
            <div class="logo">A.S</div>
            <div class="nav-links">
                <a href="../index.php" class="active">Accueil</a>
                <a href="../about.php">À propos</a>
                <a href="../contact.php">Contact</a>
                <a href="../login.php">Login</a>
            </div>
        </div>
    </nav>

    <main>
        <article class="project-details">
            <header class="project-header">
                <h1><?php echo $name;?></h1>
                <p class="project-subtitle">assistant virtuel conçu pour la gestion des missions</p>
            </header>

            <section class="project-overview">
                <div class="project-image">
                    <img id="jerico_img" src="../images/jerico.avif" alt="Interface Jerico">
                </div>
                <div class="project-description">
                    <h2>Vue d'ensemble</h2>
                    <p><?php echo $description;?></p>
                    
                    <h3>Technologies utilisées</h3>
                    <?php 
                        if ($technoString) {
                            echo "<ul class='tech-list'>";
                            foreach ($technoArray as $techno) {
                                echo "<li>" . $techno . "</li>";
                            }
                            echo "</ul>";
                        }
                        else {
                            echo "Aucune technologie trouvé.";
                        }
                    ?>

                    <h3>Fonctionnalités clés</h3>
                    <?php 
                        if ($fonctionString) {
                            echo "<ul>";
                            foreach ($fonctionArray as $fonction) {
                                echo "<li>" . $fonction . "</li>";
                            }
                            echo "</ul>";
                        }
                        else {
                            echo "Aucune fonctionnalitée trouvée.";
                        }
                    ?>
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

</body>
</html>