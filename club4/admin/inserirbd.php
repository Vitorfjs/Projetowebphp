<?php

    include_once('../config.inc.php');

    $nome = $_REQUEST['nome'];
    $sobrenome = $_REQUEST['sobrenome'];
    $email = $_REQUEST['email'];
    $cpf = $_REQUEST['cpf'];
    $data_de_nascimento = $_REQUEST['data_de_nascimento'];
    $telefone = $_REQUEST['telefone'];
    $genero = $_REQUEST['genero'];


    $sql = "INSERT INTO teste (nome, sobrenome, email, cpf, data_de_nascimento, telefone, genero) 
            VALUES ('$nome', '$sobrenome', '$email', '$cpf', '$data_de_nascimento', '$telefone', '$genero')";

    $insert = mysqli_query($conn, $sql);

    if(!$insert){
        echo "<script>
        alert('Ocorreu um erro ao inserir no banco de dados');
        window.location.href = 'inserir.php';
        </script>";
    } else {
        echo "<script>
        alert('Enviado com sucesso!');
        window.location.href = 'inserir.php';
        </script>";
    }

?>