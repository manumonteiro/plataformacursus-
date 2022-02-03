<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title> Editar fullmium </title>
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

    <h1> Clientes Fullmium </h1>
		<?php 
// Nos comandos abaixo os valores est�o sendo atribuidos nas variaveis e acordo com a resposta do if(isset($_GET["cod"]))
// Caso tenha sido digitada a bolinha verde para altera��o de valores os dados ser�o carregados no form para serem alterados

			if(isset($_GET["cod"])){
				
				//ALTERAR faz o select para poder fazer a altera��o dos valores atrav�s do c�digo alt.php
				include('configFullmium.php');			
				$sql = "SELECT * FROM usuarios WHERE id_usuarios= ".$_GET["cod"];
				$result = $conexao->query($sql);

				if (mysqli_num_rows ($result)>0) {
					if($linha = $result->fetch_assoc()){
						$pagina = "altfullmium.php"; 
						$id_usuarios = $linha["id_usuarios"];
						$nome = $linha["nome"];
						$email = $linha["email"];
						$datanasc = $linha["datanasc"];
						$cartao = $linha["cartao"];
						$cvv = $linha["cvv"];
						$senha = $linha["senha"];
					}
				}
			}else{
				
				//INSERIR faz a inclus�o de valores na tabela atraves do c�digo ins.php
				$pagina = "insfullmium.php";
				$id_usuarios = "";
				$nome = "";
				$email = "";
				$datanasc = "";
				$cartao = "";
				$cvv = "";
				$senha = "";
			}

// Note:
// O form foi criado atrav�s do comando echo, o que nos permite usar comandos HTML sem a necessidade de fechar o bloco de de programa��o PHP. 
// O <form action="'.$pagina. esta na realidade concatenando a a��o do formulario com o conteudo da variavel $pagina que dependendo do if ... else
// executado anteriormente ser� $pagina = "alt.php" ou $pagina = "ins.php" 	

			echo '<form action="acessofuncionario.php" method="post">';

			

			echo '<input type="text" name="idc_usuarios" placeholder="ID Usuarios" value="'.$id_usuarios.'">';


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