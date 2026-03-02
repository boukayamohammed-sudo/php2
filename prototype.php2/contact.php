<?php
$message_result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = trim($_POST["nom"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    
    if (empty($nom) || empty($email) || empty($message)) {
        $message_result = "Veuillez remplir tous les champs.";
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message_result = "Email invalide.";
    } 
    else {
        $message_result = "Merci $nom, votre message a été envoyé avec succès.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Contact</title>
</head>
<body>

<h2>Formulaire de contact</h2>

<?php

if (!empty($message_result)) {
    echo "<p>$message_result</p>";
}
?>

<form method="POST">
    Nom:<br>
    <input type="text" name="nom"><br><br>

    Email:<br>
    <input type="text" name="email"><br><br>

    Message:<br>
    <textarea name="message"></textarea><br><br>

    <button type="submit">Envoyer</button>
</form>

</body>
</html>