<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]); // Vérification du mot de passe

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["admin_logged_in"] = true;
        header("Location: admin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../frontend/style.css">
</head>
<body>
    <div id="banniere">
        <div class="ban">
            <h2>Identifiants incorrects !</h2>
            <div id="decon">
                <a href="../frontend/admin.html" >Réessayez</a>
            </div> 
        </div>
    </div>
</body>
</html>
