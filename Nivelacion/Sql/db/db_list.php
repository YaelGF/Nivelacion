<?php
    $db = new SQLite3('nivelacion.db');

    $resultado = $db->query("SELECT * from alumnos;");

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Calificacion</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {

        $matricula = $row['matricula'];
        $nombre = $row['nombre'];
        $calificacion = $row['calificacion'];

        $table = "
            <tr>
                <td>$matricula</td>
                <td>$nombre</td>
                <td>$calificacion</td>
                <td><a href='view.php?matricula=$matricula'>View</a></td>
                <td><a href='update.php?matricula=$matricula'>Update</a></td>
                <td><a href='delete.php?matricula=$matricula'>Delete</a></td>
            </tr>
        ";

        print($table);

    }
 
    print("</table>");
?>