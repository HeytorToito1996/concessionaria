
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
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro de Novos Veículos</h3>
                    <h3 class="title has-text-grey"><a href="index.php" target="_blank">Santorini Motors</a></h3>
					
					
                    <div class="box">
                        <form action="cadastrar.php" enctype="multipart/form-data" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="marca" type="text" class="input is-large" placeholder="Marca" required autofocus>
                                </div>
                            </div>
							
							 <div class="field">
                                <div class="control">
                                    <input name="modelo" type="text" class="input is-large" placeholder="Modelo" required autofocus>
                                </div>
                            </div>
							
                            <div class="field">
                                <div class="control">
                                    <input name="ano" type="text" class="input is-large" placeholder="Ano" required>
                                </div>
                            </div>
                            
							<div class="field">
                                <div class="control">
                                    <input name="km" type="text" class="input is-large" placeholder="Quilometragem" required>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="potencia" type="text" class="input is-large" placeholder="Potência" required>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="transmissao" type="text" class="input is-large" placeholder="Transmissão" required>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="combustivel" type="text" class="input is-large" placeholder="Combustível" required>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="assentos" type="text" class="input is-large" placeholder="Número de Assentos" required>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="portas" type="text" class="input is-large" placeholder="Portas" required>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="cor" type="text" class="input is-large" placeholder="Cor" required>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="valor" type="text" class="input is-large" placeholder="Valor Mínimo" required>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <textarea name="descricao" type="text" class="input is-large" placeholder="Descrição do Veículo" required></textarea>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <textarea name="itens" type="text" class="input is-large" placeholder="Itens do Veículo" required></textarea>
                                </div>
                            </div>
							
							<div class="field">
							  <label for="foto" class="form-label">Foto do Veículo</label>
							  <input class="form-control" type="file" name ="foto" id="foto" accept=".jpg">
							</div>
							
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
						 <a class="btn btn-primary btn-lg" href="painel.php" role="button">Tela Inicial</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>