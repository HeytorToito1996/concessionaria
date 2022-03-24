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
                <h4>Faça sua Ficha para contratação</h4>
                <h2>Entraremos em contato o mais rápido possível!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="contact-us">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="sidebar-heading">
                      <h2>Ficha de Aquisição</h2>
                    </div>
                    <div class="content">
                      <form action="admin/enviarFicha.php" method="POST">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="nome" type="text" id="name" placeholder="Seu Nome" required="yes">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Seu e-Mail" required="yes">
                            </fieldset>
                          </div>
						   <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="cpf" type="text" id="cpf" placeholder="CPF" required="yes">
                            </fieldset>
                          </div>
						   <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="telefone" type="text" id="telefone" placeholder="Telefone" required="yes">
                            </fieldset>
                          </div>
						   <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="cep" type="text" id="cep" placeholder="CEP" required="yes">
                            </fieldset>
                          </div>
						  <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="estado" type="text" id="estado" placeholder="Estado" required="yes">
                            </fieldset>
                          </div>
						  <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="cidade" type="text" id="cidade" placeholder="Cidade" required="yes">
                            </fieldset>
                          </div>
						  <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="bairro" type="text" id="cidade" placeholder="Bairro" required="yes">
                            </fieldset>
                          </div>
						   <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="endereco" type="text" id="cidade" placeholder="Endereço" required="yes">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="veiculo" type="text" id="subject" placeholder="Veículo que está interessado">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="mensagem" rows="6" id="message" placeholder="Sua Mensagem(opcional)" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Enviar Ficha</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="sidebar-heading">
                      <h2>Contate-nos</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <h5>+5511 94040 5566</h5>
                          <span>Telefone</span>
                        </li>
                        <li>
                          <h5>contato@feirao.com</h5>
                          <span>Nosso e-Mail</span>
                        </li>
                        <li>
                          <h5>Rua Aracaré nº200</h5>
                          <span>Endereço</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12">
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
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

  </body>
</html>