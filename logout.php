<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_destroy();
    echo json_encode(["status" => "success", "message" => "Sessão encerrada com sucesso!"]);
} else {
    echo json_encode(["status" => "error", "message" => "Método inválido"]);
}
?>
