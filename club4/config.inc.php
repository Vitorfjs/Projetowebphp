<?php

// Conexão com servidor MySQL
$conn = mysqli_connect("localhost","root","");
// Conexão com o BD MYSQL
$db = mysqli_select_db($conn,"club4");

if($conn){
    echo "Conexão estabelicida com sucesso.";
}else{
    echo "Erro na conexão com banco de dados.";
}

?>