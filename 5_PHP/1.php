<?php
$destino = "test@test.com";
$asunto = "Test";
$mensaje = "
    <html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <h1>Test</h1>
        <p>Mensaje de prueba</p>
    </body>
    </html>
";
mail($destino, $asunto, $mensaje);
?>