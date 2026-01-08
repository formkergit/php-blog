<?php 
require 'auth_fonctions.php';

if (is_logged_in()) {
    redirect('index.php');
}

$errors = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['connexion-btn'])):
    $identifiant = $_POST['identifiant'] ?? '';
    $password = $_POST['password'] ?? '';

    
    if ($resultat['success']):
        redirect('home.php');
    else:
        $errors = $resultat['message'];
    endif;
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Connexion</h1>
    <?php if ($errors): ?>
        <div class="alert">
            <?=  $errors ?>
        </div>
    <? endif ?>
    <form method="POST">
        <div>
            <label for="username">Nom d'utilisateur : </label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email" required>
        </div>        
        <div>
            <label for="password">Mode de passe : </label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password_confirm">Confirmez le mode de passe : </label>
            <input type="password" name="password_confirm" id="password_confirm " required>
        </div>        
        <input type="submit" name="connexion-btn" value="Se connecter">
    </form>
    <p>Pas encore inscrit ? <a href="inex.php?page=register">S'inscrire</a></p>
    </main>
</body>
</html>