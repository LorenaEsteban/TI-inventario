<?php 
	
	require_once "../tabla/clases/conexion.php";
	require_once "crud.php";
 
	$obj= new crud();   
 
	/* Validar la dependencia*/

	
   $sql="SELECT Id_radio,Id_modelo,Num_serie
   from equipo_radio where Id_modelo= '".$_POST['Id_modelo']."'limit 1"  ;
   $result=$obj->executeQuery($sql);
 
 if (mysqli_num_rows($result) > 0){
	echo 'El modelo tiene asignado <img width="15%" src="../accesorios/x.gif"/>';
 }else{
	echo $obj->eliminar($_POST['Id_modelo']); 
}  
 ?>    