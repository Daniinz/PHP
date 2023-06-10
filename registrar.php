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
  <title>Registrar conta</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  
  <div class="page2-file">
  <div class="continer">
    <input type="file" name="" id="" value="" />
  </div>
  </div>
    <div class="box">
      <form id="login" method="post" action="testecadastro.php">
      <h1>Registrar conta</h1>
      <input type="text" id="nome" name="nome" placeholder="Nome de usuario" class="txt" required>
      <input type="Password" id="senha" name="senha" placeholder="Senha" class="psw" minlength="8" required>
      <div class="btn">
      <button onclick="login">Registrar</button>
        <?php
    if(isset( $_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset ($_SESSION['msg']);
    }
  ?>
        </input>
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
