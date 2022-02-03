<?php
   session_start();


   if($_SESSION['email'] == "funcionario.cursos@gmail.com" and $_SESSION['senha'] == "123"){
          header('Location: loginfuncionario.php');
     }
     $logado= $_SESSION['email'];
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title> Acesso funcionarios</title>
    <link rel="stylesheet" type="text/css" href="funcionarioestilo.css">
</head>

    <body>
	<input type="checkbox" id="check" />
    <label id="icone" for="check"><img src="icone.png" /></label>

    <div class="barra">
        <nav>
            <a href="cursos.html"> <div class="link"> Home </div> </a>
            <a href="cadastroo.php"> <div class="link"> Cadastre-se </div> </a>
            <a href="premium.html"> <div class="link"> Premium  </div> </a>
            <a href="fullmium.html"> <div class="link"> Fullmium  </div> </a>
            <a href="faleconosco.html"> <div class="link"> Fale conosco  </div> </a>
            <a href="parceiros.html"> <div class="link"> Parceiros  </div> </a>
            

        </nav>

    </div>

    <br /> <br /> <br />

    <h1> Clientes Premium </h1>

		<?php 
			include('configPremium.php');
	
			//SELECT exibi��o dos valores da tabela Clientes dentro de uma table formatada
				$sql = "SELECT * FROM cadastro";
				$result = $conexao->query($sql);

				if (mysqli_num_rows ($result)>0) {
					echo "<table border = '1'>";
					echo "<thead>";
					echo "<tr>";
					echo "	<th>ID Cadastro</th>";
					echo "	<th>Nome</th>";
					echo "	<th>E-mail</th>";
					echo "	<th>Data de Nascimento</th>";
					echo "	<th>Cartao</th>";
					echo "	<th>CVV</th>";
					echo "	<th>Senha</th>";
					echo "  <th>Editar</th>";
					echo "  <th>Excluir</th>";
					echo "</tr>";
					echo "</thead>";

					echo "<tbody>";
					while($linha = $result->fetch_assoc()) {
						echo "<tr>";
						echo "	<td>".$linha["idcadastro"]."</td>";
						echo "	<td>".$linha["nome"]."</td>";
						echo "	<td>".$linha["email"]."</td>";
						echo "	<td>".$linha["datanasc"]."</td>";
						echo "	<td>".$linha["cartao"]."</td>";
						echo "	<td>".$linha["cvv"]."</td>";
						echo "	<td>".$linha["senha"]."</td>";
						echo "  <br><br>";
						
						//atrav�s da imagem (bolinha vermelha) que � mostrada na tabela o c�digo � direcionado para dados.php
						echo "  <td><a href='dados.php?cod=".$linha["idcadastro"]."'><img src='editar.png' style='height:20px;width:20px'/></a></td>";
						
						//atraves da imagem (bolinha verde) que � mostrada na tabela o c�digo � direcionado para excluir.php 
						echo "  <td><a href='excluir.php?cod=".$linha["idcadastro"]."'><img src='excluir.png' style='height:20px;width:20px'/></a></td>";
						
						echo "</tr>";
						echo "</tbody>";
					}
					echo "</table>";
				}else{
					echo "Nao existem clientes cadastrados!";
				}
				
			?>			
		
		<br><br>
		 
		 <button onclick = "document.location ='cadastropremium.php'" > Inserir </button>
		<button onclick = "document.location ='cursos.html'" > Voltar </button>





		<h1> Clientes Fullmium </h1>

		<?php 
			include('configfullmium.php');
	
			//SELECT exibi��o dos valores da tabela Clientes dentro de uma table formatada
				$sql = "SELECT * FROM usuarios";
				$result = $conexao->query($sql);

				if (mysqli_num_rows ($result)>0) {
					echo "<table border = '1'>";
					echo "<thead>";
					echo "<tr>";
					echo "	<th>ID Cadastro</th>";
					echo "	<th>Nome</th>";
					echo "	<th>E-mail</th>";
					echo "	<th>Data de Nascimento</th>";
					echo "	<th>Cartao</th>";
					echo "	<th>CVV</th>";
					echo "	<th>Senha</th>";
					echo "  <th>Editar</th>";
					echo "  <th>Excluir</th>";
					echo "</tr>";
					echo "</thead>";

					echo "<tbody>";
					while($linha = $result->fetch_assoc()) {
						echo "<tr>";
						echo "	<td>".$linha["id_usuarios"]."</td>";
						echo "	<td>".$linha["nome"]."</td>";
						echo "	<td>".$linha["email"]."</td>";
						echo "	<td>".$linha["datanasc"]."</td>";
						echo "	<td>".$linha["cartao"]."</td>";
						echo "	<td>".$linha["cvv"]."</td>";
						echo "	<td>".$linha["senha"]."</td>";
						echo "  <br><br>";
						
						//atrav�s da imagem (bolinha vermelha) que � mostrada na tabela o c�digo � direcionado para dados.php
						echo "  <td><a href='fullmiumdados.php?cod=".$linha["id_usuarios"]."'><img src='editar.png' style='height:20px;width:20px'/></a></td>";
						
						//atraves da imagem (bolinha verde) que � mostrada na tabela o c�digo � direcionado para excluir.php 
						echo "  <td><a href='excluirfullmium.php?cod=".$linha["id_usuarios"]."'><img src='excluir.png' style='height:20px;width:20px'/></a></td>";
						
						echo "</tr>";
						echo "</tbody>";
					}
					echo "</table>";
				}else{
					echo "Nao existem clientes cadastrados!";
				}
				
			?>			
		
		<br><br>
		 
		 <button onclick = "document.location ='fullmicadastro.php'" > Inserir </button>
		<button onclick = "document.location ='cursos.html'" > Voltar </button>
	</body>
</html>