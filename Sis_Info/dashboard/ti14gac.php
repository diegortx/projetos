<?php

include_once("../config/conexao.php");
//inicia a sessão pelo id
$sec_Mil = session_start();
$idMil = $_SESSION['cpf_mil'];

//verifica se a seção com id esta criada para validar o acesso 

?>

<!doctype html>
<html lang="pt-BR">
  <head>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Painel Administração</title>
  </head>

  <body>
    

    <a class="btn btn-danger mt-2 ml-3 algint-right" href="../config/exit.php" role="button">Sair</a>
  <div class="container mt-2">

  <nav class="navbar navbar-dark bg-primary">
  <!-- Conteúdo do navbar -->
  <a class="btn btn-success" href="ti14gac.php" role="button">Inicio</a>
  
  <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OS
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="pages/os/registrarOS.php">Registrar OS</a>
  <a class="dropdown-item" href="pages/os/fecharOS.php">Fechar OS</a>
    <a class="dropdown-item" href="pages/os/todasOS.php" target="_blank">OS Abertas</a>

  </div>
</div>

  <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    IPs
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="pages/registrarMaquina.php">Registrar Maquina</a>
    <a class="dropdown-item" href="pages/ipsLivre.php">Ips Livres</a>
    <a class="dropdown-item" href="pages/ipsEmUso.php">Ips Em uso</a>
  </div>
</div>


<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Relatórios de Maquinas
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="pages/relatorios/totalMaquinas.php">Total de Maquinas</a>
  <a class="dropdown-item" href="pages/relatorios/maquinasWindows.php">Maquinas Windows</a>
    <a class="dropdown-item" href="pages/relatorios/maquinasLinux.php">Maquinas Linux</a>
    <a class="dropdown-item" href="pages/relatorios/servidores.php">Servidores</a>
    <a class="dropdown-item" href="pages/relatorios/impressoras.php">Impressoras</a>
  </div>
</div>

<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Material
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
  <a class="dropdown-item" href="pages/material/registrarMaterialPermanente.php">Material Permanente</a>
    <a class="dropdown-item" href="pages/material/registrarMaterialConsumo.php">Material de Consumo</a>
    <a class="dropdown-item" href="pages/material/sacarMaterial.php">Sacar</a>  
    <a class="dropdown-item" href="pages/material/estoqueMaterial.php">Estoque</a>
  </div>
</div>
</nav>

      <div class="shadow-lg p-3 mb-5 mt-4 bg-white rounded">
      <center><h2> <img src="../img/logo14gac.jpg"  alt=""> </h2></center>

      <div class="text-center">
        <h2>TI 14º GAC</h2>
        <div class="shadow-lg p-3 mb-5 mt-4 bg-white rounded">
        <h5>Bem Vindo</h5>
        <p>Bem vindo ao sistema do DTI 14º GAC para melhor controle e administração de dados <br> 
        podendo sempre sofrer alterações e melhorias no sistema. <br>
        Este sistema foi desenvolvido pelo SGT DIEGO com auxilio de todos os membros da TI do 14º GAC.
     
        </p>

        <h5>Equipe DTI 14º GAC</h5>
        <div class="container text-center">    

<table class="table table-sm table-hover">

<thead class="thead-success bg-warning">

   <tr>


        <th scope="col ">Nome</th>
        <th scope="col">Função</th>
        <th scope="col">Telefone</th>
        <th scope="col">Email</th>     

       </tr>

</thead>       
   <tbody>
       <tr>      

       <td>Cap Peternella</td>
       <td>Chefe Informática</td>
       <td>Tel</td>
       <td>Email</td>

       </tr>

       <tr>      

       <td>2º Sgt André</td>
       <td>Aux Informática</td>
       <td>Tel</td>
       <td>Email</td>

       </tr>

       <tr>      

       <td>3º Sgt Altieres</td>
       <td>Aux Informática</td>
       <td>(35) 9 9953-2900</td>
       <td>altieres_abreu2@hotmail.com</td>

       </tr>

       <tr>      

       <td>3º Sgt Diego</td>
       <td>Aux Informática</td>
       <td>(35) 9 9151-8204</td>
       <td>dhnogueira1@hotmail.com</td>

       </tr>

       <tr>      

       <td>Sd Teixeira</td>
       <td>Aux Informática</td>
       <td>(35) 9 9867-4270</td>
       <td>denisteixeira021@gmail.com</td>

       </tr>
       <tr>      

       <td>Sd Dias</td>
       <td>Aux Informática</td>
       <td>(35) 9 9175-6283</td>
       <td>ppaulodias@hotmail.com</td>

       </tr>

 <tr>      

       <td>Sd Rizzo</td>
       <td>Aux Informática</td>
       <td>(35) 9 9806-4159</td>
       <td>bryanguimel49@gmail.com</td>

       </tr>
       <tr>      

<td>Sd Lacerda</td>
<td>Aux Informática</td>
<td>(35) 9 9265-7850</td>
<td>igorlacerda10@hotmail.com</td>

</tr>

   </tbody>



</table>

</div>   
        </div>

      </div>
        
      <center><p> Todos os direitos reservados Sgt Diego ® </center>
      </div>
</div>

  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
