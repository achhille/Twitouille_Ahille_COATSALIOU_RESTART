<?php

require 'template/database.php';

$name = $_POST["name"];
$password = $_POST["password"];

$insert = $database->prepare("INSERT INTO user (name, password) VALUES (:bname, :bpassword)");
$insert->execute([
    "bname" => $name,
    "bpassword" => $password
]);

// redirection vers la page de connexion après 5 secondes
header("refresh:5;url=login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création réussie</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<?php require "template/sidenav.php" ?>

<h1>Brevo, conecter xd</h1>
<h2>Vous allez être redirigés vers la page de connexion dans un instant </h2>

<a href="index.php"><button>Retour à l'accueil</button></a>
<a href="login.php"><button>Se Connecter</button></a>

<script src="SCRIPT/script.js"></script>
</body>
</html>