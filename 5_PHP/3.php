<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emailAmigo = $_POST['email'];

    $asunto = "Recomendación de sitio web";
    $mensaje = "Te recomiendo visitar este sitio web.";

    mail($emailAmigo, $asunto, $mensaje);

    echo "Recomendación enviada.";
}

?>

<html>

<head>
    <title>Recomendar sitio</title>
</head>

<body>
    <h2>Recomendar este sitio a un amigo</h2>
    <form method="post">
        Email de tu amigo:
        <input type="email" name="email">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>