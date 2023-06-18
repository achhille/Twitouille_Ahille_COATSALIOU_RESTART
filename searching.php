


<?php

session_start();

require "template/database.php";

//préparation
$requete = $database->prepare("SELECT * FROM twoot ORDER BY date DESC");

//éxecution
$requete->execute();

//tablaeau associatif
$allTwoots = $requete->fetchAll(PDO::FETCH_ASSOC);

?>


<?php

$requete = $requete->fetch(PDO::FETCH_ASSOC);
// echo json_encode($requete);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<div class="background-container"></div>

<?php require "template/sidenav.php" ?>

<br><br><br><br><br><br><br><br><br><br>
<div class="mainContainer">

    <form class="searchBar" action="search.php" method="POST">
        <input type="text" name="search" placeholder="Rechercher un twoot">
        <button type="submit">Rechercher</button>
    </form>

</div>


<script src="SCRIPT/script.js"></script>
</body>
</html>