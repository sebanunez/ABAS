<?php

	class Institucion {

	// ATRIBUTOS
	private $nombre;
	private $referente;


	// MÉTODOS
	public function setNombre($nom) {
			$this->nombre = $nom; 
		}

	public function setReferente($ref) {
			$this->referente = $ref; 
		}

	public function getNombre() {
			return $this->nombre; 
		}

	public function getReferente() {
			return $this->referente; 
		}
	

	}	

?>