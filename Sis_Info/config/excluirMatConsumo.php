<?php
session_start();

include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
// $maq_ip = filter_input(INPUT_GET, 'maq_ip', FILTER_SANITIZE_NUMBER_INT);

// echo "id : $id <br>" ;
// echo "ip: $maq_ip";

$result_Registro = "DELETE FROM material_Consumo WHERE id = '$id' ";
$resultado_Registro = mysqli_query($conn, $result_Registro); 

if($resultado_Registro){
    echo("<script>
    alert('Material Consumo excluido com sucesso !');
    document.location.href = '../dashboard/pages/material/estoqueMaterial.php';
    </script>");
    mysqli_close($conn);

    }else{
        echo("<script>
        alert('Maquina não fechada Erro ao se conectar com o banco de dados !');
        document.location.href = '../dashboard/pages/material/estoqueMaterial.php';
        </script>");
    }

mysqli_close($conn);
?>