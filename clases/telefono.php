<?php

	class Telefono {

	// ATRIBUTOS
	private $numero;
	private $tipo;
	private $nombre;


	// MÉTODOS
	public function setNumero($num) {
			$this->numero = $num; 
		}

	public function setTipo($tip) {
			$this->tipo = $tip; 
		}

	public function setNombre($nom) {
			$this->nombre = $nom; 
		}

	public function getNumero() {
			return $this->numero; 
		}

	public function getTipo() {
			return $this->tipo; 
		}

	public function getNombre() {
			return $this->nombre; 
		}

	}	

?>