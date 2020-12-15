<?php

    $matricula = $_GET['matricula'];
    $nombre = $_GET['nombre'];
    $calificacion = $_GET['calificacion'];

    $db = new SQLite3('../nivelacion.db');
    $db->exec("UPDATE alumnos SET  nombre='$nombre', calificacion = $calificacion   WHERE matricula=$matricula;");
    header("Location: ../index.php");

?>