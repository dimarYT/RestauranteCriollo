<?php
    include "../Conexion/conexion.php";
    $id=$_GET["id"];
    $sql=$conexion->query("SELECT * FROM clientes WHERE id = $id ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
           background-color: dimgray; 
        } 
    </style>
</head>
<body>
    <form class="col-4 p3 m-auto" method="POST">
        <h3 class="text-center text-dark">Modificar Clientes</h3>
        <input type="text" name="id" value="<?= $_GET["id"]?>">
        <?php
         include "../Controlador/modificar_clientes.php";
         while($datos=$sql->fetch_object()){ ?>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $datos->nombre; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?php echo $datos->apellido; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" value="<?php echo $datos->dni; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo $datos->fecha_nacimiento; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" value="<?php echo $datos->correo; ?>">
            </div>
        <?php } ?>
        
        <button type="submit" class="btn btn-dark" name="btnregistrar" value="ok">Modificar Clientes</button>
    </form>
</body>
</html>
