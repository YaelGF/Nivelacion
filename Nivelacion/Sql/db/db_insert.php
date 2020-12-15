<?php
    $matricula = $_GET['matricula'];
    $nombre = $_GET['nombre'];
    $calificacion = $_GET['calificacion'];

    $db = new SQLite3('../nivelacion.db');

    $db->exec("INSERT INTO alumnos (matricula, nombre, calificacion) VALUES ($matricula, '$nombre', $calificacion);");
    
    header("Location: ../index.php");

?>