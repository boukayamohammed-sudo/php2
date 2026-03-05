<?php
session_start();

if (isset($_SESSION["pseudo"])) {
    header("Location: accueil.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pseudo = trim($_POST["pseudo"]);

    if (!empty($pseudo)) {

        $_SESSION["pseudo"] = $pseudo;

        setcookie("pseudo", $pseudo, time() + 3600, "/");

        header("Location: accueil.php");
        exit();
    } else {
        $erreur = "Veuillez entrer un pseudo.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Connexion</h2>

<?php
if (!empty($erreur)) {
    echo "<p>$erreur</p>";
}
?>

<form method="POST">
    Pseudo: <input type="text" name="pseudo"><br><br>
    <button type="submit">Se connecter</button>
</form>

</body>
</html>