<?php
    session_start();
    if (isset($_POST['submit']) && !empty($_POST['senha']) && !empty($_POST['nome'])) {
        include_once('conexao.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
        $result = $conexao->query($sql);

        if (mysqli_num_rows($result) < 1) 
        {
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            header("location:login.php");
            $_SESSION['mensa'] = "<p style='color: #66fcf1';>Nome ou senha está incorreto!</p>";
            
        }
        else
        {
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            header("location:site.php");    
        }

    }
    else {
        header("location:login.php");
    }



?>
<script src="main.js"></script>