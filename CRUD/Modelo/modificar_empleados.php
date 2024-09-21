<?php
    include "../Conexion/conexion.php";
    $id=$_GET["id"];
    $sql=$conexion->query("SELECT * FROM Empleados WHERE id = $id ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bcf953c74c.js" crossorigin="anonymous"></script>
    <style>
        body {
           background-color: dimgray; 
        } 
    </style>
</head>
<body>
    <form class="col-4 p3 m-auto" method = "POST" >
    <h3 class="text-center text-dark">Modificar Empleados</h3>
        <input type="text" name="id" value="<?= $_GET["id"]?>">
        <?php
         include "../Controlador/modificar_empleados.php";
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
            <label for="exampleInputEmail1" class="form-label">Cargo</label>
            <input type="text" class="form-control" name="cargo" value="<?php echo $datos->cargo; ?>">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" value="<?php echo $datos->edad; ?>">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Genero</label>
            <input type="text" class="form-control" name="genero" value="<?php echo $datos->genero; ?>">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" value="<?php echo $datos->direccion; ?>">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" name="correo" value="<?php echo $datos->correo; ?>">
        </div>
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contrasena" value="<?php echo $datos->contrasena; ?>">
        </div>
        <?php } ?>
        
        <button type="submit" class="btn btn-dark" name="btnregistrar" value="ok">Modificar Empleados</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>