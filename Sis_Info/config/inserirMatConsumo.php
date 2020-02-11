<?php
session_start();

include_once("conexao.php");

$nome_Material = filter_input(INPUT_POST, "nome_Material", FILTER_SANITIZE_STRING);
$cad_Materia = filter_input(INPUT_POST, "cad_Materia", FILTER_SANITIZE_NUMBER_INT);
$qnt_Material = filter_input(INPUT_POST, "qnt_Material", FILTER_SANITIZE_NUMBER_INT);
$secaoMaterial = filter_input(INPUT_POST, "secaoMaterial", FILTER_SANITIZE_STRING);

// echo("$num_Ficha <br>");
// echo("$num_Patrimonio <br>");
// echo("$secaoMaterial <br>");
// echo("$qnt_Material <br>");



if($nome_Material != "" && $cad_Materia != "" && $qnt_Material != "" && $secaoMaterial != "" ){

    $result_Registro = "INSERT INTO material_Consumo (mat_Nome,mat_Cad, mat_Qnt, mat_Secao) VALUES ('$nome_Material','$cad_Materia','$qnt_Material','$secaoMaterial')";
    $resultado_Registro = mysqli_query($conn, $result_Registro); 
    
    
    if(mysqli_insert_id($conn)){    
           
        echo("<script>
        alert('Material registrado com sucesso !');
        document.location.href = '../dashboard/pages/material/registrarMaterialConsumo.php';
        </script>");
    
        }else{
            echo("<script>
            alert('Não registrado Erro ao se conectar com o banco de dados !');
            document.location.href = '../dashboard/pages/material/registrarMaterialConsumo.php';
            </script>");
        }
    
    }
    else{
        echo("<script>
        alert('Preencha todos os campos');
        document.location.href = '../dashboard/pages/material/registrarMaterialConsumo.php';
        </script>");
        
    }
    
    
    mysqli_close($conn);
?>

