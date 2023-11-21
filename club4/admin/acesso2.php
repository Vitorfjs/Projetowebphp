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
        // Se o login/senha estiver incorreto, redirecionar para a página de login com uma mensagem de erro
        header("Location: login.php?error=1");
        exit();
    }
?>