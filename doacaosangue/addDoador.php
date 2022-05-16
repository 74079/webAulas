<?php
include 'connect.php';


$PrimeiroNome=$_POST['PrimeiroNome']; 
$UltimoNome=$_POST['UltimoNome'];

$email=$_POST['email'];
$telefone=$_POST['Telefone'];
$cidade=$_POST['Cidade'];
$Bairro=$_POST['Bairro'];

$Rua=$_POST['Rua'];
$sqlInsertCity="insert into produto (PrimeiroNome, UltimoNome, email, Telefone, Cidade, Bairro, rua) values ('$PrimeiroNome', $UltimoNome, '$email','$Telefone','$cidade','$Bairro','$Rua');";
mysqli_query($con, $sqlInsertCity);


header('location:viewall.php');

?>