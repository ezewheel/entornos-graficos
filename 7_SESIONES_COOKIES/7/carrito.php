<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "Compras");

if (!isset($_SESSION['carrito'])) {
    echo "Carrito vacío";
    exit;
}

echo "<h2>Carrito</h2>";

$total = 0;

foreach ($_SESSION['carrito'] as $id) {
    $res = mysqli_query($conexion, "SELECT * FROM catalogo WHERE id=$id");
    $prod = mysqli_fetch_assoc($res);

    echo $prod['producto'] . " - $" . $prod['precio'] . "<br>";
    $total += $prod['precio'];
}

echo "<hr>Total: $" . $total;