<?php

include_once("../../config/conexao.php");
//inicia a sessão pelo id
$sec_Mil = session_start();
$idMil = $_SESSION['cpf_mil'];

$result_Registro = "SELECT nome FROM  usuarios WHERE cpf_mil = $idMil";

$resultado_Registro = mysqli_query($conn, $result_Registro);

while($dado = $resultado_Registro->fetch_array()){
$nomeMil = $dado["nome"];
};



//verifica se a seção com id esta criada para validar o acesso 
if(!isset($_SESSION['cpf_mil'])){
	header("location: ../login.php");
	exit;
}
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    

    <title>Painel Administração</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"> <?php echo "Bem Vindo : $nomeMil "; ?></a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../../config/sair.php">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar fixed-top mt-5">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link" href="registrarViatura.php">
                  <span data-feather="users"></span>
                  Registrar Viatura
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fecharViatura.php">
                  <span data-feather="users"></span>
                  Fechar Viatura
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="relatorio.php">
                  <span data-feather="bar-chart-2"></span>
                  Relatórios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registrarMotorista.php">
                  <span data-feather="bar-chart-2"></span>
                  Registrar Motorista
                </a>
              </li>
              
            </ul>

          
           
           
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="mt-4 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" id="#dashBoards">
            <h1 class="h2">Fechar Viatura</h1>
                     
          </div>

          

          <div class="flex-wrap flex-md-nowrap align-items-center pt-1 ">
            
            
              <form method="POST" name="formFecharVIatura" action="fecharViatura.php">

                    <div class="container text-center">    
                    <table class="">
                    <thead class="table-bordered" style="border-width:3px;">
                    <tr>
                    <th scope="col">Pst/Grad</th>
                    <th scope="col">Motorista</th>
                    <th scope="col">Ch Viatura</th>
                    <th scope="col">Data Saída</th>
                    <th scope="col">Saída</th>
                    <th scope="col">Data Retorno</th>
                    <th scope="col">Retorno</th>
                    <th scope="col">Nome Viatura</th>
                    <th scope="col">Viatura EB</th>
                    <th scope="col">Placa Viatura</th>
                    <th scope="col">Destino/Obs</th>
                    
                    
                    <th scope="col">Selecione</th>
                    </tr>
                    </thead>
                    <?php 
                    
                    
                    $result_Registro = "SELECT a.nome_posto, u.nome,v.chViatura,v.data_saida,v.h_saida,v.data_retorno,v.h_chegada, via.viatura_nome,via.viatura_eb,via.viatura_placa,v.obsViatura, a.nome_posto, u.nome, v.id FROM viaturasregistradas v INNER JOIN usuarios u ON u.id = v.motorista INNER JOIN antiguidade a ON u.cod_posto_grad = a.cod_posto_grad INNER JOIN viatura via ON via.id = v.ebViatura WHERE v.situacao = 1 ";

                    $resultado_Registro = mysqli_query($conn, $result_Registro);
                    
                    while($dado = $resultado_Registro->fetch_array()){ ?>
                    <?php $idViatura = $dado["id"]; ?>
                    <tbody class="text-center table-bordered" style="border-width:3px;">
                    
                    <tr>
                    <td><?php echo $dado["nome_posto"] ?></td>
                    <td><?php echo $dado["nome"] ?></td>
                    <td><?php echo $dado["chViatura"] ?></td>
                    <td><?php echo date("d/m/Y", strtotime($dado["data_saida"])); ?></td> 
                    <td><?php echo $dado["h_saida"] ?></td> 
                    <td><?php echo date("d/m/Y", strtotime($dado["data_retorno"])); ?></td>
                    <td><?php echo $dado["h_chegada"] ?></td>      
                    <td><?php echo $dado["viatura_nome"] ?></td>
                    <td><?php echo $dado["viatura_eb"] ?></td>
                    <td><?php echo $dado["viatura_placa"] ?></td>
                    <td><?php echo $dado["obsViatura"] ?></td>
                    
                    <td> <a href='../../config/update.php?id=<?php echo $idViatura ?>'> <img src="../../img/editIcon.jpg" alt=""> </a> </td>
                    

                    </tr>
                    </tbody> 

                    <?php  } ?>

                    </table>
                    </div>
                           
              </form>

                        
          
          
          </div>
          
          </div>

          
          
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    
    <!-- Ícones -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
        </script>


     
  </body>
</html>
