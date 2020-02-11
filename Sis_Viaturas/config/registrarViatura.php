<?php
session_start();


include_once("conexao.php");


$inseridoPor = $_SESSION['cpf_mil'];

$motorista = filter_input(INPUT_POST, "seclectMotorista", FILTER_SANITIZE_NUMBER_INT);
$chViatura = filter_input(INPUT_POST, "chViatura", FILTER_SANITIZE_STRING);
$dataRetorno = filter_input(INPUT_POST, "dataRetorno", FILTER_SANITIZE_STRING);
$h_saida = filter_input(INPUT_POST, "h_saida", FILTER_SANITIZE_STRING);
$dataSaida = filter_input(INPUT_POST, "dataSaida", FILTER_SANITIZE_STRING);
$h_chegada = filter_input(INPUT_POST, "h_chegada", FILTER_SANITIZE_STRING);
$ebViatura = filter_input(INPUT_POST, "seclectViatura", FILTER_SANITIZE_NUMBER_INT);
$obsViatura = filter_input(INPUT_POST, "obsViatura", FILTER_SANITIZE_STRING);

//convertendo a data br para en e mandando o padrao en pro banco
function converteData($data){
    return (preg_match('/\//',$data)) ? implode('-', array_reverse(explode('/', $data))) : implode('/', array_reverse(explode('-', $data)));
 }
$dataRetorno = converteData($dataRetorno);
$dataSaida = converteData($dataSaida);


//transforma tudo em maiuscula para mandar para o banco
$chViatura = mb_strtoupper($chViatura,'UTF-8');
$obsViatura = mb_strtoupper($obsViatura,'UTF-8');
  
// echo "Motorista: $motorista <br>";
// echo "Chefe de viatura: $chViatura <br>";
// echo "data saida: $dataSaida <br>";
// echo "data retorno:  $dataRetorno <br> ";
// echo "eb viatura: $ebViatura <br>";
// echo "obs : $obsViatura <br>";
// echo "cpf Inserido : $inseridoPor ";


if($motorista != "" && $chViatura != "" && $dataRetorno != "" && $dataSaida != "" && $ebViatura != "" && $obsViatura != "" ){

$result_Registro = "INSERT INTO viaturasregistradas (situacao, motorista, chViatura, data_retorno, data_saida, ebViatura, obsViatura,abertoPor,h_saida, h_chegada) VALUES ('1','$motorista','$chViatura','$dataRetorno','$dataSaida','$ebViatura','$obsViatura','$inseridoPor','$h_saida','$h_chegada')";

$resultado_Registro = mysqli_query($conn, $result_Registro);

if(mysqli_insert_id($conn)){
    echo("<script>
    alert('Registrado com sucesso !');
    document.location.href = '../pages/dashboard/form/index.php';
    </script>");

    }else{
        echo("<script>
        alert('Não registrado Erro ao se conectar com o banco de dados !');
        document.location.href = '../pages/dashboard/form/index.php';
        </script>");
    }

}else{
    echo("<script>
    alert('Preencha todos os campos');
    document.location.href = '../pages/dashboard/form/index.php';
    </script>");
    
}
?>