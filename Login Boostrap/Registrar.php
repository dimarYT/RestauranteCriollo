<?php
include('conexion.php');

$USUARIO = $_POST['usuario'];
$PASSWORD =md5($_POST['password']);

$consulta = "INSERT INTO Personal (usuario, password) VALUES ('$USUARIO', '$PASSWORD')";

if (mysqli_query($conexion, $consulta)) {
    header("location:Login.html");
} else {
    echo "Error al registrar el usuario: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
