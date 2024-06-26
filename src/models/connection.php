<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petshop";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_errno) {
    die("Conexão falhou: " . $conn->connect_error);
}
else
    echo "Conexão bem sucedida";

?>