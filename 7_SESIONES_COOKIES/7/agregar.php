<?php
session_start();

$id = $_GET['id'];

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

$_SESSION['carrito'][] = $id;

echo "Producto agregado<br>";
echo "<a href='index.php'>Volver</a>";