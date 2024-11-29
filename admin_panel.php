<?php 
session_start();
if (!isset($_SESSION['admin']) or $_SESSION['admin'] != true) {
    header("Location: login.php");
}

require_once(__DIR__."\config\mysql.php");
require_once(__DIR__."\databaseconnect.php");

$messagesStatement = $mysqlClient->prepare("SELECT * from messages");
$messagesStatement->execute();
$messages = $messagesStatement->fetchAll();

echo "<table class='messages-table'>";
echo "<thead>";
echo "<tr><th>Nom</th><th>Email</th><th>Message</th></tr>";
echo "</thead>";
echo "<tbody>";
foreach ($messages as $message) {
    $nom = $message['nom'];
    $email = $message['email'];
    $message_content = $message['message'];
    echo "<tr>";
    echo "<td>" . $nom . "</td>";
    echo "<td>" . $email . "</td>";
    echo "<td>" . $message_content . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>

<style>
    table, th, td {
    border: 1px solid black; /* Bordure grise légère autour du tableau et des cellules */
    border-radius: 5px; /* Coins arrondis pour un effet plus doux */
    padding: 5px;

    }
</style>