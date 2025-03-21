<?php
    // Connexion à la base de données

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ebi_technologie";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }
?>