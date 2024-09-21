<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombrePromocion"]) and !empty($_POST["descripcion"]) and !empty($_POST["categoriaPromocion"]) and !empty($_POST["codigoPromocion"]) and !empty($_POST["estadoPromocion"])) {

        $nombrePromocion=$_POST["nombrePromocion"];
        $descripcion=$_POST["descripcion"];
        $categoriaPromocion=$_POST["categoriaPromocion"];
        $codigoPromocion=$_POST["codigoPromocion"];
        $estadoPromocion=$_POST["estadoPromocion"];

        $sql = $conexion->query(" insert into Promocion(nombrePromocion,descripcion,categoriaPromocion,codigoPromocion,estadoPromocion)values('$nombrePromocion','$descripcion','$categoriaPromocion', '$codigoPromocion', '$estadoPromocion')");

        if ($sql == 1) {
            echo '<div class="alert alert-success">Promocion registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar Promocion</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>';
    }
}

$conexion->close();
?>
