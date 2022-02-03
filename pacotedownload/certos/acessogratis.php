<?php
   session_start();

     

     if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
          header('Location:loginacessogratis.php');
     }
     $logado= $_SESSION['email'];
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title> Acesso gratis</title>
    <link rel="stylesheet" type="text/css" href="estiloacessogratis.css">
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


    <main>



        <h1> Cursos </h1>

        <br />


       <?php 
      echo "<p> Seja bem-vindo(a) $logado!</p>"
      ?>



        <br /> <br />

    

    <div id="box">
		<ul class="estilizacao">
			<li>
				<img src="algoritmos.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao"> Fundamentos da Informática</p>
					<p class="descricao">Assista quantas vezes quiser!</p>
					<a href="https://youtu.be/Ax5ohGrRv44" class="btn-more">Acesse aqui</a>
                   
              </div>
                 </li>
                    </ul>
				         </div>
        </main>

</body>
</html>