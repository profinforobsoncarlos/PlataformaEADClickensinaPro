<?php
/*
 * listar.php
 * Busca os cursos no banco
 */
header("Content-Type: application/json");
require_once '../config/database.php';

echo json_encode(["message" => "Listar Cursos"]);
?>
