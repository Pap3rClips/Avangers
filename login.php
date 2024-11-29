<link rel="stylesheet" href="css/style.css">
<form action="login.php" method="POST">
    <label for="username">Username</label>
    <input name="username" type="username"></input>
    <label for="password">Password</label>
    <input name="password" type="password">
    <button type="submit">Se connecter</button>
</form>

<?php 
    session_start();
    $valid_username = "root";
    $valid_password = "root";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == $valid_username && $password == $valid_password) {
            $_SESSION['admin'] = true;
            header("Location: admin_panel.php");
        }else {
            echo "Nom d'utilisateur et/ou mot de passe incorrecte.";
        }
    }
?>