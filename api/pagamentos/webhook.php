<?php
/*
 * webhook.php
 * Recebe aviso do Mercado Pago
 */

http_response_code(200);
echo json_encode(["status" => "ok"]);
?>
