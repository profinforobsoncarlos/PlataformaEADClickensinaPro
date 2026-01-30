<?php
/*
 * login.php
 * Verifica usuário e senha
 */
header("Content-Type: application/json");
require_once '../config/database.php';

echo json_encode(["message" => "Endpoint de Login"]);
?>
