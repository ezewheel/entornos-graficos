<?php

if (isset($_POST["estilo"])) {
    setcookie("estilo", $_POST["estilo"], time() + 60 * 60 * 24 * 30);
}

$estilo = "claro.css";

if (isset($_COOKIE["estilo"])) {
    $estilo = $_COOKIE["estilo"];
}

if (isset($_POST["estilo"])) {
    $estilo = $_POST["estilo"];
}

?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cambio de estilo</title>
    <link rel="stylesheet" href="<?php echo $estilo; ?>">
</head>

<body>
    <h1>Mi página</h1>
    <p>
        Esta página recuerda el estilo elegido mediante una cookie.
    </p>
    <form method="post">
        Seleccione un estilo:
        <select name="estilo">
            <option value="claro.css">Claro</option>
            <option value="oscuro.css">Oscuro</option>
        </select>
        <br><br>
        <input type="submit" value="Aplicar estilo">
    </form>
</body>

</html>