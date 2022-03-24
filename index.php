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
    <link rel="stylesheet" href="assets/css/contador.css">
    
  </head>

  <body>

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
<?php
  include "admin/conexao.php";
  $sql = "SELECT * FROM veiculos";
  $dados = mysqli_query($conexao, $sql);
 ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
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
          <div class="item">
            <img src="admin/img/<?php echo $linha ["Foto"];?>" alt="">
            <div class="item-content">
              
              <div class="main-content">
                <div class="meta-category">
                  <span>
                    <del>Valor Mínimo</del> &nbsp; $preço
                  </span>
                </div>

                <a href="car-details.html"><h4><?php echo $linha ["Marca"];?> <?php echo $linha ["Modelo"];?></h4></a>

                <ul class="post-info">
                  <li><i class="fa fa-dashboard"></i> <?php echo $linha ["Quilometragem"];?></li>
                  <li><i class="fa fa-cube"></i> <?php echo $linha ["Potencia"];?></li>
                  <li><i class="fa fa-cog"></i> <?php echo $linha ["Transmissao"];?></li>
                </ul>
              </div>
            
            </div>
          </div>
			<?php } ?>
            </div>
          
      </div>
    </div>
  	
    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <h2 class="text-center" style="font-family:impact;">Veja como é fácil adquirir seu veículo com a Santorini Motors</h2>
          <br>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-1-720x480.jpg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details1.html"><h4>1º Escolha Seu Automóvel</h4></a>
                  
                  <p>Nossa empresa é formada por profissionais altamente qualificados que visam sempre oferecer a você cliente o que temos de melhor...</p>

                  <ul class="post-info">
                
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/blog-2-720x480.jpg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details2.html"><h4>2º Preencha sua Ficha</h4></a>
                  
                  <p>O ano de 2020 virou o mercado automobilístico de cabeça para baixo. Com a pandemia do novo coronavírus, as vendas de veículos nos meses de março, abril e maio foram baixíssimas...</p>

                  <ul class="post-info">
                    
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/artigo.jpeg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details3.html"><h4>3º Aguarde o contato de um de nossos Colaboradores</h4></a>
                  
                  <p>Adquirir um veículo seminovo é uma opção escolhida por muitos consumidores por ser econômico e pratico. A compra de carro usado é bem atrativa é vantajosa, porque tanto o valor do automóvel quanto o IPVA e o seguro são reduzidos...</p>

                  <ul class="post-info">
						
                  </ul>
                </div>
              </div>
			  
			   <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/artigo.jpeg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details3.html"><h4>4º também disponibilizamos entrega via frete para todo Brasil</h4></a>
                  
                  <p>Calculamos a entrega via frete ao endereço cadastrado na ficha de aquisição do veículo e enviamos a cotação. 
Frete Opcional.</p>

                  <ul class="post-info">
						
                  </ul>
                </div>
              </div>
            
          </div>
        </div>
      </div>
        <div id="contador">
            <div class="conteudo">    
               <h1 class="valor"><div class="counter" data-target="200"> 0 </div><br> Veículos Vendidos </h1>
                <p class="text-right">
                <h1 class="valor"> <div class="counter" data-target="200"> 0 </div><br> Veículos em estoque </h1></p>
          </div>
       </div>    
	  <h1>Veja a Opinião de Nossos Clientes</h1>
	 <hr></hr>
    </section>
	
	<section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
		
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
				
			  </div>
                <div class="col-lg-12">
               
                </div>
				
                <div class="col-lg-12">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						<div class="carousel-item active">
						<div class="author-thumb">
                            <img src="assets/images/comment-author-01.jpg" alt=""> 
                          </div> <h4>Charles Kate<span>May 16, 2020</span></h4>
                          
                            
                            <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                          
						</div>
						<div class="carousel-item">
							Segundo
						</div>
						<div class="carousel-item">
						   Terceiro
						</div>
					  </div>
					</div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    
                    <div class="content">
                
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                 
                </div>
                <div class="col-lg-12">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Contate-Nos Pelo Whatsapp</span>
                  <h4>Faça já a aquisição de seu veículo</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="https://wa.me/+5511953929709?text=Olá , Gostaria de saber mais sobre a Santorini motors">Whatsapp</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
    
    <script> 
        const counters = document.querySelectorAll('.counter');
		const speed = 200;

		counters.forEach(counter => {
			const updCount = () =>{
				const target = counter.getAttribute('data-target');
				const count = +counter.innerText;

				const score = target / speed;

				if(count < target) {
					counter.innerText = count + score;
					setTimeout(updCount, 1);
				} else {
					counter.innerText = target;
				}
			};
			updCount();
		});
    </script>    
  </body>
</html>