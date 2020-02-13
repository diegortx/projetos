<?php
session_start();


include_once("conexao.php");

$idOs = filter_input(INPUT_POST, "idOs", FILTER_SANITIZE_NUMBER_INT);
$os_prioridade = filter_input(INPUT_POST, "os_prioridade", FILTER_SANITIZE_STRING);
$os_militar = filter_input(INPUT_POST, "os_militar", FILTER_SANITIZE_STRING);
$os_secao = filter_input(INPUT_POST, "os_secao", FILTER_SANITIZE_STRING);
$os_descricao = filter_input(INPUT_POST, "os_descricao", FILTER_SANITIZE_STRING);
$os_patrimonio = filter_input(INPUT_POST, "os_patrimonio", FILTER_SANITIZE_STRING);
$os_ip = filter_input(INPUT_POST, "os_ip", FILTER_SANITIZE_STRING);
$os_tecnico = filter_input(INPUT_POST, "os_tecnico", FILTER_SANITIZE_STRING);
$os_status = filter_input(INPUT_POST, "os_status", FILTER_SANITIZE_STRING);

// echo("$idOs <br>");
// echo("$os_prioridade <br>");
// echo("$os_militar <br>");
// echo("$os_secao <br>");
// echo("$os_descricao <br>");
// echo("$os_patrimonio <br>");
// echo("$os_ip <br>");
// echo("$os_tecnico <br>");
// echo("$os_status <br>");



$result_Registro = "UPDATE tbl_os SET os_prioridade = '$os_prioridade',os_militar='$os_militar', os_secao='$os_secao', os_descricao='$os_descricao', os_ip='$os_ip', os_tecnico='$os_tecnico', os_status='$os_status', os_nrPatrimonio='$os_nrPatrimonio' WHERE id = '$idOs'"; 
$resultado_Registro = mysqli_query($conn, $result_Registro);

if($os_prioridade != "" && $os_militar != "" && $os_descricao != "" && $os_tecnico != ""){  
    
    
    if(mysqli_insert_id($conn)){    
    echo("<script>
    alert('Maquina alterada com sucesso !');
    document.location.href = '../dashboard/pages/os/fecharOS.php';
    </script>");

    }else{
        echo("<script>
        alert('Maquina alterada com sucesso   !');
        document.location.href = '../dashboard/pages/os/fecharOS.php';
        </script>");
    }

}
else{
    echo("<script>
    alert('Erro. Preencha todos os campos');
    document.location.href = '../dashboard/pages/os/fecharOS.php';
    </script>");
    
}


mysqli_close($conn);
?>