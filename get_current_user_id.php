<?php
include_once "sessao.php";
echo json_encode(['id' => $_SESSION['id']]);
?>