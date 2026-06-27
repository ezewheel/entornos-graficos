<?php

setcookie("titular", "", time() - 1);

header("Location: periodico.php");

?>