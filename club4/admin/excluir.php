<?php include "../config.inc.php"; ?>

<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Verifica se o ID é válido
if (!is_null($id)) {
    // Constrói a consulta para excluir o registro com base no ID
    $sql = "DELETE FROM teste WHERE id = $id";

    // Executa a consulta
    $delete = mysqli_query($conn, $sql);

    // Verifica se a exclusão foi bem-sucedida
    if ($delete) {
        // Mensagem de sucesso com JavaScript para redirecionamento
        echo "<script>
            alert('Excluído com êxito');
            window.location.href = 'listar.php';
        </script>";
    } else {
        // Mensagem de erro com JavaScript
        echo "<script>
            alert('Erro ao excluir');
            window.history.back();
        </script>";
    }
} else {
    // Mensagem de ID inválido com JavaScript
    echo "<script>
        alert('ID inválido');
        window.history.back();
    </script>";
}
?>
?>