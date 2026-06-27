<?php

setcookie("titular", $_POST["titular"], time() + 60 * 60 * 24 * 30);

header("Location: periodico.php");

?>