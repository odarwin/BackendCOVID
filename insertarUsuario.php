<?php
include "conexion.php";
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo']


$consulta="insert into usuario (Nombre,Apellido,Correo) values('".$Nombre."','".$Apellido."','".$Correo."')";
mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
mysqli_close($conexion)
?>