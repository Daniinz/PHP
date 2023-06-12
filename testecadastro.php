
<?php
session_start();
include_once("conexao.php");
$nome = filter_input(INPUT_POST, 'nome');
$senha = filter_input(INPUT_POST, 'senha');
$email = filter_input(INPUT_POST, 'email');

if(mb_strlen($senha) < 8){
    echo "Insira ao menos 8 caracteres";
}
else {
    $result_usuario = "INSERT INTO usuarios (nome, senha, email, created) VALUES ('$nome', '$senha','$email', NOW())";
}

$resultado_usuario = mysqli_query($conexao, $result_usuario);
if (mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "<p style='color: #66fcf1';>Usuário cadastrado com sucesso!</p>";
    echo "Usuário cadastrado com sucesso";
    header("Location: login.php");
}else{
    header("Location: login.php");
    $_SESSION['msg'] = "<p style='color: #66fcf1';>Usuário não foi cadastrado com sucesso!</p>";

}
?>
