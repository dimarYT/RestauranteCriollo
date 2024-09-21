<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["correo"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $correo = $_POST["correo"];
        $sql = $conexion->query("UPDATE clientes SET nombre='$nombre', apellido='$apellido', dni='$dni', fecha_nacimiento='$fecha_nacimiento', correo='$correo' WHERE id=$id");

        if ($sql == 1) {
            header("location: Cliente.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar clientes</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
    $conexion->close();
}
?>

