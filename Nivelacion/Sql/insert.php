<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Nivelacion</title>
</head>
<body>
    <div class="container-fluid">
        <h1>Insertar</h1>
        <a href="index.php">Inicio</a>
        
        <form action="db/db_insert.php" method="GET">
            <div class="form-group">
                <label for="matricula">Matricula</label>
                <input type="number" class="form-control" id="matricula" name="matricula">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre"  >
            </div>
            <div class="form-group">
                <label for="calificacion">Calificacion</label>
                <input type="number" class="form-control" name="calificacion">
            </div>
            <button type="submit" class="btn btn-primary">Insertar</button>
        </form>
    </div>
</body>
</html>