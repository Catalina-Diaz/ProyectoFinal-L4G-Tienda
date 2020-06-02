<?php 
	/*
	*
	*
	*/
	class Usuario{
		private $id;
		private $email;
		private $con;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNombre(){
			return $this->coreo;
		}

		public function setNombre($email){
			$this->correo = $email;
		}

		public function getClave(){
			return $this->pasword;
		}

		public function setClave($con){
			$this->pasword = $con;
		}
	}
?>