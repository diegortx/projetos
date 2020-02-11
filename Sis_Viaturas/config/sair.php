<?php
    //inicia a sessão
    session_start();

    //apaga o id da sessão desativando
    unset($_SESSION['cpf_mil']);

    //direciona para o index.php
    header("location: ../login.php")

    
?>
