<?php

include_once("../../../config/conexao.php");
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
  <a class="dropdown-item" href="registrarOS.php">Registrar OS</a>
  <a class="dropdown-item" href="fecharOS.php">Fechar OS</a>
    <a class="dropdown-item" href="todasOS.php" target="_blank">OS Abertas</a>

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
  <a class="dropdown-item" href="../material/registrarMaterialPermanente.php">Material Permanente</a>
    <a class="dropdown-item" href="../material/registrarMaterialConsumo.php">Material de Consumo</a>
    <a class="dropdown-item" href="../material/sacarMaterial.php">Sacar</a>  
    <a class="dropdown-item" href="../material/estoqueMaterial.php">Estoque</a>
  </div>
</div>
</nav>

      <div class="shadow-lg p-3 mb-5 mt-4 bg-white rounded">
     
      <div class="text-center">
        <h2>Registrar Ordem de Serviço</h2>

                        <form method="POST" action="../../../config/inserirOs.php">
                        <div class="form-row">
                            <div class="form-group col-md-2 ml-5">
                            <label >Prioridade</label>
                            <select name="os_prioridade" class="form-control">
                                <option value="Normal" selected>Normal</option>
                                <option value="Urgente">Urgente</option>
                                <option value="Urgentissimo">Urgentissimo</option>                              
                                
                            </select>
                            </div>

                            <div class="form-group col-md-3 ml-5">
                            <label >Usuario</label>
                            <input type="text" class="form-control" name="os_usuario" placeholder="Usuario da Maquina">
                            </div>

                            <div class="form-group col-md-4 ml-5">
                           
                            <div class="form-group col-md-7 ml-5">
                            <label >Seção</label>
                            <select name="os_secao" class="form-control">
                                <option selected>Escolha...</option>
                                <option>Comandante</option>
                                <option>Sub Comandante</option>
                                <option>Fiscal Administrativo</option>
                                <option>S1</option>
                                <option>S2</option>
                                <option>S3</option>
                                <option>S4</option>
                                <option>Posto Médico</option>
                                <option>Tesouraria</option>
                                <option>SFPC</option>
                                <option>Patrimônio</option>
                                <option>SALC</option>
                                <option>Informática</option>
                                <option>Secretaria</option>
                                <option>Conformidade</option>
                                <option>MG-2</option>
                                <option>Oficina Moto</option>
                                <option>DEF</option>
                                <option>Mnt Com</option>
                                <option>Aprovisionamento</option>
                                <option>Depósito</option>
                                <option>1ª BO</option>
                                <option>2ª BO</option>
                                <option>BC</option>
                                <option>CFGS</option>
                                <option>Formação Sanitária</option>
                                <option>RP</option>
                                <option>OPIP</option>
                                <option>PRM</option>
                                <option>Elétrica</option>
                                <option>Almoxarifado</option>
                                <option>Banda</option>
                                <option>Gerais</option>
                                
                            </select>
                            </div>                            </div>
                           
                        </div>


                        
                            
                            <div class="form-group col-md-5 ">
                                    <label for="exampleFormControlTextarea1">Descrição </label>
                                    <textarea name="os_descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            
                       
                        <div class="form-row mt-4">

                        <div class="form-group col-md-2 ml-5">

                            <label >Nr Patrimonio</label>
                            <input type="text" class="form-control" name="os_nrPatrimonio" >
                            </div>
                            <div class="form-group col-md-6">
                            
                                    <div class="form-group col-md-7 ml-5">
                                    <label >IP</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                                                                
                                            <select name="os_ip" class="form-control ml-5">
                                        <option selected>Escolha...</option>
                                        <?php 
                                        $result_Ips = "SELECT ip_num, id FROM tbl_ip WHERE ip_status = 1";
                                        
                                        $resultado_Ips = mysqli_query($conn,$result_Ips);
                                        
                                        while($row_ips = mysqli_fetch_assoc($resultado_Ips)){ ?>
                                            <option value="<?php echo $row_ips['ip_num']?>">

                                            <?php echo $row_ips['ip_num'] ?> 
                                                
                                            </option>                                       
                                        
                                        
                                        <?php } ?>                                  
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                            </div>
                            </div>

                            <div class="form-group col-md-3">
                            <label >Tecnico Responsavel</label>
                            <select name="os_tecnico" class="form-control">
                                <option selected>Escolha...</option>
                                <option>Cap Peternella</option>
                                <option>Sgt Andre</option>
                                <option>Sgt Altieres</option>
                                <option>Sgt Diego</option>
                                <option>Sd Teixeira</option>
                                <option>Sd Dias</option>
                                <option>Sd Rizzo</option>
                                <option>Sd Lacerda</option>                             
                                
                                
                            </select>
                            </div>
                            

                            <div class="form-group col-md-3 ml-5">
                            <label >Staus</label>
                            <select name="os_status" class="form-control">
                                <option selected>Aberta</option>
                                <option>Em Andamenteo</option>
                                <option>Fechada</option>                        
                                
                                
                            </select>
                            </div>
                           
                        </div>
                        
                        <button type="submit" class="btn btn-success">Abrir</button>
                        </form>

      </div>
        
      </div>
</div>

  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
