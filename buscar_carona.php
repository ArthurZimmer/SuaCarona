<?php
include_once "sessao.php";

if (isset($_GET['id'])) {
    $caronaId = intval($_GET['id']);
    
    $query = "SELECT * FROM carona WHERE idCARONA = $caronaId";
    $resultado = mysqli_query($conn, $query);
    
    if ($row = mysqli_fetch_assoc($resultado)) {
        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'Carona não encontrada']);
    }
}
?>