<section class="falecon">
    <div class="divfale">
        
        <h1>FALE CONOSCO</h1>

        <div class="formfale">            
            <p>Entre em contato</p>
            
            <form action="contatodb.php" method="post">
                <div class="user-box">
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                <div class="user-box">
                    <input type="email" name="email" placeholder="E-mail">
                </div>
                <div class="user-box">
                    <input type="tel" name="telefone" placeholder="Telefone">
                </div>
                <div class="user-box">
                    <label>Assunto:</label><br>
                    <br><select name="assunto">
                        <option value="Dúvidas">Dúvidas</option>
                        <option value="Sugestões">Sugestões</option>
                        <option value="Reclamações">Reclamações</option>
                    </select>
                </div>
                <br>
                <div class="user-box">
                    <label>Mensagem:</label>
                    <br><br><textarea name="mensagem"></textarea><br>
                </div>
                <input class="falesub" type="submit" value="Enviar">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </input>
            </form>
        </div>
    </div>
</section>