<?php
require 'config.php';
require 'condb.php';

function is_logged_in() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

function logout_user() {
    $_SESSION = [];
    session_destroy();
    session_unset();
}

function login_user($pdo,$identifiant,$password) {
    if (empty($identifiant) || empty($password)):
        return [
            'success' => false,
            'message' => 'Tous les chmaps sont obligzatoires.'
        ];
    endif;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$identifiant,$password]);
    $user = $stmt->fetch();

    if(!$user):
        return [
        'success' => false,
        'message' => 'identifiants incorrects !'
        ];
    endif;

    if (!password_verify($password, $user['password'])):
        return [
        'success' => false,
        'message' => 'identifiants incorrects !'
        ];
    endif;

    $_SESSION['logged_in'] = true;

    return [
        'success' => true,
        'message' => 'Connexion résussie'
    ];

}

function register_user() {
    
}