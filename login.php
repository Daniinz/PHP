<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="icon" href="imagens/icons8-marcador-64.png" type="image/png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="index.php">Voltar ao inicio</a>
  <div class="page2-file">
  <div class="continer">
    <input type="file" name="" id="" value="" />
  </div>
  </div>
    <div class="box">
      <form id="login" method="post" action="testelogin.php">
      <h1>Fazer login</h1>
      <input type="text" id="nome" name="nome" placeholder="Nome de usuario" class="txt" required>
      <input type="Password" id="senha" name="senha" placeholder="Senha" class="psw" minlength="8" required>
      <div class="btn">
      <button name="submit" onclick="login">Login</button>
        <p class="or">_____OU_____</p>
        <a class="sing" href="https://mail.google.com/" target="_blank">Gmail</a>
        </input>
        <?php
  if(isset( $_SESSION['mensa'])) {
    echo $_SESSION['mensa'];
    unset ($_SESSION['mensa']);
    }
  ?>
      </div> 
      <div class="none">
        <div class="cercel">
          <img src="">
        </div>
        <div class="head"></div>
        <div class="body"></div>
      </div>
    

  <script src="main.js"></script>
</body>
</html>