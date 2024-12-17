<?php
include_once "sessao.php";

// Buscar todas as caronas disponíveis com informações do motorista
$query = "SELECT c.idCARONA, c.DIA, c.PERIODO, c.HORA, c.CIDADE, 
                 u.NOME, u.idUSUARIO 
          FROM carona c
          JOIN usuarios u ON c.idUSUARIO = u.idUSUARIO
          ORDER BY c.DIA, c.PERIODO, c.HORA";

$resultado = mysqli_query($conn, $query);
$caronas = [];

while ($row = mysqli_fetch_assoc($resultado)) {
    $caronas[] = $row;
}

echo json_encode($caronas);
?>