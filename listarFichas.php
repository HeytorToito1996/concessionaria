<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php

  include "conexao.php";
  $sql = "SELECT * FROM fichas";
  $dados = mysqli_query($conexao, $sql);
  ?>
	<div class="container">
		<div class ="row">
			<div class="col"><h1>Veículos</h1>
		</div>	
	
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID Pedido</th>
	  <th scope="col">Nome Completo</th>
      <th scope="col">E-Mail</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
	  <th scope="col">CEP</th>
	  <th scope="col">Cidade</th>
      <th scope="col">Bairro</th>
      <th scope="col">Endereço</th>
	  <th scope="col">Carro Desejado</th>
	  <th scope="col">Mensagem</th>
	  <th scope="col">Data de Preenchimento</th>
	  <th scope="col">Função</th>
    </tr>
  </thead>
  <?php
	while($linha = mysqli_fetch_assoc($dados)){
			$codPedido= $linha['codFicha'];
			$nome = $linha['nome'];
			$email = $linha['email'];
			$cpf = $linha['cpf'];
			$telefone = $linha['telefone'];
			$cep = $linha['cep'];
			$cidade = $linha['cidade'];
			$bairro = $linha['bairro'];
			$endereco = $linha['endereco'];
			$carro = $linha['veiculo'];
			$mensagem = $linha['mensagem'];
			$dataCadastro = $linha['dataCadastro'];
  ?>
  
	<tr>
      <th scope="row"><?php echo $codPedido; ?></th>
	  <td><?php echo $nome; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $cpf;?></td>
      <td><?php echo $telefone; ?></td>
	     <td><?php echo $cep; ?></td>
      <td><?php echo $cidade;?></td>
      <td><?php echo $bairro; ?></td>
	  <td><?php echo $endereco; ?></td>
	  <td><?php echo $carro; ?></td>
      <td><?php echo $mensagem;?></td>
      <td><?php echo $dataCadastro; ?></td>
	  <td>
		<a href="excluirFicha.php?id=<?php echo $codPedido;?>"class="btn btn-danger" data-toggle="modal" data-target="#aviso">Excluir</a>

		<a href="visualizaFicha.php?id=<?php echo $codPedido;?>" class="btn btn-primary">Visualizar Ficha</a>
	  </td>
    </tr>
	<?php } ?>
 
</table>
	</div>
	<a href="painel.php"  class="btn btn-primary">Tela Inicial</a>
    
	<!-- Modal -->
<div class="modal fade" id="aviso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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