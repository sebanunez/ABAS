<?php

	class Servicio {

	// ATRIBUTOS
	private $desayuno;
	private $almuerzo;
	private $merienda;
	private $cena;
	private $bolson;
	private $descripcion;
	private $horario;

	// MÉTODOS
	public function setDesayuno($des) {
			$this->desayuno = $des; 
		}

	public function setAlmuerzo($alm) {
			$this->almuerzo = $alm; 
		}

	public function setMerienda($mer) {
			$this->merienda = $mer; 
		}

	public function setCena($cen) {
			$this->cena = $cen; 
		}

	public function setBolson($bol) {
			$this->bolson = $bol; 
		}

	public function setDescripcion($desc) {
			$this->descripcion = $desc; 
		}

	public function setHorario($hor) {
			$this->horario = $hor; 
		}

	public function getDesayuno() {
			return $this->desayuno; 
		}

	public function getAlmuerzo() {
			return $this->almuerzo; 
		}

	public function getMerienda() {
			return $this->merienda; 
		}

	public function getCena() {
			return $this->cena; 
		}

	public function getBolson() {
			return $this->bolson; 
		}

	public function getDescripcion() {
			return $this->descripcion; 
		}

	public function getHorario() {
			return $this->horario; 
		}

	}	

?>