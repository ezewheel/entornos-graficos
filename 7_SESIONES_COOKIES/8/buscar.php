<?php
$conexion = mysqli_connect("localhost", "root", "", "prueba");

$texto = $_POST['cancion'];

$sql = "SELECT * FROM buscador WHERE canciones LIKE '%$texto%'";
$resultado = mysqli_query($conexion, $sql);

echo "<h2>Resultados</h2>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo $fila['canciones'] . "<br>";
}
?>