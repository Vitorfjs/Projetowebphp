<script language='javascript'>
function confirmaExclusao(id) {
    if (confirm('Você tem certeza que deseja excluir?')) {
        location.href = 'excluir.php?id=' + id;
    }
}
</script>

<?php include "../config.inc.php"; ?>
<?php

$busca = "SELECT * FROM teste ORDER BY id";

$todos = mysqli_query($conn, $busca);

?>

<table>
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Nome da página</td>
        <td style="width: 105px;">Alterar</td>
        <td style="width: 105px;">Excluir</td>
    </tr>
    <?php while ($dados = mysqli_fetch_array($todos)) { ?>
    
        <tr>
    <td>
        <?php
        if (isset($dados['id'])) {
            echo $dados['id'];
        } else {
            echo "ID não definido";
        }
        ?>
    </td>
    <td><?= isset($dados['nome']) ? $dados['nome'] : ''; ?></td>
    <td><a href="alterar.php?id=<?= isset($dados['id']) ? $dados['id'] : ''; ?>">!!</a></td>
    <td><a href="javascript:confirmaExclusao(<?= isset($dados['id']) ? $dados['id'] : ''; ?>)" class="ask">XX</a></td>
    </tr>
    
    <?php } ?>
</table>

<br><a href='index.php'>Voltar</a>