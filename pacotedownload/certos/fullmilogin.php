<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>pg10-log full </title>
    <link rel="stylesheet" type="text/css" href="estilofullmilogin.css">
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

    <div class="login">
        <form action="verificFullmium.php" method="POST">
            <h1>Login-F </h1>
            <input type="text" name="email" placeholder="Email">
            <br /> <br />
            <input type="password" name="senha" placeholder="Senha">
            <br /> <br />
           <input type="submit"class="inputSubmit" name="submit" value="Enviar">
        </form>
    </div>


</body>
</html>