<!--Página Inicial-->
<!DOCTYPE html>
<html lang=pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/styles.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./css/styles2.css" media="screen"/>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Club4</title>
</head>

<body>
    <?php

        include_once("topo.php");

        if(empty($_SERVER["QUERY_STRING"])){
            $var = "conteudo.php";
            include_once("$var");
        }else{
            // Verifica se 'pg' está definido e não é vazio
            $pg = isset($_GET['pg']) ? $_GET['pg'] : '';

            // Verifica se 'pg.php' existe antes de incluir
            $pgArquivo = "{$pg}.php";
            if ($pg && file_exists($pgArquivo)) {
            include_once($pgArquivo);
        } else {
            echo "Arquivo não encontrado: {$pgArquivo}";
            }
        }

        include_once("rodape.php");

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>

</html>