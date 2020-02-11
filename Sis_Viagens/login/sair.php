<?php
    //inicia a sessão
    session_start();

    //apaga o id da sessão desativando
    unset($_SESSION['cpf']);

    //direciona para o index.php
    header("location: ../telaLogin.php")

    
?>
