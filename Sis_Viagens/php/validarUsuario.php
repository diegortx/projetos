<?php

include_once("conexao.php");
// $u = new Usuario;

session_start();

$validCPF = $_SESSION['cpf'];



$result_Registro = "SELECT nivel_acesso FROM tbl_mil WHERE cpf = $validCPF ";

$resultado = mysqli_query($conn, $result_Registro);

while($dado = $resultado->fetch_array()){
    
    if($dado["nivel_acesso"] == 1){
    
    echo  '<script>window.location.href = "../login/painelRelatorio.php "</script>';
    
    // echo '<center><script>alert("O usuario AUTORIZADO !");</script></center>';
    
}else{
    echo '<center><script>alert("O usuario NÃO AUTORIZADO !");</script></center>';
    
    echo  '<script>window.location.href = "../login/registrar.php "</script>';
    
}

}
?>