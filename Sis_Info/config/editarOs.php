<?php
session_start();

include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
// $maq_ip = filter_input(INPUT_GET, 'maq_ip', FILTER_SANITIZE_NUMBER_INT);

// echo "id : $id <br>" ;
// echo "ip: $maq_ip";

$result_Registro = "SELECT  * FROM tbl_os WHERE id= '$id' ";
$resultado_Registro = mysqli_query($conn, $result_Registro); 

while($dado = $resultado_Registro->fetch_array()){
    $idOs = $dado["id"];
    $os_prioridade = $dado["os_prioridade"];
    $os_militar = $dado["os_militar"];
    $os_secao = $dado["os_secao"];
    $os_descricao = $dado["os_descricao"];
    $os_patrimonio = $dado["os_patrimonio"];
    $os_ip = $dado["os_ip"];
    $os_tecnico = $dado["os_tecnico"];
    $os_status = $dado["os_status"];

    
}


// echo("$idOs <br>");
// echo("$os_prioridade <br>");
// echo("$os_militar <br>");
// echo("$os_secao <br>");
// echo("$os_descricao <br>");
// echo("$os_ip <br>");
// echo("$os_tecnico <br>");
// echo("$os_status <br>");


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
  
  <a class="btn btn-success" href="../dashboard/ti14gac.php" role="button">Inicio</a>
  <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OS
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../dashboard/pages/os/registrarOS.php">Registrar OS</a>
  <a class="dropdown-item" href="../dashboard/pages/os/fecharOS.php">Fechar OS</a>
    <a class="dropdown-item" href="../dashboard/pages/os/todasOS.php">OS Abertas</a>

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
       <h2>Registrar Ordem de Serviço</h2>

                       <form method="POST" action="confEditarOs.php">

                       <input type="hidden" name="idOs" value="<?php echo $idOs ?>">

                       <div class="form-row">
                           <div class="form-group col-md-2 ml-5">
                           <label >Prioridade</label>
                           <select name="os_prioridade" class="form-control">
                           <option value="Normal" selected><?php echo "$os_prioridade"?></option>
                               <option value="Normal" selected>Normal</option>
                               <option value="Urgente">Urgente</option>
                               <option value="Urgentissimo">Urgentissimo</option>                              
                               
                           </select>
                           </div>

                           <div class="form-group col-md-3 ml-5">
                           <label >Usuario</label>
                           <input type="text" class="form-control" name="os_militar" value="<?php echo"$os_militar"?>" placeholder="Usuario da Maquina">
                           </div>

                           <div class="form-group col-md-4 ml-5">
                          
                           <div class="form-group col-md-7 ml-5">
                           <label >Seção</label>
                           <select name="os_secao" class="form-control">
                               <option selected ><?php echo"$os_secao"?></option>
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
                                   <textarea name="os_descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo"$os_descricao" ?></textarea>
                               </div>
                           
                      
                       <div class="form-row mt-4">

                       <div class="form-group col-md-2 ml-5">

                           <label >Nr Patrimonio</label>
                           <input type="text" class="form-control" value="<?php echo"$os_patrimonio"?>" name="os_patrimonio" >
                           </div>
                           <div class="form-group col-md-6">
                           
                                   <div class="form-group col-md-7 ml-5">
                                   <label >IP</label>
                                       <div class="rs-select2 js-select-simple select--no-search">
                                                                               
                                           <select name="os_ip" class="form-control ml-5">
                                       <option selected><?php echo"$os_ip"?></option>
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
                               <option selected><?php echo"$os_tecnico" ?></option>
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
                               <option selected><?php echo"$os_status" ?></option>
                               <option> Aberta</option>
                               <option>Em Andamenteo</option>
                               <option>Fechada</option>                        
                               
                               
                           </select>
                           </div>
                          
                       </div>

                       <a class="btn btn-primary" href="../dashboard/pages/os/fecharOS.php" role="button">Voltar</a>
                       
                       <button type="submit" class="btn btn-success">Editar</button>
                       </form>

     </div>
       
     </div>
</div> 
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
