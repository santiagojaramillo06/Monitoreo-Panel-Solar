<?php

    include_once "conexion_db.php";

    $fecha_actual = date("Y-m-d");
    $sentencia = $gbd->query("select id, voltaje, corriente, potencia, humedad, temperatura, fecha_actual from datos");
    $dato = $sentencia->fetchAll(PDO::FETCH_OBJ);

    echo json_encode($dato);

?>