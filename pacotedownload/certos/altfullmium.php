<?php 
	include('configfullmium.php');

	$id_usuarios = $_POST["idusuarios"];
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$datanasc = $_POST["datanasc"];
	$cartao = $_POST["cartao"];
	$cvv = $_POST["cvv"];
	$senha = $_POST["senha"];
	  
    // execuчуo do comando update que altera os valores do campo na tabela Clientes
	$sql = "UPDATE usuarios SET nome='$nome', email='$email', datanasc='$datanasc', cartao='$cartao', cvv='$cvv', senha='$senha' WHERE id_usuarios = $id_usuarios";


	$conexao->query($sql)
	$conn->close();

	include('cursos.html');
	
?>