<?php
$host = 'localhost:3307';
$dbname = 'loja';
$username = 'root';  // Altere para o seu usuário
$password = '';      // Altere para sua senha

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}
?>
