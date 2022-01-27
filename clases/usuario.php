<?php

	class Usuario {

	// ATRIBUTOS
	private $nombre;
	private $clave;
	private $rol;
	private $dni;
	private $apynom;
	private $domicilio;
	private $telFijo;
	private $telMovil;
	private $email;
	private $estado;

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

	public function setDomicilio($domicilio) {
			$this->domicilio = $domicilio; 
		}

	public function setTelFijo($telFijo) {
			$this->telFijo = $telFijo; 
		}

	public function setTelMovil($telMovil) {
			$this->telMovil = $telMovil; 
		}

	public function setMail($mail) {
			$this->email = $mail; 
		}

	public function setEstado($estado) {
			$this->estado = $estado; 
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
		
	public function getDomicilio() {
			return $this->domicilio; 
		}

	public function getTelFijo() {
			return $this->telFijo;
		}

	public function getTelMovil() {
			return $this->telMovil;
		}

	public function getMail() {
			return $this->email; 
		}

	public function getEstado() {
			return $this->estado; 
		}
	
	}
?>