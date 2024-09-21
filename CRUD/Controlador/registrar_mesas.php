<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["numeroMesa"]) and !empty($_POST["capacidad"]) and !empty($_POST["ubicacion"])) {

        $numeroMesa=$_POST["numeroMesa"];
        $capacidad=$_POST["capacidad"];
        $ubicacion=$_POST["ubicacion"];

        
        $sql = $conexion->query(" insert into Mesas(numeroMesa,capacidad,ubicacion)values('$numeroMesa','$capacidad','$ubicacion')");

        if ($sql == 1) {
            echo '<div class="alert alert-success">Mesa registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar Mesa</div>';
        }


    } else {
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>';
    }
}

$conexion->close();
?>
