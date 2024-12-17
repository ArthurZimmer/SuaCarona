<?php
include_once "sessao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $caronaId = intval($_POST['caronaId']);
    $idUsuario = $_SESSION['id'];

    // Verificar se a carona pertence ao usuário logado
    $verificaQuery = "SELECT idUSUARIO FROM carona WHERE idCARONA = $caronaId";
    $verificaResultado = mysqli_query($conn, $verificaQuery);
    $carona = mysqli_fetch_assoc($verificaResultado);

    if ($carona && $carona['idUSUARIO'] == $idUsuario) {
        // Excluir a carona
        $excluirQuery = "DELETE FROM carona WHERE idCARONA = $caronaId";
        $resultado = mysqli_query($conn, $excluirQuery);

        if ($resultado) {
            echo json_encode(['success' => true, 'message' => 'Carona excluída com sucesso']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Erro ao excluir carona']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Você não tem permissão para excluir esta carona']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método de requisição inválido']);
}
?>