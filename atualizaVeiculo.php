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
	$sql = "SELECT * FROM veiculos WHERE codVeiculo = '$codVeiculo' ";
	//echo $sql; exit();
	
	$dados = mysqli_query($conexao, $sql);
	
	$linha = mysqli_fetch_assoc($dados);
	
  ?>
  
	<div class="container">
		<div class ="row">
			<div class="col"><h1>Atualizar Dados de Veículo</h1>
			<form action="atualizarVeiculo.php"  enctype="multipart/form-data" method ="POST">
				<div class="form-group">
					<label for="nome">Marca :</label>
					<input type="text" class="form-control" name="marca"  value="<?php echo $linha['Marca']; ?>" required>
				
					<label for="login">Modelo :</label>
					<input type="text" class="form-control" name="modelo"  value="<?php echo $linha['Modelo']; ?>" required>
				
					<label for="senha">Ano :</label>
					<input type="text" class="form-control" name="ano"  value="<?php echo $linha['Ano']; ?>" required>
					
					<label for="senha">Quilometragem :</label>
					<input type="text" class="form-control" name="quilometragem" value="<?php echo $linha['Quilometragem']; ?>" required>
					
					<label for="senha">Potência:</label>
					<input type="text" class="form-control" name="potencia" value="<?php echo $linha['Potencia']; ?>" required>
					
					<label for="senha">Transmissão:</label>
					<input type="text" class="form-control" name="transmissao"  value="<?php echo $linha['Transmissao']; ?>" required>
					
					<label for="senha">Combustível:</label>
					<input type="text" class="form-control" name="combustivel"  value="<?php echo $linha['Combustivel']; ?>" required>
					
					<label for="senha">Nº de Assentos:</label>
					<input type="text" class="form-control" name="assentos" value="<?php echo $linha['Assentos']; ?>" required>
					
					<label for="senha">Portas:</label>
					<input type="text" class="form-control" name="portas"  value="<?php echo $linha['Portas']; ?>" required>
					
					<label for="senha">Cor:</label>
					<input type="text" class="form-control" name="cor" value="<?php echo $linha['Cor']; ?>" required>
					
					<label for="descricao">Descrição :</label>
					<textarea name="descricao" type="text" class="input is-large" placeholder="Descrição do Veículo" required></textarea>
								
					<label for="itens">Itens Adicionais :</label>
					<textarea name="Itens" type="text" class="input is-large" placeholder="Itens Adicionais" required></textarea>
					
					<label for="senha">Foto do Veículo:</label>
					<input type="file" class="form-control" name="foto" value="<?php echo $linha['Foto']; ?>">
				</div>

				<input type="submit" class="btn btn-primary" value="Salvar Alterações"> <a href="painel.php" class="btn btn-primary">Tela Inicial</a>
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