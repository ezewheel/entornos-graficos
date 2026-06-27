<?php

if (isset($_POST["usuario"])) {
    setcookie("usuario", $_POST["usuario"], time() + 60 * 60 * 24 * 30);
    $usuario = $_POST["usuario"];
} else if (isset($_COOKIE["usuario"])) {
    $usuario = $_COOKIE["usuario"];
} else {
    $usuario = "";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Usuario</title>
</head>

<body>

    <h2>Ingreso de usuario</h2>

    <form method="post">

        Nombre de usuario:<br>
        <input type="text" name="usuario" value="<?php echo $usuario; ?>">

        <br><br>

        <input type="submit" value="Guardar">

    </form>

    <?php

    if ($usuario != "") {
        echo "<p>Último usuario ingresado: <strong>$usuario</strong></p>";
    }

    ?>

</body>

</html>