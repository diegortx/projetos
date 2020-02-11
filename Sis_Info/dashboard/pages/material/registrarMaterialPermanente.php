<?php

include_once("../../config/conexao.php");
//inicia a sessão pelo id
$sec_Mil = session_start();
$idMil = $_SESSION['cpf_mil'];

//verifica se a seção com id esta criada para validar o acesso 

?>

<!doctype html>
<html lang="pt-BR">
  <head>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Painel Informática</title>
  </head>

  <body>
  <a class="btn btn-danger mt-2 ml-3 algint-right" href="../../config/exit.php" role="button">Sair</a>

  <div class="container mt-2">
  <nav class="navbar navbar-dark bg-primary">
  <!-- Conteúdo do navbar -->
  <a class="btn btn-success" href="../../ti14gac.php" role="button">Inicio</a>

  <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OS
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../os/registrarOS.php">Registrar OS</a>
  <a class="dropdown-item" href="../os/fecharOS.php">Fechar OS</a>
    <a class="dropdown-item" href="../os/todasOS.php">OS Abertas</a>

  </div>
</div>

    
  <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    IPs
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../registrarMaquina.php">Registrar Maquina</a>
    <a class="dropdown-item" href="../ipsLivre.php">Ips Livres</a>
    <a class="dropdown-item" href="../ipsEmUso.php">Ips Em uso</a>
  </div>
</div>


<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Relatórios de Maquinas
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../relatorios/totalMaquinas.php">Total de Maquinas</a>
  <a class="dropdown-item" href="../relatorios/maquinasWindows.php">Maquinas Windows</a>
    <a class="dropdown-item" href="../relatorios/maquinasLinux.php">Maquinas Linux</a>
    <a class="dropdown-item" href="../relatorios/servidores.php">Servidores</a>
    <a class="dropdown-item" href="../relatorios/impressoras.php">Impressoras</a>
  </div>
</div>



<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Material
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">  
  <a class="dropdown-item" href="registrarMaterialPermanente.php">Material Permanente</a>
    <a class="dropdown-item" href="registrarMaterialConsumo.php">Material de Consumo</a>
    <a class="dropdown-item" href="sacarMaterial.php">Sacar</a>  
    <a class="dropdown-item" href="estoqueMaterial.php">Estoque</a>
  </div>
</div>
</nav>

      <div class="shadow-lg p-3 mb-5 mt-4 bg-white rounded">
     
      <div class="text-center">
        <h2>Registrar Material Permanente</h2>

                                <form method="POST" action="../../../config/inserirMatPermanente.php">
                        <div class="form-row">
                            <div class="form-group col-md-3 ml-5">
                            <label >Nr Ficha</label>
                            <input type="number" class="form-control" name="num_Ficha" placeholder="Nr da Ficha">
                            </div>

                            <div class="form-group col-md-3 ml-5">
                            <label >Nr Patrimonio</label>
                            <input type="number" class="form-control" name="num_Patrimonio" placeholder="Nr do Patrimonio">
                            </div>

                            <div class="form-group col-md-3 ml-5">
                            <label >Nome do Material</label>
                            <input type="text" class="form-control" name="nome_Material" placeholder="Nome do Material">
                            </div>

                            <div class="form-group col-md-4 ml-5">
                           
                            <div class="form-group col-md-8 ml-5">
                            <label >Local</label>
                            <input type="text" class="form-control" name="secaoMaterial" placeholder="Ex: PABX, Sala Srv">
                            
                           
                            </div>                            
                            </div>
                            
                            <div class="form-group col-md-2 ml-5">
                            <label >Quantidade</label>
                            <input type="number" class="form-control" name="qnt_Material" placeholder="Ex: 3">
                            </div>
                           
                        </div>

                        
                        <button type="submit" class="btn btn-success">Registrar</button>
                        </form>

      </div>
        
      </div>
</div>

  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
