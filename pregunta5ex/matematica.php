<?php 
session_start();
$usuario=$_SESSION['username'];
?>
<html>
    <head>
      <title>Sesiòn</title> 
        <link rel="sytlesheet" href="estilos.css">
</head>
    <body>
        <h1>Bienvenido a Matematica</h1>
        <nav>
            <ul> 
            <li> <a href="informatica.php">Informatica</a></li>
            <li> <a href="matematica.php">Matematica</a></li>
            <li> <a href="quimica.php">Quimica</a></li>
            <li> <a href="cerrar.php">Cerrar Sesion</a></li>
            </ul>
        </nav>
        <div class="contenido">
        <h2>Usuario: <?php echo"$usuario"; ?> </h2>


    </body>
    </html>
