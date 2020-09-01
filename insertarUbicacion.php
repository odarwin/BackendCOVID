<?php
include conexion.php;
$ciudad=$_POST['ciudad'];
$direccion=$_POST['direccion'];
$descripcion=$_POST['descripcion'];

$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];

$consulta="insert into ubicacion values('".$ciudad."','".$direccion."','".$descripcion."','".$latitud."','".$longitud."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion)
?>