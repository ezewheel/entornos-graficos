<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>

<body>

    <?php
    if (isset($_SESSION['nombre'])) {
        echo "Bienvenido " . $_SESSION['nombre'];
    } else {
        echo "No puede visitar esta página.";
    }
    ?>

</body>

</html>