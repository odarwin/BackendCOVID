<?php
	$username="root";
	$password="";
	$database="covidforcebd";
	$server="localhost";
	$port="3308";

$conexion = new mysqli($server,$username,$password,$database,$port);
if($conexion -> connect_errno){
	echo "Lo sentimos, la aplicacion presenta problemas en su BD";
}
?>