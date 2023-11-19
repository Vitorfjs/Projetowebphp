<?php include "../config.inc.php"; ?>

<?php
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

// Verificação de ID
echo "ID: $id <br>";

$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$cpf = $_REQUEST['cpf'];
$data_de_nascimento = $_REQUEST['data_de_nascimento'];
$telefone = substr(preg_replace("/[^0-9]/", "", $_REQUEST['telefone']), 0, 9);
$genero = isset($_REQUEST['genero']) ? $_REQUEST['genero'] : '';

$sql2 = mysqli_query($conn, "SELECT * FROM teste WHERE id = '$id'");
$registro = mysqli_fetch_assoc($sql2);

$sql = "UPDATE teste SET nome = '$nome', sobrenome = '$sobrenome', 
                email = '$email', cpf = '$cpf', data_de_nascimento = '$data_de_nascimento', 
                telefone = '$telefone', genero = '$genero' WHERE id ='$id'";

$altera = mysqli_query($conn, $sql);

if (!$altera) {
    // Tratamento de Erros MySQL
    echo "Erro MySQL: " . mysqli_error($conn) . "<br>";
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='listar.php'>Voltar</a>";
} else {
    echo "<h3>Atualizado com sucesso!</h3>
    <a href='listar.php'>Voltar</a>";
}
?>