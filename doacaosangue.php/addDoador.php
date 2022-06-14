<?php
include 'connect.php';

$Nome=$_POST['Nome'];//nome que foi atribuido no formulario  (name) lembrando que aqui estou quardando um arquivo na variavel 
$sobrenome=$_POST['sobrenome'];//nome que foi atribuido no formulario  (name) lembrando que aqui estou quardando um arquivo na variavel 
$Email=$_POST['Email'];//nome que foi atribuido no formulario  (name) lembrando que aqui estou quardando um arquivo na variavel 
$Telefone=$_POST['Telefone'];//nome que foi atribuido no formulario  (name) lembrando que aqui estou quardando um arquivo na variavel 
$Cidade=$_POST['Cidade'];//nome que foi atribuido no formulario  (name) lembrando que aqui estou quardando um arquivo na variavel 
$Bairro=$_POST['Bairro'];//nome que foi atribuido no formulario  (name) lembrando que aqui estou quardando um arquivo na variavel 
$Rua=$_POST['Rua'];//nome que foi atribuido no formulario  (name) lembrando que aqui estou quardando um arquivo na variavel 


$sqlInsertCity="insert into Doador (Nome,sobrenome,Email,Telefone,Cidade,Bairro,Rua) values ( '$Nome','$sobrenome','$Email','$Telefone','$Cidade','$Bairro','$Rua');";
mysqli_query($con, $sqlInsertCity); // sqlInsertCity --> so uma descricao da variavel 

?>
