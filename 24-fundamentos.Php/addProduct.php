<?php
include 'connect.php';


$nomeProduto=$_POST['nomeProduto'];//nome que foi atribuido no formulario  (name) lembrando que aqui estou quardando um arquivo na variavel 
$precoProduto=$_POST['precoProduto'];

$sqlInsertCity="insert into produto (nomeProduto, precoProduto) values ('$nomeProduto', $precoProduto);";
mysqli_query($con, $sqlInsertCity); // sqlInsertCity --> so uma descricao da variavel 


header('location:viewall.php');

?>