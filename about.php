




<?php
session_start();
require 'template/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $query = $database->prepare("SELECT * FROM user WHERE name = :name AND password = :password");
    $query->execute([
        "name" => $name,
        "password" => $password
    ]);

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // L'utilisateur est connecté avec succès
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        header("Location: profile.php");
        exit;
    } else {
        // Identifiants invalides, afficher un message d'erreur
        $error_message = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<?php require "template/sidenav.php" ?>


<div class="mainContainer">

    <h1>À propos de nous</h1>

    <p class="aboutText">Bienvenue sur Twitouille ! Nous sommes une plateforme de microblogging dynamique qui permet à nos utilisateurs de partager leurs pensées, leurs idées et leurs expériences en temps réel. Notre objectif est de créer une communauté en ligne où chaque voix compte et où la diversité des opinions est célébrée.</p>
    <br>
    <p class="aboutText">Nous croyons en la puissance des mots et en l'impact qu'ils peuvent avoir sur le monde. Twitouille a été conçu pour offrir une plateforme accessible à tous, où chacun peut s'exprimer librement et être entendu. Que vous soyez un passionné de technologie, un artiste, un homme politique, un entrepreneur ou simplement quelqu'un qui veut partager son quotidien, notre plateforme vous permet de vous connecter avec des personnes partageant les mêmes idées et de découvrir de nouvelles perspectives.</p>
    <br>
    <p class="aboutText">Chez Twitouille, nous valorisons la liberté d'expression tout en veillant à ce que notre communauté reste respectueuse et inclusive. Nous encourageons des discussions constructives et nous nous engageons à lutter contre le harcèlement, les discours haineux et toute forme d'abus. La sécurité de nos utilisateurs est une priorité absolue, et nous mettons en place des mesures robustes pour garantir un environnement en ligne sûr et bienveillant, c'est mesures contiennent sans pour autant s'y limiter beaucoup d'espoir en votre bon comportement car notre modération est très limitée.</p>
    <br>
    <p class="aboutText">En tant que plateforme de microblogging, nous offrons une expérience intuitive et conviviale. Vous pouvez publier des messages courts, appelés "twoots", pour partager vos réflexions instantanément.</p>
    <br>
    <p class="aboutText">Rejoignez-nous dès aujourd'hui et faites partie d'une communauté florissante où les idées se propagent et où les conversations prennent vie. Inscrivez-vous gratuitement et commencez à twooter dès maintenant !</p>
    <br>
    <p class="aboutText">Pour toute question ou assistance, n'hésitez pas à nous contacter à support@twitouille.com. Nous sommes impatients de vous voir rejoindre notre communauté vibrante.</p>
    <br><br>
    <p class="aboutText">L'équipe de Twitouille.</p>

</div>

<script src="SCRIPT/script.js"></script>
</body>
</html>
