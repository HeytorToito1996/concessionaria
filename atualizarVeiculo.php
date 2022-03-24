<?php
include("conexao.php");
			$codUser = $_POST["id"];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$ano = $_POST['ano'];
			$km = $_POST['quilometragem'];
			$potencia = $_POST['potencia'];
			$transmissao = $_POST['transmissao'];
			$combustivel = $_POST['combustivel'];
			$assentos = $_POST['assentos'];
			$portas = $_POST['portas'];
			$cor = $_POST['cor'];
			$valor = $_POST['valor'];
			$descricao = $_POST['descricao'];
			$itens = $_POST['itens'];
			$foto = $_FILES['foto'];
			$nomeFoto = moverFoto($foto);
			
			
			$sql = "UPDATE `veiculos` SET Marca='$marca',Modelo='$modelo',Ano='$ano',Quilometragem='$km',Potencia='$potencia',Transmissao='$transmissao',Combustivel='$combustivel',Assentos='$assentos',Portas='$portas',Cor ='$cor',valorMinimo ='$valor',Itens='$itens',Descricao ='$descricao',Foto='$nomeFoto',dataCadastro = NOW() WHERE codVeiculo = '$codUser' ";
			//echo $sql;exit();
			if (mysqli_query($conexao, $sql)){
				echo "<img src='img/$nomeFoto' title='$nomeFoto' class='mostraFoto'>";
				mensagem("Veículo Cadastrado com Sucesso",'');
			}
			else {
				mensagem("veiculo NÃO atualizado",'danger');
			}
		
?>