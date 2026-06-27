<?php

$tipo = "";

if (isset($_COOKIE["titular"])) {
    $tipo = $_COOKIE["titular"];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Periódico</title>
</head>

<body>

    <h1>Periódico</h1>

    <form action="guardar.php" method="post">

        <input type="radio" name="titular" value="politica"> Política
        <br>

        <input type="radio" name="titular" value="economia"> Economía
        <br>

        <input type="radio" name="titular" value="deportes"> Deportes
        <br><br>

        <input type="submit" value="Guardar preferencia">

    </form>

    <hr>

    <?php

    if ($tipo == "") {
        echo "<h2>Noticia política</h2>";
        echo "<p>El gobierno anunció nuevas medidas.</p>";

        echo "<h2>Noticia económica</h2>";
        echo "<p>La inflación mostró una leve baja.</p>";

        echo "<h2>Noticia deportiva</h2>";
        echo "<p>El equipo local ganó el campeonato.</p>";
    } else if ($tipo == "politica") {
        echo "<h2>Noticia política</h2>";
        echo "<p>El gobierno anunció nuevas medidas.</p>";
    } else if ($tipo == "economia") {
        echo "<h2>Noticia económica</h2>";
        echo "<p>La inflación mostró una leve baja.</p>";
    } else {
        echo "<h2>Noticia deportiva</h2>";
        echo "<p>El equipo local ganó el campeonato.</p>";
    }

    ?>

    <hr>

    <a href="borrar.php">Borrar preferencia</a>

</body>

</html>