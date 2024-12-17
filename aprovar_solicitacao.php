<?php
include_once "sessao.php";

header('Content-Type: application/json');

// Verificar se o usuário está logado
if (!isset($_SESSION['id'])) {
    echo json_encode(['success' => false, 'message' => 'Usuário não autenticado']);
    exit;
}

$solicitacaoId = $_POST['solicitacaoId'];

// Atualizar status da solicitação
$sql = "UPDATE solicitacoes_carona SET STATUS = 'Aprovada' WHERE idSOLICITACAO = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $solicitacaoId);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Erro ao aprovar solicitação']);
}

$stmt->close();
$conn->close();
?>