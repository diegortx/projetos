<?php
//inicia a sessão pelo id
$sec_Mil = session_start();
//verifica se a seção com id esta criada para validar o acesso 
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
    <link rel="stylesheet" href="../css/style.css" >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    <title>Sistema de Viagens - Relatórios</title>
  </head>
  <body id="teste">
    
      

    <div class="container mt-4"> 
    
            <div class="card text-center">
          
              <div class="card-header mt-3">
                <header class="row"  style="float: right;margin-right: 20px;">
                  <a href="../login/sair.php" class="btn btn-danger">Sair</a>
                </header>
              <img src="../img/consultaRelatorio1.jpg" alt="">
              <div class="card-row">
                  <h4 align="right">Registrar</h4>
                <a href="../login/registrar.php"><img src="../img/logo14gac1.jpg" alt="Imagem Relatorio" align="right"/></a>
              </div>
                      <p class="h1"> Relatórios de Viagens </p>
                    </div>
                    <div class="card-body mb-3">
                      <h2 class="card-title">Relatórios</h2>
                      <p class="card-text"><h5>Sistema de relatórios de viagens para militares do 14º GAC, escolha o tipo de relatório que deseja obter.</h4></p><br><br>

                       <div class="card-deck col-lg-13 ">
                         

                          <div class="card col-3 ">
                            <img class="card-img-top" src="../img/bateria.png" alt="Imagem de capa do card">
                            <div class="card-body text-center">
                              <h5 class="card-title">Relatório por Subunidade</h5>
                             
                              
                              <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
                              
                              <form method="POST" action="../relatorios/relatorioBateria.php" target="_blank">
                                <div class="form-row ">
                                    <div class="form-group col-md-19 ">
                                        
                                        <select id="inputEstado" name="selectBia" class="form-control mt-5">
                                        <option selected>Escolha...</option>
                                          <option value="1">EM</option>
                                          <option value="2">CFGS</option>
                                          <option value="3">BC</option>
                                          <option value="4">1ª Bia O</option>
                                          <option value="5">2ª Bia O</option>
                                          
                                        </select>
                                      </div>
                                      <div class="row">
                                      <div class="">
                                        <div class="card mt-2 ml-1">
                                          <div class="card-body">
                                          <h4>Data de Inicio</h4>
                                    
                                          
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DATA DE INICIO" name="dataInicio">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>        
                                </div>
                                
                                            
                                          </div>
                                        </div>
                                      </div>
                                      <div class="">
                                        <div class="card mt-2 ml-1">
                                          <div class="card-body ">

                                          <h4>Data do Fim</h4>
                                <div class="input-group ">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DATA DO FIM" name="dataFim">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>        
                                </div>                                          
                                            
                                          
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                      
                                     

                                </div>
                                
                                <input type="submit" class="btn btn-primary mt-4" value="Consultar">
                              </form>
                              
                              

                            </div>
                          </div>

                          <div class="card col-6 ">
                            
                            <div class="card-body text-center">
                              <img src="../img/calendario2.png" alt="">
                              <h5 class="card-title">Relatório por Datas</h5>
                              <p class="card-text">Este relatório mostrara os registros por datas em ordem de antiguidade.</p>
                              <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>

                              <form  method="POST" action="../relatorios/relatorioDatas.php" target="_blank">

                                  <div class="row">
                                      <div class="">
                                        <div class="card mt-2 ml-1">
                                          <div class="card-body">
                                          <h4>Data de Saida</h4>
                                    
                                          
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DATA DA SAIDA" name="dataInicio">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>        
                                </div>
                                
                                            
                                          </div>
                                        </div>
                                      </div>
                                      <div class="">
                                        <div class="card mt-2 ml-1">
                                          <div class="card-body ">

                                          <h4>Data de Retorno</h4>
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DATA DE RETORNO" name="dataFim">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>        
                                </div>                                          
                                            
                                          
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                <input type="submit" class="btn btn-primary mt-3" value="Consultar">
                              </form>
                              
                              

                            </div>
                          </div>


                          <div class="card col-3 ">
                            <img class="card-img-top" src="../img/todos.png" alt="Imagem de capa do card">
                            <div class="card-body text-center">
                              <h5 class="card-title">Relatório de todos Registros</h5>
                              <p class="card-text">Este relatório mostrara todos os registros por ordem de antiguidade.</p>
                              
                              <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>

                              <form  method="POST" action="../relatorios/relatorioTodos.php " target="_blank">
                                <div class="form-row">


                                </div>
                                <input type="submit" class="btn btn-primary mt-5" value="Consultar">
                              </form>
                              
                              
                            </div>
                          </div>


                        </div>



                            
                          </div>
                          <br><br>

                                    
                        <br><br>
                            
                      

                    </div>
                  </div>

    </div>
   
  </body>
  
  <a href="#"><center>Desenvolvido por Diego H Nogueira ®️</center></a>

</html>

<script src="../login/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    
    <script src="js/global.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>