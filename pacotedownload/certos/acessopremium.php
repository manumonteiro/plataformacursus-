<?php
   session_start();

     if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
          header('Location:loginpremium.php');
     }
     $logado= $_SESSION['email'];
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Acesso premium</title>
    <link rel="stylesheet" type="text/css" href="estiloacessopremium.css">
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



        <h1> Cursos Premium </h1>



        <br /> <br />

        <div id="box">
		<ul class="estilizacao">
		<li>
				<img src="algoritmos.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">Algoritmos</p>
					<p class="descricao">Base da programação</p>
					<a href="https://youtu.be/8mei6uVttho" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="html5.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">HTML5</p>
					<p class="descricao">Linguagem de marcação</p>
					<a href="https://youtu.be/epDCjksKMok" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="css3.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">CSS3</p>
					<p class="descricao">Linguagem de estilização</p>
					<a href="https://youtu.be/Ejkb_YpuHWs" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="java.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">Java</p>
					<p class="descricao">Linguagem de programação</p>
					<a href="https://youtu.be/sTX0UEplF54" class="btn-more">Acesse aqui</a>
				</div>
				<li>
				<img src="sql.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">MySQL</p>
					<p class="descricao">Manipulação de dados</p>
					<a href="https://youtu.be/Ofktsne-utM" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="config.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">Certificado</p>
					<p class="descricao">Retire aqui seu certificado</p>
					<a href="certificadopremium.php" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			</li>
		</ul>
	</div>






    </main>

</body>
</html>