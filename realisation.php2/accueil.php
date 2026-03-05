<?php
session_start();

if (!isset($_SESSION["pseudo"])) {
    header("Location: login.php");
    exit();
}

$pseudo = $_SESSION["pseudo"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>

<h2>Bienvenue <?php echo $pseudo; ?> 🎉</h2>

<p>Vous êtes connecté.</p>

<a href="logout.php">Déconnexion</a>

</body>
</html>