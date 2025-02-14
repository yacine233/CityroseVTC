<?php
require 'db.php';

if (isset($_POST["username"]) || isset($_POST["email"])) {
    $username = $_POST["username"] ?? '';
    $email = $_POST["email"] ?? '';

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$username, $email]);
    $existe = $stmt->fetchColumn();

    if ($existe > 0) {
        echo "existe"; // Renvoie "existe" si le username ou l'email est déjà pris
    } else {
        echo "disponible"; // Sinon, renvoie "disponible"
    }
}
?>
