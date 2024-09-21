<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["numeroMesa"]) and !empty($_POST["capacidad"]) and !empty($_POST["ubicacion"])) {
        $id = $_POST["id"];
        $numeroMesa = $_POST["numeroMesa"];
        $capacidad = $_POST["capacidad"];
        $ubicacion = $_POST["ubicacion"];
        $sql = $conexion->query("UPDATE Mesas SET numeroMesa='$numeroMesa', capacidad='$capacidad', ubicacion='$ubicacion' WHERE id=$id");

        if ($sql == 1) {
            header("location: Mesas.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar Mesas</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
    $conexion->close();
}
?>

