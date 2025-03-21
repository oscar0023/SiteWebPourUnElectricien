<?php
session_start();
include "config.php";

// Vérifier si l'administrateur est connecté

if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: ../frontend/admin.html"); // Rediriger vers la page de connexion
    exit();
}

// Récupérer les demandes des clients

$sql = "SELECT * FROM contacts ORDER BY date_envoi ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Messages des Clients</title>
    <link rel="stylesheet" href="../frontend/style.css">
</head>
<body>
    <div id="banniere">
        <h1>📩 Messages des Clients</h1>
    </div>
    
    <section id="banniere">

        <div id="chantie">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= htmlspecialchars($row["nom"]) ?></td>
                    <td><?= htmlspecialchars($row["email"]) ?></td>
                    <td><?= htmlspecialchars($row["message"]) ?></td>
                    <td><?= $row["date_envoi"] ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>

    </section>
    
    <div id="decon">
        <a href="logout.php" >Se déconnecter</a>
    </div>
    

    <footer id="footer">Developpé par Oscar 2025</footer>
</body>
</html>
