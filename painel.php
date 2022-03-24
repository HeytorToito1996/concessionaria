<?php include ("conexao.php");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Santorini Motors - Área Administrativa </title>
  </head>
  <body>
   <?php
	session_start();
	if (!isset($_SESSION["usuario"])){
		header("Location:painel.php");
	}
   ?>
	<div class="container">
		<div class ="row">
			<div class = "col">
				<div class="jumbotron">
					  <h1 class="display-4">Santorini Motors - Área Administrativa </h1>
					  <p class="lead">Sistema de Cadastro e Atualização de Dados</p>
					  <hr class="my-4">
					  <p>Selecione uma das Opções abaixo para prosseguir</p>
					  <a class="btn btn-primary btn-lg" href="cadastro.php" role="button">Cadastrar Automóvel</a>
					  <a class="btn btn-primary btn-lg" href="pesquisarVeiculo.php" role="button">Listar Automóveis</a>
					  <a class="btn btn-primary btn-lg" href="listarFichas.php" role="button">Fichas de Aquisição</a>
				</div>
				 <a href="logout.php" class="btn btn-danger btn-lg" href="listarFichas.php" role="button">Sair</a>
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