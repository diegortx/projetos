<?php
    //inicia a sessão
    session_start();

    //apaga o id da sessão desativando
    unset($_SESSION['usr_cpf']);

    //direciona para o index.php
    header("location: ../login.php")

    
?>
