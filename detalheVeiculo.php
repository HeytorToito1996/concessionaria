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
	include ("admin/conexao.php");
	$codVeiculo = $_GET['id'] ?? ' ';
	$sql = "SELECT * FROM veiculos WHERE codVeiculo = '$codVeiculo' ";
	//echo $sql; exit();
	
	$dados = mysqli_query($conexao, $sql);
	
	$linha = mysqli_fetch_assoc($dados);
	
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
                <h4><del>$11999.00</del>  $11779.00</h4>
                <h2><?php echo $linha['Marca'] ?>  <?php echo $linha['Modelo'] ?></h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="admin/img/<?php echo $linha['Foto'] ?>" alt="" class="img-fluid wc-image">
            </div>

          </div>

          <div class="col-md-5">
            <form action="#" method="post" class="form">
              <ul class="list-group list-group-flush">
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Tipo :</span>

                         <strong class="pull-right">Seminovo</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Marca</span>
                         <strong class="pull-right"><?php echo $linha['Marca']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> Modelo </span>

                         <strong class="pull-right"><?php echo $linha['Modelo']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Ano </span>

                         <strong class="pull-right"><?php echo $linha['Ano']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Quilometragem</span>

                         <strong class="pull-right"><?php echo $linha['Quilometragem']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Tipo de Combustível</span>

                         <strong class="pull-right"><?php echo $linha['Combustivel']?></strong>
                    </div>
               </li>

            
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Potência</span>

                         <strong class="pull-right"><?php echo $linha['Potencia']?></strong>
                    </div>
               </li>


               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Transmissão</span>

                         <strong class="pull-right"><?php echo $linha['Transmissao']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Assentos</span>

                         <strong class="pull-right"><?php echo $linha['Assentos']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Portas</span>

                         <strong class="pull-right"><?php echo $linha['Portas']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Color</span>

                         <strong class="pull-right"><?php echo $linha['Cor']?></strong>
                    </div>
               </li>
              </ul>
			  
			  <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Valor Mínimo</span>

                         <strong class="pull-right">A Partir de : <?php echo $linha['precoMinimo']?></strong>
                    </div>
               </li>
              </ul>
            </form>

            <br>
          </div>
        </div>
      </div>
    </section>
	<br>
    <div class="section contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
          	<div class="sidebar-item recent-posts">
	            <div class="sidebar-heading">
	              <h2>Descrição do Veículo</h2>
	            </div>

	            <div class="content">
	              <?php echo $linha["Descricao"]; ?>
	            </div>

	            <br>
            </div>
          </div>

          <div class="col-md-4">
          	<div class="sidebar-item recent-posts">
	            <div class="sidebar-heading">
	              <h2>Itens Adicionais</h2>
	            </div>

	            <div class="content">
	              <?php echo $linha["Itens"]; ?>
	            </div>
            </div>

            <br>
            <br>
	<?php //} ?>
            <div class="sidebar-item recent-posts">
	            <div class="sidebar-heading">
	              <h2>Detalhes para Contato</h2>
	            </div>

	            <div class="content">
	              <p>
	                <span>Nome</span>

	                <br>

	                <strong>Karina</strong>
	              </p>

	              <p>
	                <span>Telefone para contato</span>

	                <br>
	                
	                <strong>
	                  <a href="tel:123-456-789">123-456-789</a>
	                </strong>
	              </p>

	              <p>
	                <span>Whatsapp</span>

	                <br>
	                
	                <strong>
	                  <a href="https://wa.me/5511953929709?text=Olá,tenho interesse em adquirir um de seus veículos" class="btn btn-success">Contato via Whatsapp</a>
	                </strong>
	              </p>

	              <p>
	                <span>Email</span>

	                <br>
	                
	                <strong>
	                  <a href="mailto:john@carsales.com">john@carsales.com</a>
	                </strong>
	              </p>
	            </div>
            </div>

            <br>
          </div>
        </div>
      </div>
    </div>

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