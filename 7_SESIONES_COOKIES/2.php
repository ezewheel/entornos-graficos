<?php

if (isset($_COOKIE["contador"])) {
    $contador = $_COOKIE["contador"] + 1;
    setcookie("contador", $contador, time() + 60 * 60 * 24 * 30);
    echo "<h2>Visitó esta página $contador veces.</h2>";
} else {
    setcookie("contador", 1, time() + 60 * 60 * 24 * 30);
    echo "<h2>¡Bienvenido! Es la primera vez que visita esta página.</h2>";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contador de visitas</title>
</head>

<body>

    <p>Recargue la página para incrementar el contador.</p>

</body>

</html>