<?php
include_once("../../../config/conexao.php");


$result_Registro = "SELECT v.motorista,v.chViatura,v.data_saida,v.data_retorno,v.ebViatura,v.obsViatura, a.nome_posto, u.nome FROM viaturasregistradas v INNER JOIN usuarios u ON v.abertoPor = u.cpf_mil INNER JOIN antiguidade a ON u.cod_posto_grad = a.cod_posto_grad WHERE v.situacao = 0 ";


$dataInicio = filter_input(INPUT_POST, "data_inicio", FILTER_SANITIZE_STRING);
$dataFim = filter_input(INPUT_POST, "data_retorno", FILTER_SANITIZE_STRING);

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
       
    <input class="btn btn-success" type="button" value="Imprimir" onClick="imprimir()"/>
    </form>
    </div>

    </div>
    <div class="container text-center">
        <h1>Lista de todas viaturas abertas</h1>

    </div>
    <div class="container text-center">    
                    <table class="table table-bordered">
                    <thead class="thead-dark text-center">
                    <tr>
                    <th scope="col">Posto/Grad</th>
                    <th scope="col">Motorista</th>
                    <th scope="col">Chefe Viatura </th>
                    <th scope="col">Data da Saída</th>
                    <th scope="col">Data de Retorno</th>
                    <th scope="col">Nome Viatura</th>
                    <th scope="col">Viatura EB</th>
                    <th scope="col">Placa Viatura</th>
                    <th scope="col">Destino/Obs</th>
                    
                    
                    
                    </tr>
                    </thead>
                    <?php 
                    
                    
                    $result_Registro = "SELECT a.nome_posto, u.nome,v.chViatura,v.data_saida,v.data_retorno,via.viatura_nome,via.viatura_eb,via.viatura_placa,v.obsViatura, a.nome_posto, u.nome, v.id FROM viaturasregistradas v INNER JOIN usuarios u ON u.id = v.motorista INNER JOIN antiguidade a ON u.cod_posto_grad = a.cod_posto_grad INNER JOIN viatura via ON via.id = v.ebViatura WHERE v.situacao = 0 ";

                    $resultado_Registro = mysqli_query($conn, $result_Registro);
                    
                    while($dado = $resultado_Registro->fetch_array()){ ?>
                    <?php $idViatura = $dado["id"]; ?>
                    <tbody class="text-center">
                    <tr>
                    <td><?php echo $dado["nome_posto"] ?></td>
                    <td><?php echo $dado["nome"] ?></td>
                    <td><?php echo $dado["chViatura"] ?></td>
                    <td><?php echo date("d/m/Y", strtotime($dado["data_saida"])); ?></td>
                    <td><?php echo date("d/m/Y", strtotime($dado["data_retorno"])); ?></td>      
                    <td><?php echo $dado["viatura_nome"] ?></td>
                    <td><?php echo $dado["viatura_eb"] ?></td>
                    <td><?php echo $dado["viatura_placa"] ?></td>
                    <td><?php echo $dado["obsViatura"] ?></td>
                    
                    
                    

                    </tr>
                    </tbody> 

                    <?php  } ?>

                    </table>
                    </div>

    </body>
    
</html>