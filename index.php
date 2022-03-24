
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Área Administrativa</h3>
                    <h3 class="title has-text-grey"><a href="index.php" target="_blank">Santorini Motors</a></h3>
					
					<div class = "jumbotron">
                    <div class="box">
					
						
					
                        <form action="loginScript.php" enctype="multipart/form-data" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário" required autofocus>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="senha" type="password" class="input is-large" placeholder="Senha" required autofocus>
                                </div>
                            </div>
							
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
					</div>	 
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>