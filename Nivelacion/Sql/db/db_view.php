<?php

    $matricula = $_GET["matricula"];

    $db = new SQLite3('nivelacion.db');

    $resultado = $db->query("SELECT * from alumnos where matricula='$matricula';");

    while ($row = $resultado->fetchArray()) {
        $matricula = $row['matricula'];
        $nombre = $row['nombre'];
        $calificacion = $row['calificacion'];
    }

    $form = "
        <div class='form-group'>
            <label for='matricula'>Matricula</label>
            <input type='text' readonly class='form-control' id='matricula' name='matricula'  value='$matricula'>
        </div>
        <div class='form-group'>
            <label for='nombre'>Nombre</label>
            <input type='text' class='form-control' id='nombre' name='nombre' value='$nombre'>
        </div>
        <div class='form-group'>
            <label for='calificacion'>Calificacion</label>
            <input type='text' class='form-control' id='calificacion' name='calificacion'value='$calificacion'>
        </div>
        ";

    print($form);
?>