<?php

$link = mysqli_connect("localhost", "root", "", "Capitales")
    or die(mysqli_connect_error());

$accion = isset($_GET["accion"]) ? $_GET["accion"] : "";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>ABML de Ciudades</title>
</head>

<body>
    <h1>ABML de Ciudades</h1>
    <a href="index.php">Menú</a> |
    <a href="index.php?accion=alta">Alta</a> |
    <a href="index.php?accion=baja">Baja</a> |
    <a href="index.php?accion=modificar">Modificación</a> |
    <a href="index.php?accion=listado">Listado</a>
    <hr>
    <?php
    switch ($accion) {
        case "alta":
            ?>
            <form method="post" action="index.php?accion=insertar">
                Ciudad<br>
                <input type="text" name="ciudad"><br><br>
                País<br>
                <input type="text" name="pais"><br><br>
                Habitantes<br>
                <input type="number" name="habitantes"><br><br>
                Superficie<br>
                <input type="number" step="0.01" name="superficie"><br><br>
                Tiene Metro<br>
                <select name="metro">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
                <br><br>
                <input type="submit" value="Guardar">
            </form>
            <?php
            break;
        case "insertar":
            $sql = "INSERT INTO ciudades
(ciudad,pais,habitantes,superficie,tieneMetro)
VALUES
('$_POST[ciudad]',
'$_POST[pais]',
$_POST[habitantes],
$_POST[superficie],
$_POST[metro])";
            mysqli_query($link, $sql)
                or die(mysqli_error($link));
            echo "<h3>Ciudad agregada correctamente.</h3>";
            break;
        case "baja":
            ?>
            <form method="post" action="index.php?accion=eliminar">
                ID
                <input type="number" name="id">
                <input type="submit" value="Eliminar">
            </form>
            <?php
            break;
        case "eliminar":
            mysqli_query(
                $link,
                "DELETE FROM ciudades WHERE id=$_POST[id]"
            )
                or die(mysqli_error($link));
            echo "<h3>Ciudad eliminada.</h3>";
            break;
        case "modificar":
            $resultado = mysqli_query(
                $link,
                "SELECT * FROM ciudades"
            );
            ?>
            <form method="post" action="index.php?accion=actualizar">
                ID
                <select name="id">
                    <?php
                    while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila[0]; ?>">
                            <?php echo $fila[1]; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
                <br><br>
                Ciudad<br>
                <input type="text" name="ciudad"><br><br>
                País<br>
                <input type="text" name="pais"><br><br>
                Habitantes<br>
                <input type="number" name="habitantes"><br><br>
                Superficie<br>
                <input type="number" step="0.01" name="superficie"><br><br>
                Tiene Metro<br>
                <select name="metro">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
                <br><br>
                <input type="submit" value="Actualizar">
            </form>
            <?php
            break;
        case "actualizar":
            $sql = "UPDATE ciudades SET
ciudad='$_POST[ciudad]',
pais='$_POST[pais]',
habitantes=$_POST[habitantes],
superficie=$_POST[superficie],
tieneMetro=$_POST[metro]
WHERE id=$_POST[id]";
            mysqli_query($link, $sql)
                or die(mysqli_error($link));
            echo "<h3>Registro actualizado.</h3>";
            break;
        case "listado":
            $resultado = mysqli_query(
                $link,
                "SELECT * FROM ciudades"
            );
            ?>
            <table border="1" cellpadding="5">
                <tr>
                    <th>ID</th>
                    <th>Ciudad</th>
                    <th>País</th>
                    <th>Habitantes</th>
                    <th>Superficie</th>
                    <th>Tiene Metro</th>
                </tr>
                <?php
                while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                    <tr>
                        <td><?php echo $fila[0]; ?></td>
                        <td><?php echo $fila[1]; ?></td>
                        <td><?php echo $fila[2]; ?></td>
                        <td><?php echo $fila[3]; ?></td>
                        <td><?php echo $fila[4]; ?></td>
                        <td><?php echo ($fila[5]) ? "Sí" : "No"; ?></td>
                    </tr>
                    <?php
                }
                mysqli_free_result($resultado);
                ?>
            </table>
            <?php
            break;
        default:
            echo "<h2>Seleccione una opción del menú.</h2>";

    }

    mysqli_close($link);
    ?>
</body>

</html>