<?php

session_start();// exclui essa variavel sessao com esse id do usuario essa parrte de logout ou seja quando clica nnele ele direciona parapagina de login e apaga as coisas do login

unset($_SESSION['id']);

header('location:editarDoador.php');

?>