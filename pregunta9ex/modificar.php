<?php
include "conexion.inc.php";
$id=$_GET["id"];
$sql="select * from persona where id=$id";
$resultado=mysqli_query($con, $sql);
$datos=mysqli_fetch_array($resultado);

if(isset($_GET["operacion"]))
{
    $id="";
    $ci="";
    $nombre="";
    $fechanac="";
    $telefono="";
    $departamento="";
}else{
    $id=$_GET["id"];
    $sql="select * from persona where id=$id";
    $resultado=mysqli_query($con,$sql);
    $datos=mysqli_fetch_array($resultado);
    $id=$datos[id];
    $ci=$datos[ci];
    $nombre=$datos["nombre"];
    $fechanac=$datos["fechanac"];
    $telefono=$datos[telefono];
    $departamento=$departamento[departamento];
}?>
<form action="modificarG.php" method="POST">
    <?php 
    if(isset($_GET["operacion"])) echo '<input type="hidden" name="operacion" value="operacion"/>';

    ?>
<label>Id</label>
<input type="text" name="id" value="<?php echo $datos["id"];?>" <?php if(!isset($_GET["Operacion"])) echo "readonly";?> />
<br/>
<label>CI</label>
<input type="text" name="ci" value="<?php echo $datos[ci];?>"/>
<br/>
<label>Nombre</label>
<input type="text" name="nombre" value="<?php echo $datos["nombre"];?>"/>
<br/>
<label>FechaNac</label>
<input type="text" name="fechanac" value="<?php echo $datos["fechanac"];?>"/>
<br/>
<label>Telefono</label>
<input type="text" name="telefono" value="<?php echo $datos[telefono];?>"/>
<br/>
<label>Departamento</label>
<input type="text" name="departamento" value="<?php echo $datos[departamento];?>"/>
<br/>
<input type="submit" name="aceptar" value="aceptar"/>
<input type="submit" name="cancelar" value="cancelar"/>
</form>