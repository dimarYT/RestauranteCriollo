<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombreProveedor"]) and !empty($_POST["telefono"]) and !empty($_POST["correo"]) and !empty($_POST["servicios"])) {
        $id = $_POST["id"];
        $nombreProveedor = $_POST["nombreProveedor"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $servicios = $_POST["servicios"];
        $sql = $conexion->query("UPDATE Proveedor SET nombreProveedor='$nombreProveedor', telefono='$telefono', correo='$correo', servicios='$servicios' WHERE id=$id");

        if ($sql == 1) {
            header("location: Proveedor.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar Proveedor</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
    $conexion->close();
}
?>

