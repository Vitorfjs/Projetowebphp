<?php include "../config.inc.php";?>
<?php

$titulo = $_REQUEST['titulo'];
$texto = $_REQUEST['texto'];
$id = $_REQUEST['id'];


$sql2 = mysqli_query($conn, "SELECT * FROM paginas WHERE titulo='$titulo'");

$sql = "UPDATE paginas SET titulo='$titulo', texto='$texto' WHERE id ='$id'";
$altera = mysqli_query($conn, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='listar.php'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
    <a href='listar.php'>Voltar</a>";
}
?>