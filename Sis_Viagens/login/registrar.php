<?php
//inicia a sessão pelo id
session_start();

include_once("../php/conexao.php");

//verifica se a seção com id esta criada para validar o acesso 
$cpfMil = $_SESSION['cpf'];


$result_Registro = "SELECT nome_guerra FROM tbl_mil WHERE cpf='$cpfMil'";

$resultado_Registro = mysqli_query($conn, $result_Registro); 

while($dado = $resultado_Registro->fetch_array()){
  $nomeMil = $dado["nome_guerra"];
  };


if(!isset($_SESSION['cpf'])){
	header("location: ../telaLogin.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
        <!-- Vendor CSS-->
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">   

    <title>Sistema de Viagens</title>
  </head>
  <body id="teste">
      

    <div class="container mt-4">
      <div class="card text-center">
        <div class="card-header mt-3">
              <header class="row"  style="float: right;margin-right: 20px;">
                <a href="../login/sair.php" class="btn btn-danger ">Sair</a>
              </header>
          <img src="../img/logo14gac.jpg" alt="">
          <div class="card-row">
            <h4 align="right">Relatórios</h4>
          <a href="../php/validarUsuario.php"><img src="../img/consultaRelatorio.jpg" alt="Imagem Relatorio" align="right"/></a>
        </div>
                      <p class="h2"> Sistema de Registro de Viagens </p>
                    </div>
                    <div class="card-body mb-3">
                      <h3 class="card-title ">Registro da Viagem</h3>
                      <p class="card-text">Sistema de registro de viagens para militares do 14º GAC, preencha os dados abaixo corretamente.</p><br><br>

                      <form method="POST" action="../php/processar.php">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputEstado">Bateria</label>
                                <select id="inputEstado" name="selectBia" class="form-control">
                                <option selected>Bateria...</option>
                                  <option value="1">EM</option>
                                  <option value="2">CFGS</option>
                                  <option value="3">BC</option>
                                  <option value="4">1ª Bia O</option>
                                  <option value="5">2ª Bia O</option>
                                  
                                </select>
                              </div>
                            <div class="form-group col-md-2">
                                <label for="inputEstado">Posto/Graduação</label>
                                <select id="inputEstado" name="selectPosto" class="form-control">
                                  <option selected>Escolha...</option>
                                  <option value="1">Coronel</option>
                                  <option value="2">Ten Coronel</option>
                                  <option value="3">Major</option>
                                  <option value="4">Capitão</option>
                                  <option value="5">Tenente</option>
                                  <option value="6">Aspirante</option>
                                  <option value="7">Sub Ten</option>
                                  <option value="8">1º Sargento</option>
                                  <option value="9">2º Sargento</option>
                                  <option value="10">3º Sargento</option>
                                  <option value="11">Cb</option> 
                                  <option value="12">Sd</option> 
                                </select>
                              </div>
                          <div class="form-group col-md-4">
                            <label for="inputText">Nome de Guerra</label>
                            <input type="text" class="form-control maiuscula"id="nomeGuerra" name="nomeGuerra" placeholder="Exemplo: GUERRA ou BRASIL ou SILVA ">
                          </div>

                          <div class="form-group col-md-4">
                              <label for="inputText">Telefone para Contato</label>
                              <input type="text" class="form-control" id="numTelefone"  name="numTelefone" placeholder="Exemplo: (35) 9 9999 9999">
                            </div>
                         
                        </div>

                        <h3 class="card-title">Informações do deslocamento</h3>

                        

                        <div class="row justify-content-center">
                            <div class="col-sm-4 ">
                              <div class="card h-auto d-inline-block" >
                                <div class="card-body">
                                  <!-- <h5 class="card-title">Data de Saída</h5>

                                  <p class="card-text">Escolha a data de saída <br> Se nao preenchar automatica coloque YYYY/mm/dd</p>
                                  <input type="date" name="dataSaida"> -->
                                  <h4>Data de saida</h4>
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DATA DA SAIDA" name="dataSaida">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>        
                                </div>
                                  
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="card h-auto d-inline-block">
                                <div class="card-body">
                                  <!-- <h5 class="card-title">Data de Retorno</h5>                    
                                                             
                                  <p class="card-text">Escolha a data de retorno</p>
                                  <input type="date" name="dataRetorno"> -->
                                  <h4>Data de Retorno</h4>
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DATA DA SAIDA" name="dataRetorno">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>        
                                </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          <br><br>
                            <div class="form-group ">                            
                              <label for="inputText"><h4>Informe a Cidade destino</h4></label>
                              <input type="text" class="form-control " id="cidadeDes" name="cidadeDestino" placeholder="Exemplo: ANDRADAS - MG " >
                            </div>
                                     
                        
                            <input type="submit" class="btn btn-primary" value="Registrar">
                          </form>

                    </div>
                  </div>

    </div>

    <div class="container mt-5">
      <div class="card text-center">
        <div class="card-header">
            

          <p class="h5">Últimos 5 registros de: <?php echo($nomeMil) ?></p>

          <div class="card-body">
          <div class="container text-center">

         <?php $result_Registro = "SELECT b.baterias,a.nome_posto, r.nome,r.telefone,r.data_Saida,r.data_Retorno,r.cidade_Destino,t.nome_guerra FROM registradas r INNER JOIN baterias b ON r.bateria = b.cod_baterias INNER JOIN antiguidade a ON r.posto = a.cod_posto_grad INNER JOIN tbl_mil t ON r.inserido = t.cpf WHERE r.inserido = '$cpfMil' ORDER BY id DESC LIMIT 0 , 5";
              $resultado_Registro = mysqli_query($conn, $result_Registro);                  
          ?>
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
          
          
          
          </div>
        </div>
      </div>
    </div>

  </body>
  <a href="#"><center>Desenvolvido por Diego H Nogueira ®️</center></a>
  

</html>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
