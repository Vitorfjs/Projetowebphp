<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styles2.css" media="screen" />
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Club4 - Admin</title>
    <style>
        body {
            background-color: #131212; /* Substitua pela cor desejada */
            margin: 0;
            padding: 0;
        }

        .listregs {
            min-height: 100vh; /* Mínimo 100% da altura da tela */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .tabhor {
            width: 100%;
            max-width: 800px; /* Ajuste conforme necessário */
            margin: 0 auto;
        }
    </style>
</head>

<body>

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

                    <tbody>
                        <?php while ($dados = mysqli_fetch_array($todos)) { ?>
                            <tr class="row100">
                                <td class="column100 column1">
                                    <?= isset($dados['id']) ? $dados['id'] : 'ID não definido'; ?>
                                </td>
                                <td class="column100"><?= isset($dados['nome']) ? $dados['nome'] : ''; ?></td>
                                <td class="column100"><a href="alterar.php?id=<?= isset($dados['id']) ? $dados['id'] : ''; ?>" style="text-decoration: none; text-color: white;">Alterar</a></td>
                                <td class="column100"><a href="javascript:confirmaExclusao(<?= isset($dados['id']) ? $dados['id'] : ''; ?>)" class="ask"style="text-decoration: none; text-color: white;">Excluir</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <a class="linkvoltar" href='index.php';>Voltar</a>
        </div>

    </section>
</body>
