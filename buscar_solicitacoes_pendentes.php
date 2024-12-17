<?php
    include_once "sessao.php";

    $query = "SELECT c.DIA, c.PERIODO, c.idUSUARIO, COUNT(sc.idSOLICITACAO) AS TOTAL_SOLICITACOES 
          FROM carona c
          LEFT JOIN solicitacoes_carona sc ON c.idCARONA = sc.idCARONA 
          WHERE c.idUSUARIO = ? AND sc.STATUS = 'Pendente'
          GROUP BY c.DIA, c.PERIODO";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $_SESSION['id']);
    $stmt->execute();
    $result = $stmt->get_result();

    $solicitacoes = [];
    while ($row = $result->fetch_assoc()) {
        $solicitacoes[] = $row;
    }

    echo json_encode($solicitacoes);
    $stmt->close();
?>