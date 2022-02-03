<?php 
	include('cnfigfullmium.php');        
	$id_usuarios = $_POST["idusuarios"];
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$datanasc = $_POST["datanasc"];
	$cartao = $_POST["cartao"];
	$cvv = $_POST["cvv"];
	$senha = $_POST["senha"];
	
    // Execuчуo do comando Insert que insere novos valores na tabela Clientes
	$sql = "INSERT INTO usuarios VALUES (null, '$nome', '$email', '$datanasc', '$cartao', '$cvv', '$senha');";
	$conexao->query($sql);
	$conn->close();
	
	header ('Location:cursos.html')
?>