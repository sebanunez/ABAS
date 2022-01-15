<?php

	require_once ("institucion.php");

	class Solicitante extends Institucion {

		// ATRIBUTOS
		private $codigo;
		private $estado;
		private $fechaAlta;
		private $fechaActivo;
		private $fechaBaja;


		// MÉTODOS
		public function setCodigo($cod) {
			$this->codigo = $cod; 
		}

		public function setEstado($est) {
			$this->estado = $est; 
		}

		public function setFechaAlta($fec) {
			$this->fechaAlta = $fec; 
		}

		public function setFechaActivo($fec) {
			$this->fechaAlta = $fec; 
		}

		public function setFechaBaja($fec) {
			$this->fechaBaja = $fec; 
		}

		public function getCodigo() {
			return $this->codigo; 
		}

		public function getEstado() {
			return $this->estado; 
		}

		public function getFechaAlta() {
			return $this->fechaAlta; 
		}

		public function getFechaActivo() {
			return $this->fechaActivo; 
		}

		public function getFechaBaja() {
			return $this->fechaBaja; 
		}

	}

?>