<?php
if (isset($_POST["cancelar"]))
	header("Location: inicial.php");
else
{
	include "conexion.inc.php";
	$id=$_POST["id"];
	$ci=$_POST["ci"];
	$nombre=$_POST["nombre"];
	$paterno=$_POST["fechanac"];
	$paterno=$_POST["telefono"];
	$paterno=$_POST["departamento"];
	if (!isset($_GET["operacion"]))
	$sql="update persona set ci=$ci, nombre='$nombre', fechanac='$fechanac', telefono=$telefono, departamento=$departamento where id=$id";
	else{
		$sql="insert persona(id, ci, nombre ,fechanac, telefono, departamento)";
		$sql.="values($id, $ci,'$nombre','$fechanac',$telefono, $departamento)";


	}
	mysqli_query($con, $sql);
}
?>
<img height="30" width="30" src="./imagenes/guardar.jpg"/>
<br/>
<a href="inicial.php">Volver</a>