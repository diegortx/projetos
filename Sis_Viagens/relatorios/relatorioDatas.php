<?php

session_start();

include_once("../php/conexao.php");


$dataInicio = filter_input(INPUT_POST, "dataInicio", FILTER_SANITIZE_STRING);
$dataFim = filter_input(INPUT_POST, "dataFim", FILTER_SANITIZE_STRING);



//convertendo a data br para en e mandando o padrao en pro banco
function converteData($data){
    return (preg_match('/\//',$data)) ? implode('-', array_reverse(explode('/', $data))) : implode('/', array_reverse(explode('-', $data)));
};

$dataInicio = converteData($dataInicio);
$dataFim = converteData($dataFim);


$result_Registro = "SELECT b.baterias,a.nome_posto, r.nome,r.telefone,r.data_Saida,r.data_Retorno,r.cidade_Destino,t.nome_guerra FROM registradas r INNER JOIN baterias b ON r.bateria = b.cod_baterias INNER JOIN antiguidade a ON r.posto = a.cod_posto_grad INNER JOIN tbl_mil t ON r.inserido = t.cpf WHERE r.data_Saida  BETWEEN '$dataInicio' and '$dataFim' ORDER BY posto";


// $result_Registro = "SELECT * FROM registradas WHERE data_Saida BETWEEN '$dataInicio' and '$dataFim' ORDER BY posto";

$resultado_Registro = mysqli_query($conn, $result_Registro);
?>

<html>
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>

    <div id="d">
        <script language="javascript">function imprimir(text){
            text=document
            print(text)
        }
            </script>
    <div class="mt-4 mb-4 mr-3" align="right">        
    <form  >
       
    <input type="button" value="Imprimir" onClick="imprimir()"/>
    </form>
    </div>

    </div>
    <div class="container text-center">
        <h1>Lista por Datas</h1>

    </div>
    <div class="container text-center">    
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">SU</th>
                <th scope="col">Pst/Grad</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data de Saída</th>
                <th scope="col">Data de Retorno</th>
                <th scope="col">Cidade destino</th>
                <th scope="col">Inserido por</th>

            </tr>
        </thead>
            <?php while($dado = $resultado_Registro->fetch_array()){ ?>
            <tbody>
                
            
                <tr>
                
                <td><?php echo $dado["baterias"] ?></td>
                <td><?php echo $dado["nome_posto"] ?></td>
                <td><?php echo $dado["nome"] ?></td>
                <td><?php echo $dado["telefone"] ?></td>
                <!--Funcção que transfora a data recebida em data padrão brasileiro -->
                <td><?php echo date("d/m/Y", strtotime($dado["data_Saida"])); ?></td>
                <td><?php echo date("d/m/Y", strtotime($dado["data_Retorno"])); ?></td>
                <!-- -->
                <td><?php echo $dado["cidade_Destino"] ?></td> 
                <td><?php echo $dado["nome_guerra"]?></td>
                
                </tr>
            </tbody> 
              
            <?php  } ?>

        </table>
    </div>

    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
