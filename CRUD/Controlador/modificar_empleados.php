<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cargo"]) and !empty($_POST["edad"]) and !empty($_POST["genero"]) and !empty($_POST["direccion"]) and !empty($_POST["correo"]) and !empty($_POST["contrasena"])) {
        $id = $_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $cargo = $_POST["cargo"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];
        $direccion = $_POST["direccion"];
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"]; 
        $sql = $conexion->query("UPDATE Empleados SET nombre='$nombre', apellido='$apellido', cargo='$cargo', edad='$edad', genero='$genero', direccion='$direccion', correo='$correo', contrasena='$contrasena' WHERE id=$id");

        if ($sql == 1) {
            header("location: Empleados.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar empleados</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
    $conexion->close();
}
?>

