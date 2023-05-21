



<?php
session_start();

// vérifier si utilisateur connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// informations du profil de l'utilisateur
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

// photo de profil par défaut
$default_profile_image = "https://cdn.discordapp.com/attachments/1105285210041483334/1109503143429025843/default_smile.png";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="CSS/profstyle.css">
</head>
<body>

<?php require "template/sidenav.php" ?>


<div class="mainContainer">
    <h1>Profil de <?php echo $user_name; ?><span>#<?= $user_id ?></span></h1>

    <img class="pfp" src="<?php echo $default_profile_image; ?>" alt="Photo de profil par défaut">

    <div class="userInfos">
        <p class="userText">Nom d'utilisateur : <?php echo $user_name; ?></p>
        <p class="userText">Identifiant : #<?php echo $user_id; ?></p>
    </div>

    <a href="logout.php"><button class="disco">Déconnexion</button></a>
</div>

<script src="SCRIPT/script.js"></script>
</body>
</html>
