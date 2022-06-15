<?php
include 'connect.php';

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$telefone=$_POST['telefone']; 
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro']; 
$rua=$_POST['rua'];


$sqlInsertCity="insert into Doador (nome,sobrenome,email,telefone,cidade,bairro,rua) values ( '$nome','$sobrenome','$email','$telefone','$cidade','$bairro','$rua');";
mysqli_query($con, $sqlInsertCity); // sqlInsertCity --> so uma descricao da variavel 
header('location:viewall.php');

?>
