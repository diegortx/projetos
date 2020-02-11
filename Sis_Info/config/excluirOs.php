<?php
session_start();

include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
// $maq_ip = filter_input(INPUT_GET, 'maq_ip', FILTER_SANITIZE_NUMBER_INT);

// echo "id : $id <br>" ;
// echo "ip: $maq_ip";

$result_Registro = "UPDATE tbl_os SET os_status = 'Fechada' WHERE id = '$id'";
$resultado_Registro = mysqli_query($conn, $result_Registro); 

if($resultado_Registro){
    echo("<script>
    alert('OS fechada com sucesso!');
    document.location.href = '../dashboard/pages/os/fecharOS.php';
    </script>");
    mysqli_close($conn);

    }else{
        echo("<script>
        alert('Maquina não fechada Erro ao se conectar com o banco de dados !');
        document.location.href = '../dashboard/pages/os/fecharOS.php';
        </script>");
    }

mysqli_close($conn);
?>