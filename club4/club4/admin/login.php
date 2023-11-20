<?php
// Se houver um erro, exiba a mensagem correspondente
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "<script>
            alert('Login e/ou senha incorretos');
            window.location.href = 'http://localhost/php.vitor2/Nova%20pasta/club4/index.php?pg=admin/login';
          </script>";
}
?>

<section class="login">
    <div class="divlogin">
        <div class="formlogin">
            <p>Login</p>

            <form class="" action="admin/acesso2.php" method="post">
                <div class="user-box">
                    <input required="" type="text" id="usuario" class="form-control" name="usuario">
                    <label for="usuario">Usuário</label>
                </div>
                <div class="user-box">
                    <input required="" type="password" id="senha" class="form-control" name="senha">
                    <label for="senha">Senha</label>
                    
                </div>
                <button type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Entrar
                </button>
            </form>

        </div>
    </div>
</section>