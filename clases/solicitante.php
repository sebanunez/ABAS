<?php

	require_once ("institucion.php");

	class Solicitante extends Institucion {

		// ATRIBUTOS
		private $codigo;
		private $fecha;
		private $estado;


		// MÉTODOS
		public function setCodigo($cod) {
			$this->codigo = $cod; 
		}

		public function setFecha($fec) {
			$this->fecha = $fec; 
		}

		public function setEstado($est) {
			$this->estado = $est; 
		}

		public function getCodigo() {
			return $this->codigo; 
		}

		public function getFecha() {
			return $this->fecha; 
		}

		public function getEstado() {
			return $this->estado; 
		}

	}

?>