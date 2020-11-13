<?php

require 'conexion.php';

$query = 'select * from bienes';

    $setCon = $pdo->prepare($query);
    $setCon->execute();
    $resul = $setCon->fetchALL();
    
    echo json_encode($resul);

