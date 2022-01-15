<?php

	class Direccion {

	// ATRIBUTOS
	private $calle;
	private $numero;
	private $entre;
	private $barrio;


	// MÉTODOS
	public function setCalle($cal) {
			$this->calle = $cal; 
		}

	public function setNumero($num) {
			$this->numero = $num; 
		}

	public function setEntre($ent) {
			$this->entre = $ent; 
		}

	public function setBarrio($bar) {
			$this->barrio = $bar; 
		}

	public function getCalle() {
			return $this->calle; 
		}

	public function getNumero() {
			return $this->numero; 
		}

	public function getEntre() {
			return $this->entre; 
		}

	public function getBarrio() {
			return $this->barrio; 
		}

	}	

?>