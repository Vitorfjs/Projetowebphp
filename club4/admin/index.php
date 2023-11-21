<?php
    include "../config.inc.php";
?>

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

<body>
    <section class="admin">
        <div class="headeradm">
            <h1 class="page-header">Painel Admin </h1>
        </div>

        <div class="linksadm">
                <a class="link" href="index.php" style="text-decoration: none;">Home</a>
                <a class="link" href="listar.php" style="text-decoration: none;">Listar Regs</a>
                <a class="link" href="inserir.php" style="text-decoration: none;">Inserir Regs</a>
                <a class="link" href="../index.php" style="text-decoration: none;">Sair</a>
        </div>
    </section>
<body

<?php

    @$pg = $_GET['pg'];

    if(empty($_SERVER["QUERY_STRING"])) {
                
    } else {
        include("$pg.php");
    }

?>