<?php

    session_start();   /* iniciei uma sess�o, e nela ser�o criadas as duas variaveis (email e senha- ficarao no segundo if */ 
   

   if($_POST['email']== "funcionario.cursos@gmail.com" and $_POST['senha']== "123")  /* aqui � uma verifica��o, se a pessoa possuir o email e senha no bd, entrara no site, se nao tiver variavel, retorna ao login*/
   {

   
   $email = $_POST['email'];
   $senha = $_POST['senha'];

 

  header('Location: acessofuncionario.php');
  }
   

  else{

     header('Location: cursos.html');

   }



?>