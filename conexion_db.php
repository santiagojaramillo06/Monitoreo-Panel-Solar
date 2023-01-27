<?php

    $dsn = 'mysql:dbname=fotovoltaicos_db;host=127.0.0.1';
    $usuario = 'root';
    $contraseña = '';

    try {
        $gbd = new PDO($dsn, $usuario, $contraseña);
        $gbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>