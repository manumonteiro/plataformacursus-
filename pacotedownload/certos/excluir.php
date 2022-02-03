<?php 
	include('configPremium.php'); // Execução da conexão do banco de dados
	
	$codigo = $_GET["cod"]; // recebe o valor da variavel cod, que esta vindo do arquivo select.php 

	$sql = "DELETE FROM cadastro WHERE idcadastro = $codigo";
	$conexao->query($sql);
	$conexao->close();

	header('Location: cursos.html')
	
?>