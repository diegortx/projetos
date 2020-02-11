<?php
	
Class User
{
	private $pdo;
	public $msgErro = "";// se tiver vazia ta ok
	
	//conecta no banco de dados
	public  function conectar($nome, $host, $user, $password){
		global $pdo;
		try {			
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$user,$password);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}


	public function logar($user, $password){
		global $pdo;
		//verifiar usuario e password
		$sql = $pdo->prepare("SELECT usr_cpf FROM usuarios WHERE usr_cpf = :c AND usr_password = :s ");
		$sql->bindValue(":c",$user);
		$sql->bindValue(":s",$password);
		$sql->execute();
		if ($sql->rowCount() >0) {
			//entrar no sistema
			//criando arrey
			$dado = $sql->fetch();
			session_start();
			$_SESSION['cpf_mil'] = $dado['cpf_mil'];
			return true; //logou com sucesso			
		}else{
			return false; //nao logou;
		}
	}
}



?>