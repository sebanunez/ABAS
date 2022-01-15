<?php

	class Localidad {

	// ATRIBUTOS
	private $codigo;
	private $nombre;


	// MÉTODOS
	public function setCodigo($cod) {
			$this->codigo = $cod; 
		}

	public function setNombre($nom) {
			$this->nombre = $nom; 
		}

	public function getCodigo() {
			return $this->codigo; 
		}

	public function getNombre() {
			return $this->nombre; 
		}

	}	

?>