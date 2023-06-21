<?php 
session_start();
if(empty($_SESSION)){
    print "<script>location.href='./fale_conosco.php'</escript>";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="css/fale.css">
<?php 
print "conetado".$_session["nome"];
print"<a href='logout.php'> sair</a>";
?>
</body>
</html>

     