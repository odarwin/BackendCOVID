<?php
include conexion.php;
$fechaHora=$_POST['fechaHora'];
$imagen=$_POST['imagen'];
$tipoDenuncia=$_POST['tipoDenuncia'];

$consulta="insert into denuncia values('".$ciudad."','".$direccion."','".$descripcion."','".$latitud."','".$longitud."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion)
?>