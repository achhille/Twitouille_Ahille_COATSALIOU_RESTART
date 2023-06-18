

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
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<div class="background-container"></div>

<?php require "template/sidenav.php" ?>



<div class="mainContainer">

<?php if (isset($_SESSION['user_name'])) { ?>
    <form class="twooting" method="POST" action="insertTW.php">
        <textarea type="text" name="send" placeholder="Quoi de neuf, <?= $_SESSION['user_name'] ?> ?" ></textarea>
        <button type="submit" name="sendTwoot">Envoyer</button>
        <input type="hidden" name="name" value="<?= $_SESSION['user_name'] ?>">
    </form>
<?php } else { ?>
    <div class="twooting">
        <p>Vous devez vous <span><a href="login.php" id="connec">connecter</a></span> pour pouvoir twooter.</p>
    </div>
<?php } ?>




<form class="searchBar" action="search.php" method="POST">
    <input type="text" name="search" placeholder="Rechercher un twoot">
    <button type="submit">Rechercher</button>
</form>



    <div class="twoots">
        <?php foreach ($allTwoots as $twoot) { ?>
        <div class="twoot">
            <p class="twootName"><?= $twoot['name']; ?></p>
            <p class="twootContent"><?= $twoot['twoot'] ?></p>
            <p class="twootDate">Twooté le : <?= $twoot['date'] ?></p>



            <!-- bouton "supprimer" -->
        <?php
            if (isset($_SESSION['user_name'])){
        ?>
            <?php
                //a qui appartient le twoot ??
                if ($_SESSION['user_name'] === $twoot['name']){
                //afficher "supprimer" en conséquence ⤵
            ?>
            <form action="delete.php" method="POST">
            <input type="hidden" name="del" value="<?= $twoot['id'] ?>">
                <button class="btnDel" type="submit">Supprimer</button>
            </form>
            <?php } } ?>
            


        </div>
        <?php } ?>
    </div>


    
    
</div>

<?php
    require 'template/footer.php';
?>



<!-- le bouton qui flotte -->
<?php if (isset($_SESSION['user_name'])) { ?>
  <button id="floatingButton" onclick="openModal()">
    <img src="https://cdn-icons-png.flaticon.com/512/266/266146.png" alt="Publier" />
  </button>
<?php } ?>


<!-- la fenetre modal -->
<div id="modal" class="modalContainer">
  <div class="modalContent">
    <span class="close" onclick="closeModal()">&times;</span>
    <form class="postForm" method="POST" action="insertTW.php">
      <textarea type="text" name="send" placeholder="Quoi de neuf ?"></textarea>
      <button type="submit" name="sendTwoot">Publier</button>
      <input type="hidden" name="name" value="<?= $_SESSION['user_name'] ?>">
    </form>
  </div>
</div>








<script src="SCRIPT/script.js"></script>
</body>
</html>