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
  $sql = "SELECT * FROM veiculos";
  $dados = mysqli_query($conexao, $sql);
  ?>
	<div class="container">
		<div class ="row">
			<div class="col"><h1>Veículos</h1>
		</div>	
	
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID Automóvel</th>
	  <th scope="col">Foto</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Ano</th>
	  <th scope="col">Quilometragem</th>
	  <th scope="col">Potência</th>
      <th scope="col">Transmissão</th>
      <th scope="col">Combustível</th>
	  <th scope="col">Nº de Assentos</th>
	  <th scope="col">Portas</th>
      <th scope="col">Cor</th>
	  <th scope="col">Data de Cadastro</th>
	  <th scope="col">Função</th>
    </tr>
  </thead>
  <?php
	while($linha = mysqli_fetch_assoc($dados)){
			$codVeiculo= $linha['codVeiculo'];
			$marca = $linha['Marca'];
			$modelo = $linha['Modelo'];
			$ano = $linha['Ano'];
			$km = $linha['Quilometragem'];
			$potencia = $linha['Potencia'];
			$transmissao = $linha['Transmissao'];
			$combustivel = $linha['Combustivel'];
			$assentos = $linha['Assentos'];
			$portas = $linha['Portas'];
			$cor = $linha['Cor'];
			$imagem = $linha['Foto'];
  ?>
  
	<tr>
      <th scope="row"><?php echo $codVeiculo; ?></th>
	  <td><img src="img/<?php echo $imagem; ?>" class = "lista_foto"></td>
      <td><?php echo $marca; ?></td>
      <td><?php echo $modelo;?></td>
      <td><?php echo $ano; ?></td>
	     <td><?php echo $km; ?></td>
      <td><?php echo $potencia;?></td>
      <td><?php echo $transmissao; ?></td>
	  <td><?php echo $combustivel; ?></td>
      <td><?php echo $assentos;?></td>
      <td><?php echo $portas; ?></td>
	   <td><?php echo $cor; ?></td>
		<td><?php echo $imagem; ?></td>
	  <td>
		<a href="excluirVeiculo.php?id=<?php echo $codVeiculo;?>"class="btn btn-danger" data-toggle="modal" data-target="#aviso">Excluir</a>

		<a href="atualizaVeiculo.php?id=<?php echo $codVeiculo;?>" class="btn btn-warning">Editar</a>
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