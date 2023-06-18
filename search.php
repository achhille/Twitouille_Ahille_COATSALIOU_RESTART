

<?php
session_start();

require "template/database.php";

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    
    // récupération des twoots qui contiennent le mot recherché
    $requete = $database->prepare("SELECT * FROM twoot WHERE twoot LIKE :search ORDER BY date DESC");
    $requete->bindValue(':search', '%' . $search . '%');
    $requete->execute();
    
    // hop on récupère les résultats de la recherche
    $searchResults = $requete->fetchAll(PDO::FETCH_ASSOC);
    
    if (trim($search) === '') {
        // Champ de recherche vide, rediriger vers index.php
        header("Location: index.php");
        exit();
    }
} else {
    // Si rien n'est trouvé ça ramène direct vers l'accueil
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de recherche</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<div class="background-container"></div>

<?php require "template/sidenav.php" ?>

<div class="mainContainer">
    <h2>Résultats de recherche pour "<?php echo $search; ?>"</h2>

    <div class="twoots">
        <?php if (count($searchResults) > 0) { ?>
            <?php foreach ($searchResults as $twoot) { ?>
                <div class="twoot">
                    <p class="twootName"><?= $twoot['name']; ?></p>
                    <p class="twootContent"><?= $twoot['twoot'] ?></p>
                    <p class="twootDate">Twooté le : <?= $twoot['date'] ?></p>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>Aucun résultat trouvé.</p>
        <?php } ?>
    </div>

    <a href="index.php" class="btn">Retour à l'accueil</a>
</div>

<script src="SCRIPT/script.js"></script>
</body>
</html>