<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombrePromocion"]) and !empty($_POST["descripcion"]) and !empty($_POST["categoriaPromocion"]) and !empty($_POST["codigoPromocion"]) and !empty($_POST["estadoPromocion"])) {
        $id = $_POST["id"];
        $nombrePromocion = $_POST["nombrePromocion"];
        $descripcion = $_POST["descripcion"];
        $categoriaPromocion= $_POST["categoriaPromocion"];
        $codigoPromocion = $_POST["codigoPromocion"]; 
        $estadoPromocion = $_POST["estadoPromocion"];
        $sql = $conexion->query("UPDATE Promocion SET nombrePromocion='$nombrePromocion', descripcion='$descripcion', categoriaPromocion='$categoriaPromocion', codigoPromoocion='$codigoPromocion' estadoPromocion='$estadoPromocion' WHERE id=$id");

        if ($sql == 1) {
            header("location: Promocion.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar Promocion</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
    $conexion->close();
}
?>
