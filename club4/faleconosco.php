<div>
    <h1>FALE CONOSCO</h1>
    <h3>Entre em contato</h3>
    
    <form action="contatodb.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome"><br>
        <label>Email:</label>
        <input type="email" name="email"><br>
        <label>Telefone:</label>
        <input type="tel" name="telefone" placeholder="(XX) XXXX-XXXX"><br>
        <label>Assunto:</label>
        <select name="assunto">
            <option value="Dúvidas">Dúvidas</option>
            <option value="Sugestões">Sugestões</option>
            <option value="Reclamações">Reclamações</option>
        </select>
        <br>
        <label>Mensagem:</label>
        <textarea name="mensagem"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
</div>