<?php
include("conexao.php");
$codVeiculo = $_GET['id'];
$sql = "DELETE FROM veiculos WHERE codVeiculo = '$codVeiculo' ";
//echo $sql;exit();
if (mysqli_query($conexao, $sql)){
				mensagem("veiculo excluido com sucesso",'success');
			}
			
			else {
				mensagem("erro ao realizar a operação",'danger');
			}			

?>