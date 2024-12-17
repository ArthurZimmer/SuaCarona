<?php
include_once "sessao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dia = $_POST['dia'];
    $periodo = $_POST['periodo'];
    $hora = $_POST['hora'];
    $cidade = $_POST['cidade'];
    $idUsuario = $_SESSION['id']; 

    // Primeiro, altere o SQL para incluir os novos campos
    $query = "INSERT INTO carona (DIA, HORA, PERIODO, CIDADE, idUSUARIO) 
              VALUES ('$dia', '$hora', '$periodo', '$cidade', $idUsuario)";
    
    $resultado = mysqli_query($conn, $query);

    if ($resultado) {
        echo json_encode(['success' => true, 'message' => 'Carona cadastrada com sucesso']);
    } else {
        // Capturar o erro específico do MySQL
        $erro = mysqli_error($conn);
        echo json_encode(['success' => false, 'message' => 'Erro no banco de dados: ' . $erro]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método de requisição inválido']);
}
?>