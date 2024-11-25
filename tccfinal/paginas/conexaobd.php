<?php
$host = 'localhost'; // ou o IP do servidor
$db = 'tccdois'; // nome do seu banco de dados
$user = 'root'; // usuário do MySQL
$pass = ''; // senha (geralmente vazia no XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>