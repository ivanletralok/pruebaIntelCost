<?php
$dsn = 'mysql:host=localhost;dbname=Intelcost_bienes';
$usuario = 'root';
$contraseña = '';

try {
    $pdo = new PDO($dsn, $usuario, $contraseña);
   /*echo "conectado";*/
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>