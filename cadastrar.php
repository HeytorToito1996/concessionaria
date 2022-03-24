<?php
session_start();
include("conexao.php");

$marca = mysqli_real_escape_string ($conexao, $_POST["marca"]);
$modelo = mysqli_real_escape_string($conexao, $_POST["modelo"]);
$ano = mysqli_real_escape_string ($conexao , $_POST["ano"]);
$quilometragem  = mysqli_real_escape_string ($conexao, $_POST["km"]);
$potencia = mysqli_real_escape_string ($conexao , $_POST["potencia"]);
$transmissao = mysqli_real_escape_string($conexao ,$_POST["transmissao"]);
$combustivel = mysqli_real_escape_string ($conexao ,$_POST["combustivel"]);
$assentos = mysqli_real_escape_string ($conexao ,$_POST["assentos"]);
$portas = mysqli_real_escape_string ($conexao, $_POST["portas"]);
$cor = mysqli_real_escape_string ($conexao, $_POST["cor"]);
$valor = mysqli_real_escape_string ($conexao, $_POST["valor"]);
$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
$itens = mysqli_real_escape_string ($conexao,$_POST['itens']);
//Upload de Imagens
$foto = $_FILES['foto'];
$nomeFoto = moverFoto($foto);

$sql = "INSERT INTO veiculos (Marca,Modelo,Ano,Quilometragem,Potencia,Transmissao,Combustivel,Assentos,Portas,Cor,precoMinimo,Descricao,Itens,Foto,dataCadastro) VALUES ('$marca','$modelo','$ano','$quilometragem','$potencia','$transmissao','$combustivel','$assentos','$portas','$cor','$valor','$descricao','$itens','$nomeFoto',NOW())";
//echo $sql;exit();

if (mysqli_query($conexao, $sql)){
	echo "<img src='img/$nomeFoto' title='$nomeFoto' class='mostraFoto'>";
	mensagem("Veículo Cadastrado com Sucesso",'');
	
}

$conexao->close();

?>