<?php
include ("conexao.php");

$nome = mysqli_real_escape_string ($conexao , $_POST["nome"]);
$email = mysqli_real_escape_string($conexao ,$_POST["email"]);
$cpf = mysqli_real_escape_string ($conexao ,$_POST["cpf"]);
$telefone = mysqli_real_escape_string ($conexao ,$_POST["telefone"]);
$cep = mysqli_real_escape_string ($conexao, $_POST["cep"]);
$estado = mysqli_real_escape_string ($conexao, $_POST["estado"]);
$cidade = mysqli_real_escape_string($conexao ,$_POST["cidade"]);
$bairro = mysqli_real_escape_string ($conexao ,$_POST["bairro"]);
$endereco = mysqli_real_escape_string ($conexao ,$_POST["endereco"]);
$veiculo = mysqli_real_escape_string ($conexao, $_POST["veiculo"]);
$mensagem = mysqli_real_escape_string ($conexao, $_POST["mensagem"]);

//echo $nome;exit();

$sql = "INSERT INTO fichas (nome,email,cpf,telefone,cep,estado,cidade,bairro,endereco,veiculo,mensagem,dataCadastro) VALUES ('$nome','$email','$cpf','$telefone','$cep','$estado','$cidade','$bairro','$endereco','$veiculo','$mensagem',NOW())";


if (mysqli_query($conexao, $sql)){
	echo "Obrigado pelo interesse , em breve entraremos em contato !!!";	
	header("Location:../fichaAquisicao.php");
}

$conexao->close();

?>