<?php
    include 'config.php';

// Vérifier si le formulaire est soumis

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $sql = "INSERT INTO contacts (nom, email, message) VALUES ('$nom', '$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Message envoyé avec succès !";
    } else {
        echo "Erreur : " . $conn->error;
    }
}

$conn->close();
?>
