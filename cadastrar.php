<?php
session_start();
include('conexao.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$email =  mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario ja existe'] = true;
    header('Location: cadastro.php');
    exit();
}

$sql = " INSERT INTO usuario (nome, usuario, email, senha, data_cadastro) values ('$nome', '$usuario', '$email', '$senha', NOW()) ";

if(mysqli_query($conexao, $sql) === TRUE){
    $_SESSION['cadastrado com sucesso'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit();

?>