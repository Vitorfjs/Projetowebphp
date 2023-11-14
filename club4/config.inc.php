<?php

    // Conexão com servidor MySQL
    $conexao = mysqli_connect("localhost","root","");
    
    // Conexão com o BD MySQL
    $db = mysqli_select_db($conexao,"club4");

    //Teste conexão
    if($conexao){
        echo "Conexão estabelicida com sucesso.";
    }else{
        echo "Erro na conexão com banco de dados.";
    }

?>