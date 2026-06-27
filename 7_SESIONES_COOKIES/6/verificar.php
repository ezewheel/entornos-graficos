<?php
session_start();

$conexion = mysqli_connect("localhost", "root", "", "base2");

$mail = $_POST['mail'];

$sql = "SELECT nombre FROM alumnos WHERE mail = '$mail'";
$resultado = mysqli_query($conexion, $sql);

if ($fila = mysqli_fetch_assoc($resultado)) {
    $_SESSION['nombre'] = $fila['nombre'];
    echo "Alumno encontrado. Sesión creada.<br>";
} else {
    unset($_SESSION['nombre']);
    echo "No existe alumno con ese mail.<br>";
}
?>

<a href="bienvenida.php">Ir a página de bienvenida</a>