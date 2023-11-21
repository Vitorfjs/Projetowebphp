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
</head>


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

<section class="listregs">
    
    <div class="headerlistregs">
        <h1>Listar Registros</h1>
    </div>

    <div class="conteudolistrg">
        <div class="divtabhor">
            <table class="tabhor">
                <thead>
                    <tr class="row100 head">
                        <th class="column100">ID</th>
                        <th class="column100">Nome</th>
                        <th class="column100">Alterar</th>
                        <th class="column100">Excluir</th>
                    </tr>
                </thead>

                <?php while ($dados = mysqli_fetch_array($todos)) {} ?>

                <tbody>
                    <tr class="row100">
                        <td class="column100 column1">
                            <?php
                            if (isset($dados['id'])) {
                                echo $dados['id'];
                            } else {
                                echo "ID não definido";
                            }
                            ?>
                        </td>
                        <td class="column100"><?= isset($dados['nome']) ? $dados['nome'] : ''; ?></td>
                        <td class="column100"><a href="alterar.php?id=<?= isset($dados['id']) ? $dados['id'] : ''; ?>">!!</a></td>
                        <td class="column100"><a href="javascript:confirmaExclusao(<?= isset($dados['id']) ? $dados['id'] : ''; ?>)" class="ask">XX</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <a class="linkvoltar" href='index.php'>Voltar</a>
    </div>

</section>


















