<?php

include_once("../../../config/conexao.php");

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registrar Viatura</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class=" ">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class=""></div>
                <div class="card-body">
                    <h2 class="title">Registrar Viatura</h2>
                    
                    <form method="POST" action="../../../config/registrarViatura.php">
                        <div class="col-4">

                        <h4>Escolha o Motorista</h4>
                        <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                                                        
                                    <select name="seclectMotorista">
                                  <option selected>Escolha...</option>
                                 <?php 
                                 $result_Motoristas = "SELECT a.nome_posto, u.nome, u.categoria, u.id FROM usuarios u INNER JOIN antiguidade a ON u.cod_posto_grad = a.cod_posto_grad";
                                 
                                 $resultado_Motoristas = mysqli_query($conn,$result_Motoristas);
                                 
                                 while($row_Motorista = mysqli_fetch_assoc($resultado_Motoristas )){ ?>
                                    <option value="<?php echo $row_Motorista['id']?>">

                                       <?php echo $row_Motorista['nome_posto'] ?> 
                                        <?php echo $row_Motorista['nome'] ?> /
                                        CNH: <?php echo $row_Motorista['categoria'] ?>

                                    </option>

                                 
                                 
                                 
                                 <?php } ?>                                  
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <h4>Chefe de Viatura</h4>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="CHEFE DE VIATURA : EX. TEN JOAO ou SGT PEDRO" name="chViatura">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <h4>Data e hora de Saida</h4>
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DATA DA SAIDA" name="dataSaida">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>  
                                         
                                </div>
                                <p>Horario de saida</p>
                                <div class="input-group">
                                    <input class="input--style-1 " type="text" placeholder="Exemplo: 12:12:12" name="h_saida">
                                </div>    
                            </div>

                            <div class="col-2">
                                <h4>Data e hora de Chegada</h4>
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DATA DE RETORNO" name="dataRetorno">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>  
                                         
                                </div>
                                <p>Horario de Chegada</p>
                                <div class="input-group">
                                    <input class="input--style-1 " type="text" placeholder="Exemplo: 12:12:12" name="h_chegada">
                                </div>    
                            </div>


                        </div>

                        <h4>Escolha a viatura</h4>
                        <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                                                        
                                    <select name="seclectViatura">
                                  <option selected>Escolha...</option>
                                 <?php 
                                 $result_Viaturas = "SELECT viatura_nome, viatura_eb, viatura_placa, id FROM viatura";
                                 
                                 $resultado_Viaturas = mysqli_query($conn,$result_Viaturas);
                                 
                                 while($row_viaturas = mysqli_fetch_assoc($resultado_Viaturas)){ ?>
                                    <option value="<?php echo $row_viaturas['id']?>">

                                       Viatura: <?php echo $row_viaturas['viatura_nome'] ?> /
                                        EB: <?php echo $row_viaturas['viatura_eb'] ?> /
                                        Placa: <?php echo $row_viaturas['viatura_placa'] ?>

                                    </option>

                                 
                                 
                                 
                                 <?php } ?>                                  
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <h4>Destino e Obeservações</h4>
                                <div class="input-group">
                                    <textarea name="obsViatura" id="" cols="60" rows="8" placeholder="Destino e Observações"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" >Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
