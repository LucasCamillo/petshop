<?php

use App\Core\Core;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "connection.php";

    $username = htmlspecialchars($_POST["username"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = htmlspecialchars($_POST["email"]);
    $name = htmlspecialchars($_POST["username"]);
    $phone = htmlspecialchars($_POST["phone"]);

    // Verificar se o email já está cadastrado
    $checkStmt = $conn->prepare("SELECT id, email FROM users WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {
        // Email já cadastrado, exibir mensagem de erro
        echo '<script>';
        echo 'alert("Este email já está cadastrado. Por favor, use outro email.");';
        echo 'window.location.href = "/../petshop/public/index.php?page=registration";';
        echo '</script>';
        exit();
    }

    // Se não houver email cadastrado, proceder com o cadastro
    $stmtUsers = $conn->prepare("INSERT INTO users (username, password, role, email, phone) VALUES (?, ?, 'client', ?, ?)");
    $stmtUsers->bind_param("ssss", $username, $password, $email, $phone);

    if ($stmtUsers->execute()) {
        $userId = $stmtUsers->insert_id;

        $stmtClients = $conn->prepare("INSERT INTO clients (id) VALUES (?)");
        $stmtClients->bind_param("i", $userId);

        if ($stmtClients->execute()) {
            echo '<script>';
            echo 'alert("Cadastro realizado com sucesso!");';
            echo 'window.location.href = "/../petshop/public/index.php?page=login";';
            echo '</script>';
            exit();
        } else {
            echo '<script>';
            echo 'alert("Erro ao cadastrar o cliente: ' . $conn->error . '");';
            echo 'window.location.href = "/../petshop/public/index.php?page=registration";';
            echo '</script>';
        }

        // Fechar a instrução preparada de clients
        $stmtClients->close();
    } else {
        // Exibe mensagem de erro caso haja problema ao cadastrar o usuário
        echo '<script>';
        echo 'alert("Erro ao cadastrar o usuário: ' . $conn->error . '");';
        echo 'window.location.href = "/../petshop/public/index.php?page=registration";';
        echo '</script>';
    }

    // Fechar a instrução preparada de users
    $stmtUsers->close();

    // Fechar a conexão com o banco de dados
    $conn->close();
}
?>