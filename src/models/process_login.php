<?php
session_start();
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Preparar a consulta SQL
    $sql = "SELECT id, username, password, role FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            echo '<script>';
            echo 'alert("Login Realizado com sucesso.");';
            echo 'window.location.href = "../../public/index.php?page=home";';
            echo '</script>';
            exit();
        } else {

            echo '<script>';
            echo 'alert("Senha incorreta, tente novamente.");';
            echo 'window.location.href = "../../public/index.php?page=login";';
            echo '</script>';
            exit();
        }
    } else {

        echo '<script>';
            echo 'alert("Usuário não encontrado, verifique se o email está correto");';
            echo 'window.location.href = "../../public/index.php?page=login";';
            echo '</script>';
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
