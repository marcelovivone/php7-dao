<?php

class Usuario {
	private $idusuario;
	private $dsclogin;
	private $dscsenha;
	private $dttcadastro;

	public function getIdusuario() {
		return $this->idusuario;
	}

	public function setIdUsuario($value) {
		$this->idusuario = $value;
	}

	public function getDsclogin() {
		return $this->dsclogin;
	}

	public function setDsclogin($value) {
		$this->dsclogin = $value;
	}

	public function getDscsenha() {
		return $this->dscsenha;
	}

	public function setDscsenha($value) {
		$this->dscsenha = $value;
	}

	public function getDttcadastro() {
		return $this->dttcadastro;
	}

	public function setDttcadastro($value) {
		$this->dttcadastro = $value;
	}

	public function loadById($id) {
		$sql = new Sql();

		$result = $sql->select("SELECT * FROM usuario WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if (count($result[0]) > 0) {
			$row = $result[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDsclogin($row['dsclogin']);
			$this->setDscsenha($row['dscsenha']);
			$this->setDttcadastro(new Datetime($row['dttcadastro']));
		}

	}

	public function login($login, $password) {
		$sql = new Sql();

		$result = $sql->select("SELECT * FROM usuario WHERE dsclogin = :LOGIN AND dscsenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));

		if (count($result[0]) > 0) {
			$row = $result[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDsclogin($row['dsclogin']);
			$this->setDscsenha($row['dscsenha']);
			$this->setDttcadastro(new Datetime($row['dttcadastro']));
		}else{
			throw new Exception("Login e/ou senha inválidos");
		}

	}

	public static function search($login) {
		$sql = new Sql();

		return $sql->select("SELECT * FROM usuario WHERE dsclogin LIKE :LOGIN ORDER BY dsclogin", array(
			":LOGIN"=>"%".$login."%"
		));

	}

	// método pode ser static, poir não utiliza $this
	// como método static, não precisa ser instanciado, pode ser utilizar diretamente (Usuario::getList())
	public static function getList() {
		$sql = new Sql();

		return $sql->select("SELECT * FROM usuario ORDER BY dsclogin");
	}

	public function __toString() {
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"dsclogin"=>$this->getDsclogin(),
			"dscsenha"=>$this->getDscsenha(),
			"dttcadastro"=>$this->getDttcadastro()->format("d/m/Y H:i:s")
		));
	}

}

?>