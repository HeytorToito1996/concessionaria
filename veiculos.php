<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Santorini Motors</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
	<link rel="stylesheet" href="assets/css/logo.css">
  </head>

  <body>
  <?php

  include "admin/conexao.php";
  $sql = "SELECT * FROM veiculos";
  $dados = mysqli_query($conexao, $sql);
  ?>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><div id ="logotipo"><img src="assets/images/logotipo.jpeg" width="200" height="80"></div></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Início
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="veiculos.php">Automóveis</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link" href="faq.html">Como Funciona ?</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="fichaAquisicao.php">Ficha</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Automóveis</h4>
                <h2>As Melhores Opções de Veículo para Você !!!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    


    <section class="blog-posts grid-system">
      <div class="container">
        <section class="contact-us">
          <div class="contact-form">
            <form action="#">
                <div class="row">
				
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
		$valor = $linha['precoMinimo'];
		$imagem = $linha['Foto'];
  ?>
			
            <div class="col-md-4 col-sm-6">
			<div class="row">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="admin/img/<?php echo $imagem ?>" alt="">
                </div>
                <div class="down-content">
                  <strong> A Partir de : </strong> <span>R$ <?php echo $valor ?>,00</span>
                  <a href="detalheVeiculo.php?id=<?php echo $codVeiculo ?>"><h4><?php echo $marca ?> <?php echo $modelo ?></h4></a>
                  <p>
                      
                      <?php echo $potencia ?> / <?php echo $combustivel ?> / <?php echo $ano ?> 
                  
                  </p>
                  
                </div>
              </div>
            </div>
    </div>

<?php } ?>
    </section>	
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>
                Copyright © 2021
                | Desenvolvido por : HTC Desenvolvimento Web
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>