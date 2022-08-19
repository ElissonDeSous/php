<?php
session_start();
$_SESSION['autenticado'];


$usuario_autenticado = false;


// logins registrados para meu site de forma hard code
$Usuarios_relacao = array(
    array('Email'=> 'elissonslayer@gmail.com', 'senha'=> '123456'),
    array('Email'=> 'Usuario123@gmail.com', 'senha'=> '1234'),
);

// veirficação se um dado e igual a outro, nesse caso se o dados do formulario e igual aos dados do logins registrado,usar foreach
foreach($Usuarios_relacao as $Usuario)
{
      if($Usuario['Email'] ==$_POST ['Email'] && $Usuario['senha'] == $_POST ['Senha'] )
      {
          $usuario_autenticado = true;
      }
      if($usuario_autenticado == true)
      {
        echo('Usuario autenticado');
        $_SESSION  ['autenticado'] = 'Sim';
        header('location:home.php');
      }else{
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'Nao';
      }
}
/*
 print_r($_GET);

 echo('<br>');
 echo $_GET ['Email'];
 echo('<br>');
 echo $_GET ['Senha'];
 

print_r($_POST);

 echo('<br>');
 echo $_POST ['Email'];
 echo('<br>');
 echo $_POST ['Senha'];
?>
*/
?>