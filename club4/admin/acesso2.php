<?php

    include_once("../config.inc.php");

    $login = $_POST['usuario'];
    $senhaDigitada = $_POST['senha'];

    // Buscar o usuário no banco de dados
    $sql = "SELECT * FROM adm WHERE usuario = '$login'";
    $query = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($query);

    if ($linha && password_verify($senhaDigitada, $linha['senha'])) {
    // Senha correta, redirecionar para a página principal
    header("Location: ../admin/index.php");
    exit();
    } else {
        $mensagemErro = "Login e/ou senha incorretos: $login | $senhaDigitada";
    echo "<script language='javascript' type='text/javascript'>
    alert('$mensagemErro'); 
    </script>";

    header("Refresh: 0; url=login.php");
    exit();
    }
?>