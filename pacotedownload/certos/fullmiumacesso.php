<?php
   session_start();

     

     if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
          header('Location:fullmilogin.php');
     }
     $logado= $_SESSION['email'];
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title> Pg11- Acesso fullmium</title>
    <link rel="stylesheet" type="text/css" href="fullmiumacessoestilo.css">
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



        <h1> Cursos Fullmium </h1>



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
				<img src="php.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">PHP</p>
					<p class="descricao">Linguagem de programação</p>
					<a href="https://youtu.be/F7KzJ7e6EAc" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="c.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">C</p>
					<p class="descricao">Linguagem de programação</p>
					<a href="https://youtu.be/FH7YrE0RjWE" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="cmais.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">C++</p>
					<p class="descricao">Linguagem de programação</p>
					<a href="https://youtu.be/5W9YsbqnX0U" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="phython.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">Phython</p>
					<p class="descricao">Linguagem de programação</p>
					<a href="https://youtu.be/S9uPNppGsGo" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="js.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">JavaScript</p>
					<p class="descricao">Linguagem de programação</p>
					<a href="https://youtu.be/BXqUH86F-kA" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="photoshop.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">Photoshop</p>
					<p class="descricao">Manipular software editor de imagem</p>
					<a href="https://youtu.be/apyGxxabcZ4" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="wp.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">WordPress</p>
					<p class="descricao">Manipulação de sistema de gestão</p>
					<a href="https://youtu.be/JPR4OK4c35Q" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="rc.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">Rede de Computadores</p>
					<p class="descricao">Manipulação de redes de computadores</p>
					<a href="https://youtu.be/QkMbqL8QD9w" class="btn-more">Acesse aqui</a>
				</div>
			</li>
			<li>
				<img src="config.jpg" alt="">
				<div class="conteudo">
					<p class="nome-secao">Certificado</p>
					<p class="descricao">Retire aqui seu certificado</p>
					<a href="certificadofullmium.php" class="btn-more">Acesse aqui</a>
				</div>
			</li>
                </li>
            </ul>
        </div>






    </main>

</body>
</html>