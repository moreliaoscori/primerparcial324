<?php
session_start(); // Iniciar sesión

// Verificar si el usuario ya ha iniciado sesión, en cuyo caso redirigir a otra página
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location: sesion.php");
    exit;
}

require_once "conexion.php"; // Incluir archivo de conexión a la base de datos

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consultar en la base de datos si el usuario existe
    $stmt = $con->prepare("SELECT ci, usuario, password FROM usuario WHERE usuario = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Verificar si el usuario existe y si la contraseña es correcta
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($ci, $username, $password);
        $stmt->fetch();
        if ($password) {
            // Iniciar sesión y redirigir a la página de bienvenida
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["ci"] = $ci;
            $_SESSION["username"] = $username;
            header("location: sesion.php");
        } else {
            $error = "Contraseña incorrecta";
        }
    } else {
        $error = "Usuario no encontrado";
    }

    $stmt->close();
    $con->close();
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="contenedor">
        <h1>Iniciar Sesión</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" placeholder="Nombre de usuario">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="submit" value="Iniciar Sesión">
            <?php
            if (isset($error)) {
                echo "<p class='error'>$error</p>";
            }
            ?>
        </form>
    </div>
</body>

</html>

