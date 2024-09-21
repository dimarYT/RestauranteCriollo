<?php
    include "../Conexion/conexion.php";
    $id=$_GET["id"];
    $sql=$conexion->query("SELECT * FROM Proveedor WHERE id = $id ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Proveedor</title>
    <style>
        body {
           background-color: dimgray; 
        } 
    </style>
</head>
<body>
    <form class="col-4 p3 m-auto" method="POST">
        <h3 class="text-center text-dark">Modificar Proveedores</h3>
        <input type="text" name="id" value="<?= $_GET["id"]?>">
        <?php
         include "../Controlador/modificar_proveedor.php";
         while($datos=$sql->fetch_object()){ ?>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Nombre Proveedores</label>
                <input type="text" class="form-control" name="nombreProveedor" value="<?php echo $datos->nombreProveedor; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="<?php echo $datos->telefono; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" value="<?php echo $datos->correo; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Servicios</label>
                <input type="text" class="form-control" name="servicios" value="<?php echo $datos->servicios; ?>">
            </div>
        <?php } ?>
        
        <button type="submit" class="btn btn-dark" name="btnregistrar" value="ok">Modificar Proveedor</button>
    </form>
</body>
</html>
