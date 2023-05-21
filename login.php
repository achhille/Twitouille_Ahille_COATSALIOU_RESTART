


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

<h1 class="titleCO">Connectez-vous :)</h1>

<form class="formCO" method="POST" action="login.php">
    <input class="formElement" type="text" name="name" placeholder="Pseudo">
    <input class="formElement" type="password" name="password" placeholder="Mot de passe">
    <button class="send" type="submit">Se connecter</button>
</form>

<a href="signup.php" class="formCO"><button class="send noacc">Je n'ai pas de compte</button></a>

<?php if (isset($error_message)): ?>
    <p><?php echo $error_message; ?></p>
<?php endif; ?>

<script src="SCRIPT/script.js"></script>
</body>
</html>
