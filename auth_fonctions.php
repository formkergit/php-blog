<?php
function redirect($url)
{
    require $url;
    die();
}

function is_logged_in() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

function logout_user() {
    $_SESSION = [];
    session_destroy();
    session_unset();
}

function login_user() {

}

function register_user() {
    
}