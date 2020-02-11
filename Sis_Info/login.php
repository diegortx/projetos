<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<link href="css/style.css" rel="stylesheet">

<?php
	require_once 'config/login.php';
    $u = new User;
    
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Controle Informática 14º GAC</title>
  </head>
  <body>
  <div class="login-reg-panel">
	
							
		<div class="register-info-box text-center">
			<h2>Informática 14ºGAC</h2><br>
			<p>Sistema criado para controle do TI do 14º GAC </p>
      

		</div>
		<form action="" method="POST">			
        <div class="white-panel">
          <div class="login-show">
          <center><h2> <img src="img/logo14gac.jpg"  alt=""> </h2></center>
            <input type="text" placeholder="Usuario" name="user">
            <input type="password" placeholder="Senha" name="password">
            <input type="submit" value="Logar" class="btn float-right login_btn">
                        
          </div>
          
        </div>
    </form>		
  </div>


  </body>
</html>

<?php
if(isset($_POST['user']))
{	
	$user = addslashes($_POST['user']);
  $password = addslashes($_POST['password']);
    
	//verificar se tem campo vazio
	if (!empty($user) && !empty($password))
	{
		//se o campo nao estiver vazio ele realiza a conexão
		$u->conectar("ti14gac","127.0.0.1","root","root");	
			
		//se a menssagem de erro estiver vazia significa que nao teve erro na conexao entao pode continuar
		if($u->msgErro == "")
		{
			
            // chama a função logar da classe user passando como parametro o Loguin e a Senha.
			if($u->logar($user,$password))
			{	                 
        header("location: dashboard/ti14gac.php");
			}else
			{
					//se ouve algum erro na função logar aprenseta o alert
					echo '<center><script>alert("Usuario ou senha incorretos !");</script></center>';
				
			}
		}else
		{
			// se ouve algum erro na conexão com o banco de dados aprensenta a msg de erro que foi criada na classe Usuario.php
			echo  "Erro: ".$u->msgErro;
		}	
	}else{
		//se todos os campos nao foram preenchidos avisa no alert
		echo '<script>alert("Preencha todos os campos !");</script>';
	}

}
?>



