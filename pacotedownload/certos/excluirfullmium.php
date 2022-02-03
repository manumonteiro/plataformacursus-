<?php 
	include('configfullmium.php'); // Execuчуo da conexуo do banco de dados
	
	$codigo = $_GET["cod"]; // recebe o valor da variavel cod, que esta vindo do arquivo select.php 

	$sql = "DELETE FROM usuarios WHERE id_usuarios= $codigo";
	$conexao->query($sql);
	$conexao->close();

	header('Location: cursos.html')
	
?>