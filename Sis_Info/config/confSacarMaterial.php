<?php
session_start();


include_once("conexao.php");

$mat_id = filter_input(INPUT_POST, "idMaterialConsumo", FILTER_SANITIZE_NUMBER_INT);
$mat_Qnt = filter_input(INPUT_POST, "mat_Qnt", FILTER_SANITIZE_NUMBER_INT);
$mat_QntRetirada = filter_input(INPUT_POST, "mat_QntRetirada", FILTER_SANITIZE_NUMBER_INT);

if($mat_QntRetirada > $mat_Qnt){
    echo("<script>
    alert('Quantidade de saque maior que o permitido');
    document.location.href = 'sacarMaterial.php?id=$mat_id.php';
    </script>");

}else{

    $result_Registro = "UPDATE material_Consumo SET  mat_Qnt=(mat_Qnt - '$mat_QntRetirada') WHERE id = '$mat_id'"; 
    $resultado_Registro = mysqli_query($conn, $result_Registro);

    if($mat_QntRetirada != ""){  
    
    
    if(mysqli_insert_id($conn)){    
    echo("<script>
    alert('Produto retirado com sucesso!');
    document.location.href = '../dashboard/pages/material/sacarMaterial.php';
    </script>");

    }else{
        echo("<script>
        alert('Produto retirado com sucesso!');
        document.location.href = '../dashboard/pages/material/sacarMaterial.php';
        </script>");
    }

}
else{
    echo("<script>
    alert('Preencha todos os campos');
    document.location.href = 'sacarMaterial.php?id=$mat_id.php';
    </script>");
    
}


mysqli_close($conn);


}


?>