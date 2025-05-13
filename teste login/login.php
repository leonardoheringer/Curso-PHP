<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Consulta com prepared statement
$sql = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$sql->bind_param("ss", $username, $password);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows === 1) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    echo "Usuário ou senha inválidos.";
}
?>
