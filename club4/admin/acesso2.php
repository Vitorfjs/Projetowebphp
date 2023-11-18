<?php

    include_once("../config.inc.php");

    $login = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM adm WHERE usuario = '$login' AND senha = '$senha'";
    $query = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($query);

        if ($linha){
            
            header("Location: ../admin/index.php");
            exit();
            
        }else{
            $mensagemErro = "Login e/ou senha incorretos: $login | $senha";
            echo "<script language='javascript' type='text/javascript'>
            alert('$mensagemErro'); window.location.href='login.php';
            </script>";
            exit();
        }
?>