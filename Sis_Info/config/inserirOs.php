<?php
session_start();

include_once("conexao.php");

$os_prioridade = filter_input(INPUT_POST, "os_prioridade", FILTER_SANITIZE_STRING);
$os_usuario = filter_input(INPUT_POST, "os_usuario", FILTER_SANITIZE_STRING);
$os_secao = filter_input(INPUT_POST, "os_secao", FILTER_SANITIZE_STRING);
$os_descricao = filter_input(INPUT_POST, "os_descricao", FILTER_SANITIZE_STRING);
$os_nrPatrimonio = filter_input(INPUT_POST, "os_nrPatrimonio", FILTER_SANITIZE_STRING);
$os_ip = filter_input(INPUT_POST, "os_ip", FILTER_SANITIZE_STRING);
$os_tecnico = filter_input(INPUT_POST, "os_tecnico", FILTER_SANITIZE_STRING);
$os_status = filter_input(INPUT_POST, "os_status", FILTER_SANITIZE_STRING);


// echo("$num_Ficha <br>");
// echo("$num_Patrimonio <br>");
// echo("$secaoMaterial <br>");
// echo("$qnt_Material <br>");



if($os_prioridade != "" && $os_usuario != "" && $os_secao != "" && $os_descricao != "" && $os_tecnico != ""&& $os_status != ""){

    $result_Registro = "INSERT INTO tbl_os (os_prioridade,os_militar,os_secao,os_descricao, os_ip,os_tecnico,os_status,os_nrPatrimonio) VALUES ('$os_prioridade','$os_usuario','$os_secao','$os_descricao','$os_ip','$os_tecnico','$os_status','$os_nrPatrimonio')";
    $resultado_Registro = mysqli_query($conn, $result_Registro); 
    
    
    if(mysqli_insert_id($conn)){    
           
        echo("<script>
        alert('OS aberta com sucesso');
        document.location.href = '../dashboard/pages/os/registrarOS.php';
        </script>");
    
        }else{
            echo("<script>
            alert('Não registrado Erro ao se conectar com o banco de dados !');
            document.location.href = '../dashboard/pages/os/registrarOS.php';
            </script>");
        }
    
    }
    else{
        echo("<script>
        alert('Preencha todos os campos');
        document.location.href = '../dashboard/pages/os/registrarOS.php';
        </script>");
        
    }
    
    
    mysqli_close($conn);
?>

