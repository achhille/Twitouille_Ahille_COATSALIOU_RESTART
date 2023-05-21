<?php

// Ici on va  juste indiquer à la page où aller chercher dans phpMyAdmin
try {
    $database = new PDO(
        'mysql:host=localhost;dbname=final',
        'root',
        'root'
    );   
} 

// et puis si il trouve pas il tue le site
catch(PDOException $error) {
    die("error)");
}

?>