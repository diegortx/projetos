<?php
session_start();

include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
// $maq_ip = filter_input(INPUT_GET, 'maq_ip', FILTER_SANITIZE_NUMBER_INT);

// echo "id : $id <br>" ;
// echo "ip: $maq_ip";

$result_Registro = "SELECT  * FROM material_Permanente WHERE id= '$id' ";
$resultado_Registro = mysqli_query($conn, $result_Registro); 

while($dado = $resultado_Registro->fetch_array()){
    $idMaterialPermanente = $dado["id"];
    $num_ficha = $dado["num_ficha"];
    $num_patrimonio = $dado["num_patrimonio"];
    $nome_material = $dado["nome_material"];
    $local_material = $dado["local_material"];
    $qtd_material = $dado["qtd_material"];
    
}

?>

<!doctype html>
<html lang="pt-BR">
  <head>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Painel Informática</title>
  </head>

  <body>
  <a class="btn btn-danger mt-2 ml-3 algint-right" href="exit.php" role="button">Sair</a>

  <div class="container mt-2">
  <nav class="navbar navbar-dark bg-primary">
  <!-- Conteúdo do navbar -->
  <a class="btn btn-success" href="../dashboard/ti14gac.php" role="button">Inicio</a>
  <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OS
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../dashboard/pages/os/registrarOS.php">Registrar OS</a>
  <a class="dropdown-item" href="../dashboard/pages/fecharOS.php">Fechar OS</a>
    <a class="dropdown-item" href="../dashboard/pages/todasOS.php">OS Abertas</a>

  </div>
</div>
  

    
  <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    IPs
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../dashboard/pages/registrarMaquina.php">Registrar Maquina</a>
    <a class="dropdown-item" href="../dashboard/pages/ipsLivre.php">Ips Livres</a>
    <a class="dropdown-item" href="../dashboard/pages/ipsEmUso.php">Ips Em uso</a>
  </div>
</div>


<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Relatórios de Maquinas
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../dashboard/pages/relatorios/totalMaquinas.php">Total de Maquinas</a>
  <a class="dropdown-item" href="../dashboard/pages/relatorios/maquinasWindows.php">Maquinas Windows</a>
    <a class="dropdown-item" href="../dashboard/pages/relatorios/maquinasLinux.php">Maquinas Linux</a>
    <a class="dropdown-item" href="../dashboard/pages/relatorios/servidores.php">Servidores</a>
    <a class="dropdown-item" href="../dashboard/pages/relatorios/impressoras.php">Impressoras</a>
  </div>
</div>



<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Material
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">  
    <a class="dropdown-item" href="../dashboard/pages/material/registrarMaterialPermanente.php">Material Permanente</a>
    <a class="dropdown-item" href="../dashboard/pages/material/registrarMaterialConsumo.php">Material de Consumo</a>
    <a class="dropdown-item" href="../dashboard/pages/material/sacarMaterial.php">Sacar</a>  
    <a class="dropdown-item" href="../dashboard/pages/material/estoqueMaterial.php">Estoque</a>

  </div>
</div>
</nav>

      <div class="shadow-lg p-3 mb-5 mt-4 bg-white rounded">
     
      <div class="text-center">
        <h3>Editando o Patrimonio: <a class="text-success"><?php echo $num_patrimonio?> </a></h3>
        <br><br>

                                <form method="POST" action="confEditarPermanente.php">
                        <div class="form-row">

                        <input type="hidden" name="idMatPermanente" value="<?php echo $idMaterialPermanente ?>">

                            <div class="form-group col-md-3 ml-5">
                            <label >Nr Ficha</label>
                            <input type="text" class="form-control" name="num_Ficha" value="<?php echo $num_ficha ?>">
                            </div>

                            <div class="form-group col-md-3 ml-5 ">
                            <label >Nr Patrimônio</label>
                            <input type="text" class="form-control" name="num_Patrimonio" value="<?php echo $num_patrimonio ?>">
                            </div>

                            <div class="form-group col-md-3 ml-5">
                            <label >Nome</label>
                            <input type="text" class="form-control" name="nome_Material" value="<?php echo $nome_material ?>">
                            </div>
                            
                            <div class="form-group col-md-4 ml-5">
                            <label >Local</label>
                            <input type="text" class="form-control" name="secaoMaterial" placeholder="Ex: PABX, Sala Srv" value="<?php echo $local_material ?>">
                            
                           
                            </div>         
                            <div class="form-group col-md-1 ml-4">
                            <label >Quantidade</label>
                            <input type="text" class="form-control" name="qnt_Material" value="<?php echo $qtd_material ?>">
                            </div>
                           
                        </div>
                       
                        
                        <a class="btn btn-primary" href="../dashboard/pages/material/estoqueMaterial.php" role="button">Voltar</a>
                       
                        
                        <button type="submit" class="btn btn-success ml-5" onclick="return confirm('Deseja mesmo ATUALIZAR essa maquina?');">Atualizar</button>
                        </form>

      </div>
        
      </div>
</div>

  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
