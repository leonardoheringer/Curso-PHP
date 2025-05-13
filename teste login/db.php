<?php
$host = 'localhost';
$user = 'root';
$pass = 'Z5R2M9IQ';
$db = 'sabor_brasil';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Erro na conexão: ' . $conn->connect_error);
}
?>
