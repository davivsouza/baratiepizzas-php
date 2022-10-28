<?php

    
    include_once('conexao.php');

    $email = mysqli_real_escape_string($conexao, $_POST['email']); 
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);


    $sql = "SELECT * FROM tab_register WHERE login = '$email' AND senha = '$senha'";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
    $verificacao = mysqli_num_rows($executar);

    if ($verificacao == 0){

        echo '<script>alert("Usuario ou senha invalido")</script>';
        echo '<script>javascript:window.location="../pages/login.html";</script>';
        
        
    }
    elseif($verificacao == 1){
        session_start();
        $_SESSION['logado'] = true;
        header("Location: ../../index.php");
        
    }





?>