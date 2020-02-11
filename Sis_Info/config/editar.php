<?php
session_start();

include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
// $maq_ip = filter_input(INPUT_GET, 'maq_ip', FILTER_SANITIZE_NUMBER_INT);

// echo "id : $id <br>" ;
// echo "ip: $maq_ip";

$result_Registro = "SELECT  id,maq_nome, maq_secao, maq_usuario, maq_tipo,maq_ip, maq_mac FROM registromaquinas WHERE id= '$id' ";
$resultado_Registro = mysqli_query($conn, $result_Registro); 

while($dado = $resultado_Registro->fetch_array()){
    $idMaquina = $dado["id"];
    $maq_nome = $dado["maq_nome"];
    $maq_secao = $dado["maq_secao"];
    $maq_usuario = $dado["maq_usuario"];
    $maq_tipo = $dado["maq_tipo"];
    $maq_ip = $dado["maq_ip"];
    $maq_mac = $dado["maq_mac"];
}


// echo "$idMaquina <br>";
// echo "$maq_nome <br>";
// echo "$maq_secao <br>";
// echo "$maq_usuario <br>";
// echo "$maq_tipo <br>";
// echo "$maq_ip <br>";
// echo "$maq_mac <br>";

// $result_Registro = "UPDATE tbl_ip SET ip_status = 0 WHERE ip_num= '$ipMaquina' ";
// $resultado_Registro = mysqli_query($conn, $result_Registro);

// $result_Registro2 = "DELETE FROM registromaquinas WHERE id = '$idMaquina' ";
// $resultado_Registro2 = mysqli_query($conn, $result_Registro2);


// if($resultado_Registro){
//     echo("<script>
//     alert('Maquina excluida com sucesso !');
//     document.location.href = '../dashboard/pages/ipsEmUso.php';
//     </script>");
//     mysqli_close($conn);

//     }else{
//         echo("<script>
//         alert('Maquina não fechada Erro ao se conectar com o banco de dados !');
//         document.location.href = '../dashboard/pages/ipsEmUso.php';
//         </script>");
//     }

// mysqli_close($conn);



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
  <a class="btn btn-success" href="../dashboard/ti14gac.php" role="button">Inicio</a>

    
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
  <a class="btn btn-success" href="../dashboard/pages/material.php" role="button">Material</a>
</nav>

      <div class="shadow-lg p-3 mb-5 mt-4 bg-white rounded">
     
      <div class="text-center">
        <h3>Editando maquina ip : <a class="text-success"><?php echo $maq_ip?> </a></h3>
        <br><br>

                                <form method="POST" action="confEditar.php">
                        <div class="form-row">
                            <div class="form-group col-md-3 ">
                            <label >Nome</label>
                            <input type="text" class="form-control" name="nomeMaquina" value="<?php echo $maq_nome ?>">
                            </div>
                            
                           
                            <div class="form-group col-md-2 ml-5">
                            <label >Seção</label>
                            <select name="secaoMaquina" class="form-control">
                                <option selected><?php echo $maq_secao ?></option>
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
                            </div>                            
                            <div class="form-group col-md-3 ml-5">
                            <label >Usuario</label>
                            <input type="text" class="form-control" name="usuarioMaquina" value="<?php echo $maq_usuario ?>">
                            </div>
                           
                        </div>
                       
                        <div class="form-row mt-2">

                             <div class="form-group col-md-3">
                            <label >Escolha o tipo</label>
                            <select name="tipo" class="form-control">
                                <option selected><?php echo $maq_tipo ?></option>
                                <option>Linux</option>
                                <option>Windows</option>
                                <option>Impressora</option>
                                <option>Servidor</option>
                            </select>
                            </div>

                            <div class="form-group col-md-3 ml-5">
                            <label >IP</label>
                            <input type="text" class="form-control " name="ip" readonly=“true” value="<?php echo $maq_ip ?>">
                            </div>

                            <div class="form-group col-md-3 ml-5">
                            <label >MAC</label>
                            <input type="text" class="form-control " name="mac" value="<?php echo $maq_mac ?>">
                            </div>
                            
                           
                        </div>
                        <a class="btn btn-primary" href="../dashboard/pages/ipsEmUso.php" role="button">Voltar</a>
                       
                        
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
