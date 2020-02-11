
<?php
session_start();

include_once("conexao.php");


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_Registro = "UPDATE viaturasregistradas SET situacao = 0 WHERE id = $id ";

$resultado_Registro = mysqli_query($conn, $result_Registro);

if($resultado_Registro){
    echo("<script>
    alert('Viatura fechada com sucesso !');
    document.location.href = '../pages/dashboard/fecharViatura.php';
    </script>");

    }else{
        echo("<script>
        alert('Viatura não fechada Erro ao se conectar com o banco de dados !');
        document.location.href = '../pages/dashboard/fecharViatura.php';
        </script>");
    }


?>