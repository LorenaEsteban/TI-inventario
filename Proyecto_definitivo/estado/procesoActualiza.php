<?php 
	require_once "../tabla/clases/conexion.php";
	require_once "crud.php";
	$obj= new crud();
   
	$datos=array(
		$_POST['Estado_r'], 
		$_POST['Id_estado'] 
	              );
	echo $obj->actualizar($datos);  
 ?>     