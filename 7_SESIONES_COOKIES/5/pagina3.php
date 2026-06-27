<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Datos de sesión</title>
</head>

<body>

    <h3>Datos guardados en sesión:</h3>

    <?php
    echo "Usuario: " . $_SESSION['usuario'] . "<br>";
    echo "Clave: " . $_SESSION['clave'] . "<br>";
    ?>

</body>

</html>