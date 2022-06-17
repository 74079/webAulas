<?php
include 'connect.php';


$id = $_GET['idDoador'];

$sql="delete from Doador where idDoador=$id;";
mysqli_query($con, $sql);


header('location:cadastro.php');
?>