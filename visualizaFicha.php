<?php include ("conexao.php");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <?php
	$codVeiculo = $_GET['id'] ?? ' ';
	$sql = "SELECT * FROM fichas WHERE codFicha = '$codVeiculo' ";
	//echo $sql; exit();
	
	$dados = mysqli_query($conexao, $sql);
	
	$linha = mysqli_fetch_assoc($dados);
	
  ?>
  
	<div class="container">
		<div class ="row">
			<div class="col"><h1>Ficha de Aquisição</h1>
			<form action="atualizarVeiculo.php"  enctype="multipart/form-data" method ="POST">
				<div class="form-group">
					<label for="nome">Nome Completo :</label>
					<input type="text" class="form-control" name="marca"  value="<?php echo $linha['nome']; ?>" disabled readonly>
				
					<label for="login">E-Mail :</label>
					<input type="text" class="form-control" name="modelo"  value="<?php echo $linha['email']; ?>" disabled readonly>
				
					<label for="senha">CPF :</label>
					<input type="text" class="form-control" name="ano"  value="<?php echo $linha['cpf']; ?>" disabled readonly>
					
					<label for="senha">Telefone :</label>
					<input type="text" class="form-control" name="quilometragem" value="<?php echo $linha['telefone']; ?>" disabled readonly>
					
					<label for="senha">CEP:</label>
					<input type="text" class="form-control" name="potencia" value="<?php echo $linha['cep']; ?>" disabled readonly>
					
					<label for="senha">Estado:</label>
					<input type="text" class="form-control" name="transmissao"  value="<?php echo $linha['estado']; ?>" disabled readonly>
					
					<label for="senha">Cidade:</label>
					<input type="text" class="form-control" name="combustivel"  value="<?php echo $linha['cidade']; ?>" disabled readonly>
					
					<label for="senha">Bairro:</label>
					<input type="text" class="form-control" name="assentos" value="<?php echo $linha['bairro']; ?>" disabled readonly>
					
					<label for="senha">Endereço:</label>
					<input type="text" class="form-control" name="portas"  value="<?php echo $linha['endereco']; ?>" disabled readonly>
					
					<label for="senha">Mensagem:</label>
					<textarea class="form-control" name="cor" value="<?php echo $linha['mensagem']; ?>" disabled readonly>
					</textarea>
				</div>

				<a href="https://wa.me/55<?php echo $linha['telefone']?>" class="btn btn-primary" value="">Entrar em Contato via Whatsapp</a> <a href="index.php" class="btn btn-primary">Tela Inicial</a>
				<input type="hidden" name="id" value="<?php echo $codVeiculo;?>">
			</form>
			</div>
		</div>
	</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgy
	d0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>