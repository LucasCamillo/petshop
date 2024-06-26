<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

$userLoggedIn = isLoggedIn();
?>