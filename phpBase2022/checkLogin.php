<?php

    if(!isset($_SESSION['id'])){// verifica se a variavel sessao esta criada e caso nao esteja ele direciona para a pagina login ou caso nao esteja atribuida a sessao
        header('location:login.php');
    }

?>