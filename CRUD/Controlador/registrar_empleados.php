<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cargo"]) and !empty($_POST["edad"]) and !empty($_POST["genero"]) and !empty($_POST["direccion"]) and !empty($_POST["correo"]) and !empty($_POST["contrasena"]) ) {

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $cargo = $_POST["cargo"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];
        $direccion = $_POST["direccion"];
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"]; 

        $sql = $conexion->query(" insert into Empleados(nombre,apellido,cargo,edad,genero,direccion,correo,contrasena)values('$nombre','$apellido','$cargo','$edad','$genero','$direccion','$correo','$contrasena') ");

        if ($sql == 1) {
            echo '<div class="alert alert-success">Empleado registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar clientes</div>';
        }


    } else {
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>';
    }
}

$conexion->close();
?>
