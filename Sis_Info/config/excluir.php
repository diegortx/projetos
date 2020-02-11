<?php
session_start();

include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
// $maq_ip = filter_input(INPUT_GET, 'maq_ip', FILTER_SANITIZE_NUMBER_INT);

// echo "id : $id <br>" ;
// echo "ip: $maq_ip";

$result_Registro = "SELECT  id,maq_nome, maq_secao, maq_usuario, maq_tipo,maq_ip, maq_mac FROM registromaquinas WHERE id= '$id' ";
$resultado_Registro = mysqli_query($conn, $result_Registro); 

while($dado = $resultado_Registro->fetch_array()){
    $idMaquina = $dado["id"];
    $ipMaquina = $dado["maq_ip"];
}

// echo "$idMaquina <br>";
// echo "$ipMaquina";

$result_Registro = "UPDATE tbl_ip SET ip_status = 0 WHERE ip_num= '$ipMaquina' ";
$resultado_Registro = mysqli_query($conn, $result_Registro);

$result_Registro2 = "DELETE FROM registromaquinas WHERE id = '$idMaquina' ";
$resultado_Registro2 = mysqli_query($conn, $result_Registro2);


if($resultado_Registro){
    echo("<script>
    alert('Maquina excluida com sucesso !');
    document.location.href = '../dashboard/pages/ipsEmUso.php';
    </script>");
    mysqli_close($conn);

    }else{
        echo("<script>
        alert('Maquina não fechada Erro ao se conectar com o banco de dados !');
        document.location.href = '../dashboard/pages/ipsEmUso.php';
        </script>");
    }

mysqli_close($conn);
?>