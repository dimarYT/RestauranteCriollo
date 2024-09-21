<?php
    include "../Conexion/conexion.php";
    $id=$_GET["id"];
    $sql=$conexion->query("SELECT * FROM Promocion WHERE id = $id ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Promocion</title>
    <style>
        body {
           background-color: dimgray; 
        } 
    </style>
</head>
<body>
    <form class="col-4 p3 m-auto" method="POST">
        <h3 class="text-center text-dark">Modificar Promocion</h3>
        <input type="text" name="id" value="<?= $_GET["id"]?>">
        <?php
         include "../Controlador/modificar_promocion.php";
         while($datos=$sql->fetch_object()){ ?>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Nombre de la Promocion</label>
                <input type="text" class="form-control" name="nombrePromocion" value="<?php echo $datos->nombrePromocion; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="<?php echo $datos->descripcion; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Categora de Promocion</label>
                <input type="text" class="form-control" name="categoriaPromocion" value="<?php echo $datos->categoriaPromocion; ?>">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Codigo de Promocion</label>
                <input type="text" class="form-control" name="codigoPromocion" value="<?php echo $datos->codigoPromocion; ?>">
            </div>
            <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Estado de Promocion</label>
            <input type="text" class="form-control" name="estadoPromocion" value="<?php echo $datos->estadoPromocion; ?>">
        </div>
            
        <?php } ?>
        
        <button type="submit" class="btn btn-dark" name="btnregistrar" value="ok">Modificar Promocion</button>
    </form>
</body>
</html>