<?php
session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['clave'] = $_POST['clave'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Sesión creada</title>
</head>

<body>

    <h3>Sesión creada correctamente</h3>

    <a href="pagina3.php">Ir a página 3</a>

</body>

</html>