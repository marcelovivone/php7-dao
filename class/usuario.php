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