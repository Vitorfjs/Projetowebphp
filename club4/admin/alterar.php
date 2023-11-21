<?php  include "../config.inc.php"; ?>
<?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM paginas WHERE id = '$id'";
    $busca = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<h1>Cadastro</h1>
<form action="alterarbd.php" method="post">
<input type="hidden" name="id" value="<?= isset($dados['id']) ? $dados['id'] : ''; ?>">
    <label>Titulo:</label>
    <input type="text" name="titulo" value="<?= isset($dados['titulo']) ? $dados['titulo'] : ''; ?>"><br>
    <label>Texto:</label>
    <textarea name="texto"><?= isset($dados['texto']) ? $dados['texto'] : ''; ?></textarea><br>
    <input type="submit" value="Cadastrar">
</form>
<?php
}
?>