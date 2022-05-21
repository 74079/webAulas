<?php
incluir 'conectar.php';


$nomePessoa=$_POST['nomePessoa'];
$emailPessoa=$_POST['emailPessoa'];
$idadePessoa=$_POST['Pessoa idade'];

$sql="insira em pessoa (nomePessoa, e-mailPessoa,idadePessoa) 
valores ('$nomePessoa', '$emailPessoa', $idadePessoa);";
mysqli_query ($con, $sql);


cabeçalho ('localização:viewall_pessoa.php');

?> 