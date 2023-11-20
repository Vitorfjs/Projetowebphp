<?php
    // Se houver um erro, exiba a mensagem correspondente
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<script>
                alert('Login e/ou senha incorretos');
                window.location.href = 'http://localhost/php.vitor2/Projetowebphp_novo/club4/?pg=admin/login';
            </script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>Login</title>
    <style>
        h1 {
            font: icon;
            font-size: 35px;
        }
    </style>
</head>
<body>

    <h1>Login</h1>

    <form action="admin/acesso2.php" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Usuário" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" class="form-control" name="senha" placeholder="Senha" required>
        <br>
        <br>
        <input type="submit" value="Entrar">
        <br>
        <br>
    </form>

</body>
</html>