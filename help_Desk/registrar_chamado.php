<?php
echo('<pre>');
   print_r($_POST);
echo('</pre>');
// montando o texto
$titulo = str_replace ('#','-',$_POST['titulo']);
$categoria = str_replace  ('#','-',$_POST['categoria']);
$descricao = str_replace ( '#','-',$_POST['descricao']);

$texto = $_POST['titulo'] .'#'. $_POST['categoria'] . '#'. $_POST['descricao']. PHP_EOL;
 echo('<br>');

 // abrindo arquivo
$arquivo = fopen('arquivo.hd','a');
// escrevendo texto
fwrite($arquivo,$texto);
//fechando arquivo
 fclose($arquivo);

 header('location: abrir_chamado.php')
?>