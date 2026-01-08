<ul>
    <?php if (is_logged_in()) : ?>
        <li><a href="index.php?page=admin">Admin</a></li>
        <li><a href="index.php?page=logout">Déconnexion</a></li>
    <?php else: ?>
        <li><a href="index.php?page=login">Se connecter</a></li>
    <?php endif ?>
</ul>