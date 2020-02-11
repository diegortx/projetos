<?php
session_start();

include_once("conexao.php");

$num_Ficha = filter_input(INPUT_POST, "num_Ficha", FILTER_SANITIZE_NUMBER_INT);
$num_Patrimonio = filter_input(INPUT_POST, "num_Patrimonio", FILTER_SANITIZE_NUMBER_INT);
$nome_Material = filter_input(INPUT_POST, "nome_Material", FILTER_SANITIZE_STRING);
$secaoMaterial = filter_input(INPUT_POST, "secaoMaterial", FILTER_SANITIZE_STRING);
$qnt_Material = filter_input(INPUT_POST, "qnt_Material", FILTER_SANITIZE_NUMBER_INT);

// echo("$num_Ficha <br>");
// echo("$num_Patrimonio <br>");
// echo("$secaoMaterial <br>");
// echo("$qnt_Material <br>");



if($num_Ficha != "" && $num_Patrimonio != "" && $secaoMaterial != "" && $qnt_Material != "" ){

    $result_Registro = "INSERT INTO material_Permanente (num_ficha, num_patrimonio, nome_material,local_material, qtd_material) VALUES ('$num_Ficha','$num_Patrimonio','$nome_Material','$secaoMaterial','$qnt_Material')";
    $resultado_Registro = mysqli_query($conn, $result_Registro); 
    
    
    if(mysqli_insert_id($conn)){    
           
        echo("<script>
        alert('Material registrado com sucesso !');
        document.location.href = '../dashboard/pages/material/registrarMaterialPermanente.php';
        </script>");
    
        }else{
            echo("<script>
            alert('Não registrado Erro ao se conectar com o banco de dados !');
            document.location.href = '../dashboard/pages/material/registrarMaterialPermanente.php';
            </script>");
        }
    
    }
    else{
        echo("<script>
        alert('Preencha todos os campos');
        document.location.href = '../dashboard/pages/material/registrarMaterialPermanente.php';
        </script>");
        
    }
    
    
    mysqli_close($conn);
?>

