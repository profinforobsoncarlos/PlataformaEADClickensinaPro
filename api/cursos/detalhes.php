<?php
/*
 * detalhes.php
 * Busca aulas de um curso
 */
header("Content-Type: application/json");
require_once '../config/database.php';

echo json_encode(["message" => "Detalhes do Curso"]);
?>
