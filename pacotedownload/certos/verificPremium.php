<?php

    session_start();   /* iniciei uma sessão, e nela serão criadas as duas variaveis (email e senha- ficarao no segundo if */ 
   

   if(isset ($_POST['submit']) && !empty($_POST['email']) && !empty ($_POST['senha']))    /* aqui é uma verificação, se a pessoa possuir o email e senha no bd, entrara no site, se nao tiver variavel, retorna ao login*/
   {

   include_once('configPremium.php');    /* aqui, ele conecta com o arquivo do bd */

   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";      /* agora, ele verifica no bd se existe um email e senha igual o usuario escreveu */

   $result = $conexao->query($sql);          /* agora aqui ele vai la no banco de dados e executa a linha de cima */ 


  if(mysqli_num_rows ($result)<1){                                    /* foi criado esse if, para verificar o numero de linhas que o email e senha estarão. Se for menor que 1, vai mostrar que nao existe  */

    unset($_SESSION['email']);                       /* essas variaveis serao destruidas se nao existem no bd */
    unset($_SESSION['senha']);

  header('Location: cadastropremium.php');
  }
   

  else{

    $_SESSION['email']= $email;                       /* essas variaveis vieram para ca a partir do momento que a sessão foi inicializada; persistir infos */
    $_SESSION['senha']= $senha;

    header('Location: acessopremium.php');
  }

   }

   else{                                    /* se nao tiver a variavel, retorna p login */
     header('Location: cadastropremium.php');

   }



?>