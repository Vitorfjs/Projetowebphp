<?php

    include_once('../config.inc.php');

    $titulo = $_REQUEST['titulo'];
    $texto = $_REQUEST['texto'];

    $sql = "INSERT INTO paginas (titulo, texto) VALUES ('$titulo', '$texto')";

    $insert = mysqli_query($conn, $sql);

    if(!$insert){
        echo "Ocorreu um erro ao inserir no banco de dados. <br>
        <a href = 'inserir.php'>Voltar</a>";
    } else {
        echo "<h3>Cadastrada com sucesso!</h3><br>";
        echo "<a href='inserir.php'>Cadastrar Novamente</a><br>";
        "<a href='admin>Voltar</a>";
    }

?>