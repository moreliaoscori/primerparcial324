<?php
include "conexion.inc.php";
$id=$_GET["ci"];
$sql="delete from persona where ci=$id";
mysqli_query($con, $sql);
?>
<img height="30" width="30" src="./imagenes/eliminar.jpg"/>
<br/>
<a href="inicial.php">Volver</a>