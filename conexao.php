<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB','santorinimotors');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die("Não foi Possível Conectar !!!");

function mensagem($texto,$tipo){
				echo "<div class='alert alert-$tipo' role='alert'>
				$texto <a href='index.php'>Voltar</a></div>";
			}
			
function moverFoto($vetor_foto){
	if (!$vetor_foto['error']){
		$nome_arquivo = date('ymdhms').".jpg";
		move_uploaded_file($vetor_foto['tmp_name'], "img/".$nome_arquivo);
		return $nome_arquivo;
	}
	
	else {
		return 0;
	}
	
	
}
			
?>