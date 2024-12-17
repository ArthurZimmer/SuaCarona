<?php

//PAGINA AINDA NAO FUNCIONANDO NÃO USAR

include_once "sessao.php";

if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    
    $query = "SELECT nome, sobrenome, email, matricula FROM usuarios WHERE idUSUARIO = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        echo json_encode([
            'success' => true,
            'nome' => $row['nome'],
            'sobrenome' => $row['sobrenome'],
            'email' => $row['email'],
            'matricula' => $row['matricula']
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Usuário não encontrado']);
    }
    
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'ID de usuário não fornecido']);
}
?>