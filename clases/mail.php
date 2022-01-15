<?php

	class Mail {

	// ATRIBUTOS
	private $email;
	private $nombre;


	// MÉTODOS
	public function setEmail($ema) {
			$this->email = $ema; 
		}

	public function setNombre($nom) {
			$this->nombre = $nom; 
		}

	public function getEmail() {
			return $this->email; 
		}

	public function getNombre() {
			return $this->nombre; 
		}

	}	

?>