<section class="cadastro">
    <div class="divcadas">
        <div class="formcadas">
            <p>Cadastro</p>
            
            <form class="" action="matriculabd.php" method="post">
                <div class="user-box">
                    <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                </div>
                <div class="user-box">
                    <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required>
                </div>
                <div class="user-box">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="user-box">
                    <input type="text" name="cpf" class="form-control" placeholder="CPF" required>
                </div>
                <div class="user-box">
                    <input style="color-scheme: dark;" type="date" name="data_de_nascimento" class="form-control" placeholder="Data de Nascimento" required>
                </div>
                <div class="user-box telef">
                    <input type="tel" name="telefone" class="form-control" placeholder="Celular" required>
                </div>
                <div class="user-box">
                    <label>Gênero
                        <select name="genero">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                        </select>
                    </label>
                </div>
                <br>
                <br>
                <button type="submit"">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Cadastrar
                </button>
            </form>
        </div>
    </div>
</section>