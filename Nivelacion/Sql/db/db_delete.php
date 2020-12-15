<?php
    $matricula = $_GET['matricula'];

    $db = new SQLite3('../nivelacion.db');

    $db->exec("DELETE FROM alumnos where matricula='$matricula';");

    header("Location: ../index.php");
?>