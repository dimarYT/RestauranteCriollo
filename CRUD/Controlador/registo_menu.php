<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombreMenu"]) and !empty($_POST["descripcion"]) and !empty($_POST["precio"])) {

        $nombreMenu=$_POST["nombreMenu"];
        $descripcion=$_POST["descripcion"];
        $precio=$_POST["precio"];

        
        $sql = $conexion->query(" insert into Menu(nombreMenu,descripcion,precio)values('$nombreMenu','$descripcion','$precio')");

        if ($sql == 1) {
            echo '<div class="alert alert-success">Menu registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar Menu</div>';
        }


    } else {
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>';
    }
}

$conexion->close();
?>
