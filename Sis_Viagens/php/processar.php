<?php
session_start();


include_once("conexao.php");

$bateria = filter_input(INPUT_POST, "selectBia", FILTER_SANITIZE_STRING);
$posto = filter_input(INPUT_POST, "selectPosto", FILTER_SANITIZE_STRING);
$nomeGuerra = filter_input(INPUT_POST, "nomeGuerra", FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, "numTelefone", FILTER_SANITIZE_NUMBER_INT);
$dataSaida = filter_input(INPUT_POST, "dataSaida", FILTER_SANITIZE_STRING);
$dataRetorno = filter_input(INPUT_POST, "dataRetorno", FILTER_SANITIZE_STRING);
$cidadeDestino = filter_input(INPUT_POST, "cidadeDestino", FILTER_SANITIZE_STRING);
$inseridoPor = $_SESSION['cpf'];

//transforma tudo em maiuscula para mandar para o banco
$nomeGuerra = mb_strtoupper($nomeGuerra,'UTF-8');
$cidadeDestino = mb_strtoupper($cidadeDestino,'UTF-8');

function converteData($data){
    return (preg_match('/\//',$data)) ? implode('-', array_reverse(explode('/', $data))) : implode('/', array_reverse(explode('-', $data)));
 }
$dataRetorno = converteData($dataRetorno);
$dataSaida = converteData($dataSaida);


  


    // echo "Bateria: $bateria <br>";
    // echo "posto: $posto <br>";
    // echo "Nome: $nomeGuerra <br>";
    // echo "telefone: $telefone <br>";
    // echo "Data de saida: $dataSaida <br>";
    // echo "Data de Retorno: $dataRetorno <br>";
    // echo "Cidade destino: $cidadeDestino <br>";

if($bateria != "" && $posto != "" && $nomeGuerra != "" && $telefone != "" && $dataSaida != "" && $dataRetorno != "" && $cidadeDestino != ""){

$result_Registro = "INSERT INTO registradas (bateria, posto, nome, telefone, data_Saida, data_Retorno, cidade_Destino,inserido) VALUES ('$bateria','$posto','$nomeGuerra','$telefone', '$dataSaida', '$dataRetorno', '$cidadeDestino','$inseridoPor')";

$resultado_Registro = mysqli_query($conn, $result_Registro);

if(mysqli_insert_id($conn)){
    echo("<script>
    alert('Registrado com sucesso !');
    document.location.href = '../login/registrar.php';
    </script>");

}else{
    echo("Erro ao salvar no banco de dados!");
}

}else{
    echo("<script>
    alert('Preencha todos os campos');
    document.location.href = '../login/registrar.php';
    </script>");
    
}


?>