<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title> Editar Premium </title>
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
// Nos comandos abaixo os valores estão sendo atribuidos nas variaveis e acordo com a resposta do if(isset($_GET["cod"]))
// Caso tenha sido digitada a bolinha verde para alteração de valores os dados serão carregados no form para serem alterados

			if(isset($_GET["cod"])){
				
				//ALTERAR faz o select para poder fazer a alteração dos valores através do código alt.php
				include('configPremium.php');			
				$sql = "SELECT * FROM cadastro WHERE idcadastro = ".$_GET["cod"];
				$result = $conexao->query($sql);

				if (mysqli_num_rows ($result)>0) {
					if($linha = $result->fetch_assoc()){
						$pagina = "alt.php"; 
						$idcadastro = $linha["idcadastro"];
						$nome = $linha["nome"];
						$email = $linha["email"];
						$datanasc = $linha["datanasc"];
						$cartao = $linha["cartao"];
						$cvv = $linha["cvv"];
						$senha = $linha["senha"];
					}
				}
			}else{
				
				//INSERIR faz a inclusão de valores na tabela atraves do código ins.php
				$pagina = "ins.php";
				$idcadastro = "";
				$nome = "";
				$email = "";
				$datanasc = "";
				$cartao = "";
				$cvv = "";
				$senha = "";
			}

// Note:
// O form foi criado através do comando echo, o que nos permite usar comandos HTML sem a necessidade de fechar o bloco de de programação PHP. 
// O <form action="'.$pagina. esta na realidade concatenando a ação do formulario com o conteudo da variavel $pagina que dependendo do if ... else
// executado anteriormente será $pagina = "alt.php" ou $pagina = "ins.php" 	

			echo '<form action="acessofuncionario.php" method="post">';

			

			echo '<input type="text" name="idcadastro" placeholder="ID Cadastro" value="'.$idcadastro.'">';


			echo '<br>';


			echo '<input type="text" name="nome" placeholder="Nome" value="'.$nome.'">';


			echo '<br>';


			echo '<input type="text" name="email" placeholder="E-mail" value="'.$email.'">';


			echo '<br>';


			echo '<input type="text" name="datanasc" placeholder="Data de Nascimento" value="'.$datanasc.'">';


			echo '<br>';


			echo '<input type="text" name="cartao" placeholder="Cartao" value="'.$cartao.'">';


			echo '<br>';


			echo '<input type="text" name="cvv" placeholder="CVV" value="'.$cvv.'">';


			echo '<br>';


			echo '<input type="text" name="senha" placeholder="Senha" value="'.$senha.'">';

			echo '<br>';
			
			 echo '<br>';
			 echo '<br>';

			 echo '<input class="inputSubmit" type="submit" name="submit" value="Enviar">';


			  echo '<a href="cursos.html"> <input class="inputSubmit" type="buttom"  name="voltar" value="Voltar"> </a>';

		
			
		?>
          		
	</body>
</html>