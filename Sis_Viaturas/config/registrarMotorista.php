<?php
session_start();


include_once("conexao.php");
$inseridoPor = $_SESSION['cpf_mil'];

$cod_posto_grad = filter_input(INPUT_POST, "seclectPosto", FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, "nomeGuerra", FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
$cpfMil = filter_input(INPUT_POST, "motCpf", FILTER_SANITIZE_STRING);
$categoriaCNH = filter_input(INPUT_POST, "seclectCNH", FILTER_SANITIZE_STRING);



//transforma tudo em maiuscula para mandar para o banco
$nome = mb_strtoupper($nome,'UTF-8');

// echo "Motorista: $motorista <br>";
// echo "Chefe de viatura: $chViatura <br>";
// echo "data saida: $dataSaida <br>";
// echo "data retorno:  $dataRetorno <br> ";
// echo "eb viatura: $ebViatura <br>";
// echo "obs : $obsViatura <br>";
// echo "cpf Inserido : $inseridoPor ";


if($cod_posto_grad != "" && $nome != "" && $senha != "" && $cpfMil != "" && $categoriaCNH != "" ){

$result_Registro = "INSERT INTO usuarios (cod_posto_grad,nome, senha, nivel_acesso, cpf_mil, categoria) VALUES ('$cod_posto_grad','$nome','$senha','1','$cpfMil','$categoriaCNH')";

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