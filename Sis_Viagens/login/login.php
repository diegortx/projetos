<?php
	
Class Usuario
{
	private $pdo;
	public $msgErro = "";// se tiver vazia ta ok
	
	//conecta no banco de dados
	public  function conectar($nome, $host, $usuario, $senha){
		global $pdo;
		try {			
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
	}


	public function logar($usuario, $senha){
		global $pdo;
		//verifiar email e senha
		$sql = $pdo->prepare("SELECT cpf FROM tbl_mil WHERE cpf = :c AND senha = :s ");
		$sql->bindValue(":c",$usuario);
		$sql->bindValue(":s",$senha);
		$sql->execute();
		if ($sql->rowCount() >0) {
			//entrar no sistema
			//criando arrey
			$dado = $sql->fetch();
			session_start();
			$_SESSION['cpf'] = $dado['cpf'];
			return true; //logou com sucesso			
		}else{
			return false; //nao logou;
		}
	}
}



?>