<?php 
	
	require_once "../tabla/clases/conexion.php";
	require_once "crud.php";

	$obj= new crud();
if(isset($_POST['Id_usuario'])){
	echo json_encode($obj->obtenDatos($_POST['Id_usuario']));
}
else if(isset($_POST['Id_radio'])){
	echo json_encode($obj->obtenerEquipoRad($_POST['Id_radio']));
}
 ?>    