<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombreProveedor"])and !empty($_POST["telefono"]) and !empty($_POST["correo"]) and !empty($_POST["servicios"])) {

        $nombreProveedor=$_POST["nombreProveedor"];
        $telefono=$_POST["telefono"];
        $correo=$_POST["correo"];
        $servicios=$_POST["servicios"];

        
        $sql = $conexion->query(" insert into Proveedor(nombreProveedor,telefono,correo,servicios)values('$nombreProveedor','$telefono','$correo','$servicios')");

        if ($sql == 1) {
            echo '<div class="alert alert-success">Proveedor registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar Menu</div>';
        }


    } else {
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>';
    }
}

$conexion->close();
?>
