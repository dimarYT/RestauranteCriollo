<?php

include('conexion.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=md5($_POST['password']);


$consulta = "SELECT* FROM Personal where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:Bienvenida.html");

}else{
    include("index.html");
    ?>
    <h1>Error de autenticacion</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>