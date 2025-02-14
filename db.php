<?php
$host = "localhost";
$user = "root"; // Par défaut sous XAMPP
$password = ""; // Pas de mot de passe sous XAMPP
$dbname = "city_rose_vtc";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
