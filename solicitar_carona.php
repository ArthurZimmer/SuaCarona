<?php
include_once "sessao.php";

header('Content-Type: application/json');

// Verificar se o usuário está logado
if (!isset($_SESSION['id'])) {
    error_log('Erro: Usuário não autenticado');  // Log de erro
    echo json_encode(['success' => false, 'message' => 'Usuário não autenticado']);
    exit;
}

// Debug: Log dos dados recebidos
error_log('Dados recebidos: ' . print_r($_POST, true));

// Receber o ID da carona
$caronaId = $_POST['caronaId'];
$usuarioId = $_SESSION['id'];

// Verificar se já existe uma solicitação pendente
$sqlVerifica = "SELECT * FROM solicitacoes_carona 
                WHERE idCARONA = ? AND idSOLICITANTE = ? AND STATUS = 'Pendente'";
$stmtVerifica = $conn->prepare($sqlVerifica);
$stmtVerifica->bind_param("ii", $caronaId, $usuarioId);
$stmtVerifica->execute();
$resultVerifica = $stmtVerifica->get_result();

if ($resultVerifica->num_rows > 0) {
    error_log('Erro: Solicitação pendente já existe');  // Log de erro
    echo json_encode(['success' => false, 'message' => 'Você já tem uma solicitação pendente para esta carona']);
    exit;
}

// Inserir solicitação
$sql = "INSERT INTO solicitacoes_carona (idCARONA, idSOLICITANTE, STATUS) VALUES (?, ?, 'Pendente')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $caronaId, $usuarioId);

if ($stmt->execute()) {
    error_log('Solicitação de carona enviada com sucesso');  // Log de sucesso
    echo json_encode(['success' => true, 'message' => 'Solicitação enviada com sucesso']);
} else {
    error_log('Erro ao inserir solicitação: ' . $stmt->error);  // Log de erro
    echo json_encode(['success' => false, 'message' => 'Erro ao solicitar carona']);
}

$stmt->close();
$conn->close();
?>