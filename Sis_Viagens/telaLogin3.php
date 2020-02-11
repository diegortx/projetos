<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
	require_once 'login/login.php';
    $u = new Usuario;
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>Login - Relatorio</title>
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style2.css">
	<link rel="shortcut icon" href="img/logo14gac.jpg" />
	
</head>
<body id="teste2">
	
		<video autoplay="true" muted loop>
			<source src="img/videoFundo.mp4" type="video/mp4">
		</video>
	

	<div class="d-flex justify-content-center">
		<div class="card my-5 " >
			<div class="card-header"><center>
                
				<h3> <img src="img/logo14gac.jpg"  alt=""> </h3></center>
			</div>
			<div class="card-body my-3 bg-light " style="max-width: 18rem;">
				<form method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="usuario" placeholder="Usuário">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="senha" placeholder="Senha">
					</div>
				
					<div class="form-group">
						<input type="submit" value="Entrar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer text-center">
				<p>Se não possuir um usuário, <br> entre em contato <br> com a TI 14º GAC.</p>
			</div>
		</div>
	</div>
</div>


<?php
if(isset($_POST['usuario']))
{	
	$usuario = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);
    
	//verificar se tem campo vazio
	if (!empty($usuario) && !empty($senha))
	{
		//se o campo nao estiver vazio ele realiza a conexão
		$u->conectar("viagens","127.0.0.1","root","root");	
			
		//se a menssagem de erro estiver vazia significa que nao teve erro na conexao entao pode continuar
		if($u->msgErro == "")
		{
			
            // chama a função logar da classe Usuario passando como parametro o Loguin e a Senha.
			if($u->logar($usuario,$senha))
			{	
                           
               header("location: login/registrar.php");
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


</body>
</html>