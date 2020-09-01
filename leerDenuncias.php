<?php
// con esto leera todas las denuncias
include "conexion.php";
$consulta="select * from denuncias";
$resultado=$conexion -> query($consulta);

while($fila=$resultado -> fetch_array()){
	$denuncias[]=array_map("utf8_encode",$fila);

}
echo json_encode($denuncias);
$resultado -> close
?>