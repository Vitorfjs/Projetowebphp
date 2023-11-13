<?php
    include "config.inc.php";

    require_once "valida_coo.inc.php";
        
?>

<title>Club4 - Admin</title>

<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Painel Admin </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active"><a href="?pg=listar">Listar Páginas</a></li>
                    <li class="active"><a href="?pg=inserir">Inserir Nova Página</a></li>
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