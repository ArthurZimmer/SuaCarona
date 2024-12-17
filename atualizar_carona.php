<?php
include_once "sessao.php";

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the current logged-in user's ID
    $idUsuario = $_SESSION['id'];

    // Retrieve form data
    $caronaId = intval($_POST['caronaId']);
    $dia = mysqli_real_escape_string($conn, $_POST['dia']);
    $periodo = mysqli_real_escape_string($conn, $_POST['periodo']);
    $cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
    $hora = mysqli_real_escape_string($conn, $_POST['hora']);

    // First, verify that the carona belongs to the logged-in user
    $verificaQuery = "SELECT idUSUARIO FROM carona WHERE idCARONA = $caronaId";
    $verificaResultado = mysqli_query($conn, $verificaQuery);
    $carona = mysqli_fetch_assoc($verificaResultado);

    // Check if the carona exists and belongs to the current user
    if ($carona && $carona['idUSUARIO'] == $idUsuario) {
        // Prepare the update query
        $updateQuery = "UPDATE carona SET 
                        DIA = '$dia', 
                        PERIODO = '$periodo', 
                        CIDADE = '$cidade', 
                        HORA = '$hora' 
                        WHERE idCARONA = $caronaId";

        // Execute the update
        $resultado = mysqli_query($conn, $updateQuery);

        if ($resultado) {
            // Successfully updated
            echo json_encode([
                'success' => true, 
                'message' => 'Carona atualizada com sucesso'
            ]);
        } else {
            // Database update failed
            echo json_encode([
                'success' => false, 
                'message' => 'Erro ao atualizar carona: ' . mysqli_error($conn)
            ]);
        }
    } else {
        // User does not have permission to update this carona
        echo json_encode([
            'success' => false, 
            'message' => 'Você não tem permissão para atualizar esta carona'
        ]);
    }
} else {
    // Invalid request method
    echo json_encode([
        'success' => false, 
        'message' => 'Método de requisição inválido'
    ]);
}
?>