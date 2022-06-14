<?php
include 'connect.php';


$nomeProduto=$_POST['nomeProduto'];
$precoProduto=$_POST['precoProduto'];

$sqlInsertCity="insert into produto (nomeProduto, precoProduto) values ('$nomeProduto', $precoProduto);";
mysqli_query($con, $sqlInsertCity);


header('location:viewall.php');

?>