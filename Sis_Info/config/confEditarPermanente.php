<?php
session_start();


include_once("conexao.php");

$mat_id = filter_input(INPUT_POST, "idMatPermanente", FILTER_SANITIZE_NUMBER_INT);
$num_Ficha = filter_input(INPUT_POST, "num_Ficha", FILTER_SANITIZE_NUMBER_INT);
$num_Patrimonio = filter_input(INPUT_POST, "num_Patrimonio", FILTER_SANITIZE_NUMBER_INT);
$nome_Material = filter_input(INPUT_POST, "nome_Material", FILTER_SANITIZE_STRING);
$secaoMaterial = filter_input(INPUT_POST, "secaoMaterial", FILTER_SANITIZE_STRING);
$qnt_Material = filter_input(INPUT_POST, "qnt_Material", FILTER_SANITIZE_NUMBER_INT);



//transforma tudo em maiuscula para mandar para o banco

$nome_Material = mb_strtoupper($nome_Material,'UTF-8');
$secaoMaterial = mb_strtoupper($secaoMaterial,'UTF-8');



if($num_Ficha != "" && $num_Patrimonio != "" && $nome_Material != "" && $secaoMaterial != ""  && $qnt_Material != "" ){
    
    $result_Registro = "UPDATE material_Permanente SET num_ficha = '$num_Ficha', num_patrimonio='$num_Patrimonio', nome_material='$nome_Material', local_material='$secaoMaterial',qtd_material='$qnt_Material' WHERE id = '$mat_id'"; 
    $resultado_Registro = mysqli_query($conn, $result_Registro);
    
    
    if(mysqli_insert_id($conn)){
    
    echo("<script>
    alert('Maquina alterada com sucesso !');
    document.location.href = '../dashboard/pages/material/estoqueMaterial.php';
    </script>");

    }else{
        echo("<script>
        alert('Maquina alterada com sucesso !');
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