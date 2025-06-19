<?php
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}


session_destroy();

echo '<script>';
echo 'alert("Logout Realizado.");';
echo 'window.location.href = "../../public/index.php?page=home";';
echo '</script>';
exit();
?>





