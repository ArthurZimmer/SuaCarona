<?php
include_once "sessao.php";

header('Content-Type: application/json');

// Receber o ID da carona via GET
$caronaId = $_GET['caronaId'];

$sql = "SELECT sc.*, u.NOME, u.SOBRENOME 
        FROM solicitacoes_carona sc
        JOIN usuarios u ON sc.idSOLICITANTE = u.idUSUARIO
        WHERE sc.idCARONA = ? AND sc.STATUS = 'Pendente'";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $caronaId);
$stmt->execute();
$result = $stmt->get_result();

$solicitacoes = [];
while ($row = $result->fetch_assoc()) {
    $solicitacoes[] = $row;
}

echo json_encode($solicitacoes);

$stmt->close();
$conn->close();
?>