<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
          <h3>Obrigado pelo contato.</h3> 
        </div>
        <div class="col-md-6 col-serv">
		<?php

            include("config.inc.php");
			
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];
			$assunto = $_POST['assunto'];
			$mensagem = $_POST['mensagem'];

			$dados = "INSERT INTO contato (nome, email,telefone,assunto,mensagem) VALUES ('$nome','$email','$telefone','$assunto','$mensagem')";
			
			$query = mysqli_query($conn,$dados);

			if($query){
				echo "<script>
				alert('Dados enviados com sucessso!');
				window.location.href = 'index.php';
				</script>";

		    }else {
		    	echo "<script>
				alert('Não foi possível enviar o e-mail');
				window.location.href = 'index.php';
				</script>";
		    }
		?>
		</div>
	  </div>
	</div>
</div>