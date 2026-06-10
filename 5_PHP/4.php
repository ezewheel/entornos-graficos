<?php
session_start();

if (!isset($_SESSION["cont"])) {
    $_SESSION["cont"] = 1;
} else {
    $_SESSION["cont"]++;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página de conteo</h1>
    <p>Cantidad de veces visitada: <?php echo $_SESSION["cont"] ?></p>
</body>

</html>