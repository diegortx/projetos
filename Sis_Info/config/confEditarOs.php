<?php
session_start();


include_once("conexao.php");

$mat_id = filter_input(INPUT_POST, "idMaterialConsumo", FILTER_SANITIZE_NUMBER_INT);
$mat_Nome = filter_input(INPUT_POST, "mat_Nome", FILTER_SANITIZE_STRING);
$mat_Cad = filter_input(INPUT_POST, "mat_Cad", FILTER_SANITIZE_NUMBER_INT);
$mat_Qnt = filter_input(INPUT_POST, "mat_Qnt", FILTER_SANITIZE_NUMBER_INT);
$mat_Secao = filter_input(INPUT_POST, "mat_Secao", FILTER_SANITIZE_STRING);



//transforma tudo em maiuscula para mandar para o banco

$mat_Nome = mb_strtoupper($mat_Nome,'UTF-8');
$mat_Secao = mb_strtoupper($mat_Secao,'UTF-8');

// echo("$mat_id <br>");
// echo("$mat_Nome <br>");
// echo("$mat_Qnt <br>");
// echo("$mat_Secao <br>");


$result_Registro = "UPDATE material_Consumo SET mat_Nome = '$mat_Nome',mat_Cad='$mat_Cad', mat_Qnt='$mat_Qnt', mat_Secao='$mat_Secao' WHERE id = '$mat_id'"; 
$resultado_Registro = mysqli_query($conn, $result_Registro);

if($mat_Nome != "" && $mat_Cad != "" && $mat_Qnt != "" && $mat_Secao != ""){  
    
    
    if(mysqli_insert_id($conn)){    
    echo("<script>
    alert('Maquina alterada com sucesso !');
    document.location.href = '../dashboard/pages/material/estoqueMaterial.php';
    </script>");

    }else{
        echo("<script>
        alert('Maquina alterada com sucesso   !');
        document.location.href = '../dashboard/pages/material/estoqueMaterial.php';
        </script>");
    }

}
else{
    echo("<script>
    alert('Preencha todos os campos');
    document.location.href = '../dashboard/pages/material/estoqueMaterial.php';
    </script>");
    
}


mysqli_close($conn);
?>