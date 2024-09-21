<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombreMenu"]) and !empty($_POST["descripcion"]) and !empty($_POST["precio"])) {
        $id = $_POST["id"];
        $nombreMenu = $_POST["nombreMenu"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $sql = $conexion->query("UPDATE Menu SET nombreMenu='$nombreMenu', descripcion='$descripcion', precio='$precio' WHERE id=$id");

        if ($sql == 1) {
            header("location: Menu.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar Menus</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
    $conexion->close();
}
?>

