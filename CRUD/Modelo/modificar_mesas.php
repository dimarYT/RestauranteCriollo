<?php
    include "../Conexion/conexion.php";
    $id=$_GET["id"];
    $sql=$conexion->query("SELECT * FROM Mesas WHERE id = $id ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Menu</title>
    <style>
        body {
           background-color: dimgray; 
        } 
    </style>
</head>
<body>
    <form class="col-4 p3 m-auto" method="POST">
        <h3 class="text-center text-dark">Modificar Mesas</h3>
        <input type="text" name="id" value="<?= $_GET["id"]?>">
        <?php
         include "../Controlador/modificar_mesas.php";
         while($datos=$sql->fetch_object()){ ?>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Numero de Mesas</label>
                <input type="number" class="form-control" name="numeroMesa" value="<?php echo $datos->numeroMesa; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Capacidad</label>
                <input type="number" class="form-control" name="capacidad" value="<?php echo $datos->capacidad; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Ubicacion</label>
                <input type="text" class="form-control" name="ubicacion" value="<?php echo $datos->ubicacion; ?>">
            </div>
        <?php } ?>
        
        <button type="submit" class="btn btn-dark" name="btnregistrar" value="ok">Modificar Mesas</button>
    </form>
</body>
</html>
