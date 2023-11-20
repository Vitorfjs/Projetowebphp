<h1 style="font: icon; font-size:35px;">Cadastro</h1>
<br>
<form action="matriculabd.php" method="post">
    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Digite seu nome" required>
    <br>
    <label>Sobrenome:</label>
    <input type="text" name="sobrenome" placeholder="Seu sobrenome" required>
    <br>
    <label>E-mail:</label>
    <input type="text" name="email" placeholder="Seu e-mail" required>
    <br>
    <label>CPF:</label>
    <input type="text" name="cpf" placeholder="Seu CPF" required>
    <br>
    <label>Data de nascimento:</label>
    <input type="date" name="data_de_nascimento" required>
    <br>
    <label>DDI
        <select name="ddi">
            <option value="+55">+55</option>
        </select>
    </label>
    <label>Celular:</label>
    <input type="text" name="telefone" placeholder="(XX) XXXX-XXXX" required>
    <br>
    <label>Gênero
        <select name="genero">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>
    </label>
    <br>
    <br>
    <input type="submit" name="Cadastrar">
    <br>
    <br>
</form>