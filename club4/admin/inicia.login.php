<?php

    include "../config.inc.php";

    $usuario = $_REQUEST['usuario'];
    $senha = $_REQUEST['senha'];

    $sql = "INSERT INTO adm (usuario, senha) VALUES ('$usuario', '$senha')";

    if(!$insert){
        echo "Ocorreu um erro ao inserir o registro de login <br>
        <a href = 'primeiro.login.php'>Voltar</a>";
    } else {
        echo "<h3>Registro de login cadastrado com sucesso!</h3><br>";
        "<a href='index.php>Voltar</a>";
    }

?>