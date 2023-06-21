<?php
$hostname = "localhost";
$bancodedados = "bancosite";
$usuario = "root";
$senha = "usbw";

$mysqli = new mysqli ($hostname,$usuario,$bancodedados);
    if($mysqli->connect_errno){
        echo "falha ao conectar :(" . $mysqli->connect_errno.")".$mysqli->connect_errno;

    }else
    echo "conectado ao banco de dados";
?>