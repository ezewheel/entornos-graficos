<?php

const EMAIL = 'webmaster@email.com';

if (isset($_POST['submit'])) {
    $matter = $_POST['matter'];
    $message = $_POST['message'];

    mail(EMAIL, $matter, $message);
}

?>

<!DOCTYPE html>
<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Asunto: <input name="matter" size="20"><br><br>
        Mensaje: <input name="message" size="50"><br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>

</html>