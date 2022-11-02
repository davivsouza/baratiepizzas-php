<?php
    include("conexao.php");
    $query  = "SELECT * FROM  tab_pizza";
    $consulta = mysqli_query($conexao , $query);
?>