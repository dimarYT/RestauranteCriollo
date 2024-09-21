<?php
    include "../Conexion/conexion.php";

    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $id = mysqli_real_escape_string($conexion, $id);

        $sql = $conexion->query("DELETE FROM Promocion WHERE id = $id");

        if ($sql === TRUE) {
            echo '<div>Promocion eliminada correctamente</div>';
        } else {
            echo '<div>Error al eliminar</div>';
        }
    }
    
    $conexion->close();
?>
