<?php
   
  
   session_start();

   if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        header('Location:fullmiumacesso.php');
   }
   $logado= $_SESSION['email'];

?>


<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title> Certificado fullmium</title>

    <link rel="stylesheet" type="text/css" href="estilofullmium.css">

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
                      <br /> <br /> <br />

                      <h1> Certificado </h1>
                      <br /> <br />
                         

                      <p> A plataforma online Cursus certifica que <?php echo " $logado" ?>

                      <p> concluiu todos os cursos Fullmium disponibilizados  </p>

                      


                    



                  </main>
</body>
</html>