<?php
$conexion = mysqli_connect("localhost", "root", "", "Compras");
$resultado = mysqli_query($conexion, "SELECT * FROM catalogo");
?>

<h2>Catálogo</h2>

<?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
    <p>
        <?php echo $fila['producto']; ?> - $<?php echo $fila['precio']; ?>
        <a href="agregar.php?id=<?php echo $fila['id']; ?>">Agregar al carrito</a>
    </p>
<?php } ?>

<a href="carrito.php">Ver carrito</a>