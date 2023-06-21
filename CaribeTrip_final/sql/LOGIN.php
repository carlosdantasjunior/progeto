<?php

session_start();
if(empty($_POST) or (empty($_POST["mensagem"])or (empty($_POST["mensagem"])))){
    print "<script>location.href='./fale_conosco.php'</script>"
}
include('config.php');

$usuario = $_POST["nome_login"];
$senha = $_POST["email_login"];

$sql ="SELECT * FROM nome_login
WHERE nome_login = '{$usuario}'
AND email_login ='{$senha}'";
$res =$conn-> query ($sql) or die($connn->error);
$roW = $res->fetch_object();
$qtd= $res->num_row;

if($qtd >0){
$_session["nome_login"] =$usuario;
$_session["email_login"]= $row->nome;
$_session["mensagem"]= $row->text;
print"<script>location.href='dashboard.php';<script>";
}else{
print"<script>alert('usuário e/ou senha incorretos);<script>";
print"<script>location.href='./fale_conosco.php'<script>";
}

?>