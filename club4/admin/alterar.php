<?php include "../config.inc.php"; ?>
<?php

$id = isset($_GET['id']) ? $_GET['id'] : null;
$sql = "SELECT * FROM teste WHERE id = '$id'";
$busca = mysqli_query($conn, $sql);

while ($dados = mysqli_fetch_array($busca)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styles2.css" media="screen"/>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Club4 - Admin</title>

    <style>
        body {
            background-color: #131212;
        }
    </style>
</head>

<section class="cadastro">
    <div class="divcadas">
        <div class="formcadas">
            <p>Cadastro</p>
            
            <form action="alterarbd.php" method="post">
                <input type="hidden" name="id" value="<?= isset($dados['id']) ? $dados['id'] : ''; ?>">

                <div class="user-box">
                    <input type="text" name="nome" value="<?= isset($dados['nome']) ? $dados['nome'] : ''; ?>" placeholder="<?= empty($dados['nome']) ? 'Seu nome' : ''; ?>" required>
                </div>

                <div class="user-box">
                    <input type="text" name="sobrenome" value="<?= isset($dados['sobrenome']) ? $dados['sobrenome'] : ''; ?>" placeholder="<?= empty($dados['sobrenome']) ? 'Seu sobrenome' : ''; ?>" required>
                </div>

                <div class="user-box">
                    <input type="text" name="email" value="<?= isset($dados['email']) ? $dados['email'] : ''; ?>" placeholder="<?= empty($dados['email']) ? 'Seu e-mail' : ''; ?>" required>
                </div>

                <div class="user-box">
                    <input type="text" name="cpf" value="<?= isset($dados['cpf']) ? $dados['cpf'] : ''; ?>" placeholder="<?= empty($dados['cpf']) ? 'Seu CPF' : ''; ?>" required>
                </div>

                <div class="user-box">
                    <input type="date" name="data_de_nascimento" value="<?= isset($dados['data_de_nascimento']) ? $dados['data_de_nascimento'] : ''; ?>" required>
                </div>

                <div class="user-box">
                    <select name="ddi">
                        <option value="+55" selected>+55</option>
                    </select>
                </div>

                <div class="user-box telef">
                    <input type="tel" name="telefone" value="<?= isset($dados['telefone']) ? $dados['telefone'] : ''; ?>" placeholder="<?= empty($dados['telefone']) ? 'Seu celular' : ''; ?>" required>
                </div>

                <div class="user-box">
                    <select name="genero">
                        <option value="masculino" <?= ($dados['genero'] == 'masculino') ? 'selected' : ''; ?>>Masculino</option>
                        <option value="feminino" <?= ($dados['genero'] == 'feminino') ? 'selected' : ''; ?>>Feminino</option>
                        <option value="outro" <?= ($dados['genero'] == 'outro') ? 'selected' : ''; ?>>Outro</option>
                    </select>
                </div>

                <br>
                <br>
                <button type="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Enviar
                    </button>
                <br>
                <br>
                <a class="linkvoltar" href='index.php';>Voltar</a>
            </form>
        </div>
    </div>
</section>

<?php
}
?>