<?php
    session_start(); //inicia a sessão
    $_SESSION = array(); //carregado o array de dados
    session_destroy(); //destroi todas as sessões iniciadas
    header('location: /2151/adm/login.php'); 
?>