<?php
include 'connect.php';


$id = $_GET['idProduto'];

$sql="delete from produto where idProduto=$id;";
mysqli_query($con, $sql);


header('location:viewall.php');

?>