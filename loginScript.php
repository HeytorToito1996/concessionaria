<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$usuario1 = "santorinimotors";
$senha1 = "admin";

if ($usuario == $usuario1 && $senha == $senha1){
	session_start();
	$_SESSION["usuario"] = $usuario;
	$_SESSION["senha"] = $senha;
	header("Location:painel.php");
}

else {
	echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
}
?>