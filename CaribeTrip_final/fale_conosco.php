<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=idge">
        <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
        <link rel="stylesheet" href="css/fale.css">
        <title>Login</title>
      </head>
      <body>
<?php require_once('home/home.php'); ?>   
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action=""> 
          <h1>CONTATO</h1> 
          <p> 
            <label for="nome_login">Seu nome</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           <p> 
            <label>Mensagem:</label><br><textarea class="msg" cols="50" rows="10"></textarea><br>
          </p>
          <p> 
            <input type="submit" value="enviar" /> 
          </p>
        </form>
      </div>
    </div>
  </div>  