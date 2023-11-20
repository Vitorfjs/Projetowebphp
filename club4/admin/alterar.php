<?php  include "../config.inc.php"; ?>
<?php

    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $sql = "SELECT * FROM teste WHERE id = '$id'";
    $busca = mysqli_query($conn, $sql);

while($dados = mysqli_fetch_array($busca)){
    
?>

<h1 style="font: icon; font-size:38px;">Cadastro</h1>
<form action="alterarbd.php" method="post">
    <input type="hidden" name="id" value="<?= isset($dados['id']) ? $dados['id'] : ''; ?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?= isset($dados['nome']) ? $dados['nome'] : ''; ?>"><br>
    <label>Sobrenome:</label>
    <input type="text" name="sobrenome" value="<?= isset($dados['sobrenome']) ? $dados['sobrenome'] : ''; ?>"><br>
    <label>E-mail:</label>
    <input type="text" name="email" placeholder="Seu e-mail" required value="<?= isset($dados['email']) ? $dados['email'] : ''; ?>">
    <br>
    <label>CPF:</label>
    <input type="text" name="cpf" placeholder="Seu CPF" required value="<?= isset($dados['cpf']) ? $dados['cpf'] : ''; ?>">
    <br>
    <label>Data de nascimento:</label>
    <input type="date" name="data_de_nascimento" required value="<?= isset($dados['data_de_nascimento']) ? $dados['data_de_nascimento'] : ''; ?>">
    <br>
    <label>DDI
        <select name="ddi">
            <option value="+55">+55</option>
        </select>
    </label>
    <label>Celular:</label>
    <input type="tel" name="telefone" placeholder="(XX) XXXX-XXXX" required value="<?= isset($dados['telefone']) ? $dados['telefone'] : ''; ?>">
    <br>
    <label>Gênero
        <select name="genero">
            <option value="masculino" <?= ($dados['genero'] == 'masculino') ? 'selected' : ''; ?>>Masculino</option>
            <option value="feminino" <?= ($dados['genero'] == 'feminino') ? 'selected' : ''; ?>>Feminino</option>
            <option value="outro" <?= ($dados['genero'] == 'outro') ? 'selected' : ''; ?>>Outro</option>
        </select>
    </label>
    <br>
    <br>
    <input type="submit" name="Cadastrar">
</form>
<?php
}
?>