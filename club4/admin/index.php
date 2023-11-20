<?php
    include "../config.inc.php";
?>

<head>

    <title>Club4 - Admin</title>
    
</head>

<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Painel Admin </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php" style="text-decoration: none;">Home</a>
                    </li>
                    <li class="active"><a href="listar.php" style="text-decoration: none;">Listar Registros</a></li>
                    <li class="active"><a href="inserir.php" style="text-decoration: none;">Inserir Novo Registro</a></li>
                    <li class="active"><a href="../index.php" style="text-decoration: none;">Sair</a></li>
                </ol>
            </div>
        </div>

<?php

    @$pg = $_GET['pg'];

    if(empty($_SERVER["QUERY_STRING"])) {
                
    } else {
        include("$pg.php");
    }

?>