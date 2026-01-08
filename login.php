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
    <form method="POST">
        <div>
            <label for="identifiant">Nom d'utilisateur ou email : </label>
            <input type="text" name="identifiant" id="identifiant" required>
        </div>
        <div>
            <label for="password">Mode de passe : </label>
            <input type="password" name="password" id="password" required>
        </div>
        <input type="submit" value="Se connecter">
        <button type="submit">Se connecter</button>
    </form>
    <p>Pas encore inscrit ? <a href="inex.php?page=register">S'inscrire</a></p>
    </main>
</body>
</html>