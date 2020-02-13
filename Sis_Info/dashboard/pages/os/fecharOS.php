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
        
     
</div>

<div class="shadow-lg p-3 mb-5 mt-4 bg-white rounded">
     
     <div class="text-center">
             <div class="container mt-5">

<div class="card text-center">

 <div class="card-header">

   <p class="h5">OS Abertas</p>

   <div class="card-body">

   <div class="container text-center">




<div class="container text-center">    

<table class="table table-sm table-hover table-bordered">

<thead class="thead-success">

   <tr>


        <th scope="col ">Prioridade</th>
        <th scope="col">Militar</th>
        <th scope="col">Seção</th>
        <th scope="col">Descrição</th>
        <th scope="col">IP</th>
        <th scope="col">Técnico</th>
        <th scope="col">Status</th>
        <th scope="col">Nº Patrimonio</th>  
        <th scope="col">Editar</th>       
        <th scope="col">Fechar OS</th>

       </tr>

</thead>

  <?php $result_Registro = "SELECT  * FROM tbl_os WHERE os_status='Aberta' OR os_status='Em Andamento' ORDER BY  os_prioridade DESC ";

       $resultado_Registro = mysqli_query($conn, $result_Registro);                  

   ?>
   <?php while($dado = $resultado_Registro->fetch_array()){ ?>
       <?php $idOS = $dado["id"];  
        
       ?>
       <?php if($dado["os_prioridade"] == 'Normal'){ 

          $color = success;
         
       } if($dado["os_prioridade"] == 'Urgente'){
         $color = warning;
       } if($dado["os_prioridade"] == 'Urgentissimo'){
        $color = danger;
      }if($dado["os_status"] == 'Em Andamento'){
        $color = info;
       
      }?>
       
   <tbody>   

   

       <tr class="bg-<?php echo($color)?>">

       

       <td><?php echo $dado["os_prioridade"] ?></td>
       <td><?php echo $dado["os_militar"] ?></td>
       <td><?php echo $dado["os_secao"] ?></td>
       <td><?php echo $dado["os_descricao"] ?></td>
       <td><?php echo $dado["os_ip"] ?></td>
       <td><?php echo $dado["os_tecnico"] ?></td>
       <td><?php echo $dado["os_status"] ?></td>
       <td><?php echo $dado["os_nrPatrimonio"] ?></td>
       
      <td> <a href="../../../config/editarOs.php?id=<?php echo $idOS ?>" onclick="return confirm('Deseja mesmo editar essa maquina?');"><img src="../../../img/editIcon.jpg" alt=""></a> </td>
       <td> <a href="../../../config/excluirOs.php?id=<?php echo $idOS ?>" onclick="return confirm('Deseja mesmo fechar essa OS ?');"><img src="../../../img/remover.png" alt=""></a> </td>
                  

       </tr>

   </tbody> 

     

   <?php  } ?>



</table>

</div>         

   

   

   

   </div>

 </div>

</div>

</div>             

     </div>
       
     </div>
</div>

  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
