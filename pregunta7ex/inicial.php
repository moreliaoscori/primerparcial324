<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Alumnos</h1>
	<table>
		<tr>
			<td>ID</td>
			<td>CI</td>
			<td>NOMBRE</td>
			<td>FECHANAC</td>
			<td>TELEFONO</td>
			<td>DEPARTAMENTO</td>
			<td colspan="2">ACCIONES</td>
		</tr>
		<?php
		include "conexion.inc.php";
		$resultado= mysqli_query($con, "select * from persona");
		while ($datos=mysqli_fetch_array($resultado)) 
		{
			echo "<tr>";
			echo "<td>".$datos["id"]."</td>";
			echo "<td>".$datos["ci"]."</td>";
			echo "<td>".$datos["nombre"]."</td>";
			echo "<td>".$datos["fechanac"]."</td>";
			echo "<td>".$datos["telefono"]."</td>";
			echo "<td>".$datos["departamento"]."</td>";
			echo "<td><a href='modificar.php?id=".$datos["ci"]."'>Modificar</a></td>";
			echo "<td><a href='eliminar.php?id=".$datos["ci"]."'>Eliminar</a></td>";
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>
