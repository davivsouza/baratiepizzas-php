<?php
session_start();
include_once('conexao.php');

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$login = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$fone = mysqli_real_escape_string($conexao, $_POST['fone']);
$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
$cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
$uf = mysqli_real_escape_string($conexao, $_POST['uf']);
$cep = mysqli_real_escape_string($conexao, $_POST['cep']);
$bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);



$sql = "INSERT INTO tab_register VALUES('$cpf','$fone','$nome','$endereco','$bairro','$cidade','$uf','$cep','$login','$senha')";
$executar = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));


session_destroy();
session_start();
$_SESSION['logado'] = true;
echo '<script>alert("Cadastro Feito")</script>';
echo '<script>javascript:window.location="../../index.php";</script>';

?>