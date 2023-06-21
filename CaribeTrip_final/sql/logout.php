<?php

session_start();
unset($_SESSION["nome_login"]);
unset($_SESSION["email_login"]);
unset($_SESSION["mensagem"]);
session_destroy();
header("localhost: ./fale_conosco.php")
exit;

?>