<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styles2.css" media="screen"/>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Club4 - Admin</title>
</head>


<section class="inseregs">
    
    <div class="headerinserg">
        <h1>Cadastro</h1>
    </div>

    <div class="conteudoinserg">
        <div class="divcadas">
            <div class="formcadas">
                <p>Cadastro</p>
                
                <form class="" action="inserirbd.php" method="post">
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
                    <button type="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Cadastrar
                    </button>
                </form>
            </div>
        </div>

        <a class="linkvoltar" href="index.php">Voltar</a>
    </div>
    

</section>