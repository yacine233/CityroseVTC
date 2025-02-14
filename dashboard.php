<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: connexion.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center">
        <h2>Bienvenue, <?php echo $_SESSION["username"]; ?> !</h2>
        <a href="logout.php" class="btn btn-danger mt-3">Déconnexion</a>
    </div>
</body>
</html>
