<?php
include 'connect.php';
$sql="delete from reg where id='$_SESSION[id]'";
mysqli_query($con,$sql);
header('location:add_district.php');
?>