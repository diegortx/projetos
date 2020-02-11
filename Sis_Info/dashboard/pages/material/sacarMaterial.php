<?php

include_once("../../../config/conexao.php");
//inicia a sessão pelo id
// $sec_Mil = session_start();
// $idMil = $_SESSION['cpf_mil'];

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
        <h2>Sacar Material </h2>


        <div class="shadow-lg p-3 mb-5 mt-4 bg-white rounded">
    

    <div class="text-center">
     <div class="container mt-5">

<div class="card text-center">

<div class="card-header">


 <div class="card-body">

 <div class="container text-center">

<div class="container text-center">    

<table class="table table-sm table-hover">

<thead class="thead-success bg-success">

   <tr>



        <th scope="col">Nome Material</th>
        <th scope="col">Local</th>
        <th scope="col">Quantidade Disponivel</th>
        <th scope="col">Sacar</th>
       
        

       </tr>

</thead>

  <?php $result_Registro = "SELECT  * FROM material_Consumo ORDER BY id ";

       $resultado_Registro = mysqli_query($conn, $result_Registro);                  

   ?>
   <?php while($dado = $resultado_Registro->fetch_array()){ ?>
       <?php $idMaterialConsumo = $dado["id"];  ?>
       
   <tbody>   

   

       <tr>       

       <td><?php echo $dado["mat_Nome"] ?></td>
       <td><?php echo $dado["mat_Secao"] ?></td>
       <td><?php echo $dado["mat_Qnt"] ?></td>
       <td> <a href="../../../config/sacarMaterial.php?id=<?php echo $idMaterialConsumo ?>" onclick="return confirm('Deseja mesmo editar essa maquina?');"><img src="../../../img/sacar.png" alt=""></a> </td>
      
       

                   

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

