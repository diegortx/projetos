<?php
session_start();


include_once("conexao.php");


$maq_nome = filter_input(INPUT_POST, "nomeMaquina", FILTER_SANITIZE_STRING);
$maq_sec = filter_input(INPUT_POST, "secaoMaquina", FILTER_SANITIZE_STRING);
$maq_user = filter_input(INPUT_POST, "usuarioMaquina", FILTER_SANITIZE_STRING);
$maq_tipo = filter_input(INPUT_POST, "tipo", FILTER_SANITIZE_STRING);
$maq_ip = filter_input(INPUT_POST, "ip", FILTER_SANITIZE_STRING);
$maq_mac = filter_input(INPUT_POST, "mac", FILTER_SANITIZE_STRING);



//transforma tudo em maiuscula para mandar para o banco
$maq_nome = mb_strtoupper($maq_nome,'UTF-8');
$maq_sec = mb_strtoupper($maq_sec,'UTF-8');
$maq_user = mb_strtoupper($maq_user,'UTF-8');
$maq_tipo = mb_strtoupper($maq_tipo,'UTF-8');

$maq_mac = mb_strtoupper($maq_mac,'UTF-8');

// echo "maq_nome: $maq_nome <br>";
// echo "maq_sec: $maq_sec <br>";
// echo "maq_user: $maq_user <br>";
// echo "maq_tipo:  $maq_tipo <br> ";
// echo "maq_ip: $maq_ip <br>";
// echo "maq_mac : $maq_mac <br>";


if($maq_nome != "" && $maq_sec != "" && $maq_user != "" && $maq_tipo != ""  && $maq_mac != "" ){
    
    $result_Registro = "UPDATE registromaquinas SET maq_nome = '$maq_nome', maq_secao='$maq_sec', maq_usuario='$maq_user', maq_tipo='$maq_tipo',maq_mac='$maq_mac' WHERE maq_ip = '$maq_ip'"; 
    $resultado_Registro = mysqli_query($conn, $result_Registro);
    
    
    if(mysqli_insert_id($conn)){
    
    echo("<script>
    alert('Maquina alterada com sucesso !');
    document.location.href = '../dashboard/pages/ipsEmUso.php';
    </script>");

    }else{
        echo("<script>
        alert('Maquina alterada com sucesso !');
        document.location.href = '../dashboard/pages/ipsEmUso.php';
        </script>");
    }

}
else{
    echo("<script>
    alert('Preencha todos os campos');
    document.location.href = '../dashboard/pages/ipsEmUso.php';
    </script>");
    
}


mysqli_close($conn);
?>