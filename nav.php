<ul>
    <?php if (is_logged_in()) : ?>
        <li><a href="index.php?page=admin"></a>Admin</li>
        <li><a href="index.php?page=logout"></a>Déconnexion</li>
    <?php else: ?>
        <li><a href="index.php?page=login"></a>Se connecter</li>
    <?php endif ?>
</ul>