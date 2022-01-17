<?php

	class Usuario {

	// ATRIBUTOS
	private $nombre;
	private $clave;
	private $rol;
	private $dni;
	private $apynom;

	// MÉTODOS
	public function setNombre($nom) {
			$this->nombre = $nom; 
		}

	public function setClave($cla) {
			$this->clave = $cla; 
		}

	public function setRol($ro) {
			$this->rol = $ro; 
		}

	public function setDni($doc) {
			$this->dni = $doc; 
		}

	public function setApyNom($ape) {
			$this->apynom = $ape; 
		}

	public function getNombre() {
			return $this->nombre; 
		}

	public function getClave() {
			return $this->clave; 
		}

	public function getRol() {
			return $this->rol; 
		}

	public function getDni() {
			return $this->dni; 
		}

	public function getApyNom() {
			return $this->apynom; 
		}
	}	

?>