
<?php

require 'template/database.php';

// va chercher l'id envoyé qui correspond pour pourvoir le supprimer de la database
$supp = $database->prepare("DELETE FROM twoot WHERE id = :id");
$supp->execute(
    [
        "id" => $_POST['del']
    ]
    );

// redirection vers l'index
header("Location: index.php");


?>