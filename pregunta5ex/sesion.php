<?php 
session_start();
$rol=$_SESSION['rol'];
include 'conexion.php';
?>
<html>
    <head>
      <title>Sesiòn</title> 
        <link rel="sytlesheet" href="estilos.css">
</head>
    <body>
        <h1>Bienvenido</h1>
        <?php
		$sql = "select 
        AVG(case when departamento='01' then (SELECT AVG(nota1+nota2+nota3+notafinal/ 4) as promedio from inscripcion) else 0 end) as CHQ,
        AVG(case when departamento='02' then (SELECT AVG(nota1+nota2+nota3+notafinal/ 4) as promedio from inscripcion) else 0 end) as LPZ, 
        AVG(case when departamento='03' then (SELECT AVG(nota1+nota2+nota3+notafinal/ 4) as promedio from inscripcion) else 0 end) as CBB, 
        AVG(case when departamento='04' then (SELECT AVG(nota1+nota2+nota3+notafinal/ 4) as promedio from inscripcion) else 0 end) as ORU,
        AVG(case when departamento='05' then (SELECT AVG(nota1+nota2+nota3+notafinal/ 4) as promedio from inscripcion) else 0 end) as TJA,
        AVG(case when departamento='06' then (SELECT AVG(nota1+nota2+nota3+notafinal/ 4) as promedio from inscripcion) else 0 end) as SCZ,
        AVG(case when departamento='07' then (SELECT AVG(nota1+nota2+nota3+notafinal/ 4) as promedio from inscripcion) else 0 end) as BEN,
        AVG(case when departamento='08' then (SELECT AVG(nota1+nota2+nota3+notafinal/ 4) as promedio from inscripcion) else 0 end) as PAN
        
        
        from ( SELECT departamento, count(*) as cantidad FROM persona group by departamento) as depto;";

// Ejecutar la consulta
$resultado = mysqli_query($con, $sql);

// Verificar si se obtuvieron resultados
if ($resultado) {
// Obtener los resultados en un arreglo asociativo
$fila = mysqli_fetch_assoc($resultado);

// Acceder a los valores de los promedios por departamento
$promedioCHQ = $fila['CHQ'];
$promedioLPZ = $fila['LPZ'];
$promedioCBB = $fila['CBB'];
$promedioORU = $fila['ORU'];
$promedioTJA = $fila['TJA'];
$promedioSCZ = $fila['SCZ'];
$promedioBEN = $fila['BEN'];
$promedioPAN = $fila['PAN'];

// Mostrar los resultados
echo "Promedio CHQ: " . $promedioCHQ . "<br>";
echo "Promedio LPZ: " . $promedioLPZ . "<br>";
echo "Promedio CBB: " . $promedioCBB . "<br>";
echo "Promedio ORU: " . $promedioORU . "<br>";
echo "Promedio TJA: " . $promedioTJA . "<br>";
echo "Promedio SCZ: " . $promedioSCZ . "<br>";
echo "Promedio BEN: " . $promedioBEN . "<br>";
echo "Promedio PAN; " . $promedioPAN . "<br>";
}
		?>
       
        <a href="cerrar.php"> Cerrar Session </a>
        <div class="contenido">

        <h2>Usuario: <?php echo"$rol"; ?> </h2>


    </body>
    </html>
    
