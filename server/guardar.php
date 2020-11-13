<?php
require 'conexion.php';
$dato = json_decode(file_get_contents('php://input'), true);


foreach($dato  as $valor){
    $idbienes =  $valor['Id'];
    $direccion = $valor['Direccion'];
    $ciudad = $valor['Ciudad'];
    $telefono = $valor['Telefono'];
    $codigo_postal = $valor['Codigo_Postal'];
    $tipo = $valor['Tipo'];
    $precio = $valor['Precio'];
}
try{
    $query_inserta = 'insert into bienes (idbienes,direccion,ciudad,telefono,codigo_postal,tipo,precio) values (?,?,?,?,?,?,?)';
        $insertar = $pdo->prepare($query_inserta);
        $insertar->execute(array($idbienes, $direccion, $ciudad, $telefono, $codigo_postal, $tipo,  $precio ));

        echo "insertado";

}catch(PDOException $e){
    echo 'error:'.$e->GetMessage();
}

        