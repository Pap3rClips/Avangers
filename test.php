<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.0.2/dist/cerulean/bootstrap.min.css" rel="stylesheet">
    </head>


<body class="d-flex flex-column min-vh-100">

    <div class="container">
        <p>Our team is highly motivated. Bellow we present to you our members:</p>
        <!-- <ul>
                    <li> Alice</li>
                    <li> Maxime</li>
                    <li> Antoine</li>
                    
                    <li><?php echo $employees[0]['name']; ?></li>
                    <li><?php echo $employees[1]['name']; ?></li>
                    <li><?php echo $employees[2]['name']; ?></li>
        </ul> -->
        <ul>
            <?php foreach ($employees as $employee): ?>
                <li><?php echo $employee['name']; ?> 
                (<?php echo $employee['departement']; ?> 
                - <?php echo $employee['experience']; ?> years experience)</li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>


