
<?php
session_start();
include_once("conexao.php");
$nome = filter_input(INPUT_POST, 'nome');
$senha = filter_input(INPUT_POST, 'senha');

if(mb_strlen($senha) < 8){
    echo "Insira ao menos 8 caracteres";
}
else {
    $result_usuario = "INSERT INTO usuarios (nome, senha, created) VALUES ('$nome', '$senha', NOW())";
}

$resultado_usuario = mysqli_query($conexao, $result_usuario);
if (mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "<p style='color: #66fcf1';>Usuário cadastrado com sucesso!</p>";
    header("Location: registrar.php");
}else{
    header("Location: registrar.php");
    $_SESSION['msg'] = "<p style='color: #66fcf1';>Usuário não foi cadastrado com sucesso!</p>";

}
?>
