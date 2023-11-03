<?php

    include_once('config.inc.php');

    $nome = $_REQUEST['nome'];
    $sobrenome = $_REQUEST['sobrenome'];
    $email = $_REQUEST['email'];
    $cpf = $_REQUEST['cpf'];
    $data_de_nascimento = $_REQUEST['data_de_nascimento'];
    $telefone = $_REQUEST['telefone'];


    $sql = "INSERT INTO teste (nome, sobrenome, email, cpf, data_de_nascimento, telefone) 
            VALUES ('$nome', '$sobrenome', '$email', '$cpf', '$data_de_nascimento', '$telefone')";

    $insert = mysqli_query($conn, $sql);

    if(!$insert){
        echo "Ocorreu um erro ao inserir no banco de dados. <br>
        <a href = 'matricula.php'>Voltar</a>";
    } else {
        echo "<h3>Cadastrada com sucesso!</h3><br>";
        echo "<a href='index.php'>Continuar</a>";
    }

?>