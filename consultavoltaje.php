<?php
    include_once "conexion_db.php";
    $sentencia = $gbd->query("select fecha_actual, voltaje from datos group by fecha_actual order by fecha_actual");
    $voltaje = $sentencia->fetchAll(PDO::FETCH_OBJ);

    echo json_encode($voltaje);
?>