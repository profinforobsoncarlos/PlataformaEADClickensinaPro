<?php
/*
 * database.php
 * A chave do cofre (conexão MySQL)
 */

$host = 'localhost';
$db_name = 'clickensina_db';
$username = 'root';
$password = '';
$conn = null;

try {
    $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $exception) {
    echo "Erro de conexão: " . $exception->getMessage();
}
?>
