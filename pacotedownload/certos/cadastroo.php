﻿<?php

if(isset ($_POST['submit']))

{

include_once('configcadastro.php');


     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $datanasc = $_POST['datanasc'];
     $senha = $_POST['senha'];

      

      $result = mysqli_query($conexao, "INSERT INTO usuarios (nome,email,datanasc,senha) values ('$nome','$email','$datanasc','$senha')");

      header('Location:loginacessogratis.php');
}
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Cadastre-se</title>
    <link rel="stylesheet" type="text/css" href="estilocadastro.css">
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

    <main>

        <div class="box">
            <form action="cadastroo.php" method='POST'>
                <fieldset>
                    <legend> <b> Cadastre-se para acessar a um curso mensal</b> </legend>


                    <br />



                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required />
                        <label for="nome" class="labelInput">Nome completo </label>
                    </div>

                    <br /> <br />

                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required />
                        <label for="email" class="labelInput">E-mail </label>
                    </div>

                    <br /> <br />


                    <label for="datanasc">Data de nascimento </label>
                    <input type="date" name="datanasc" id="datanasc" required />


                    <br /> <br />

                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required />
                        <label for="senha" class="labelInput">Senha </label>
                    </div>

                    <br /> <br />

                    <input type="submit" name="submit" id="submit" /> 

                      <br /> <br />

                    <a href="loginacessogratis.php"> Já tem uma conta? Acesse aqui! </a>


                </fieldset>

            </form>
        </div>
    </main>
</body>
</html>