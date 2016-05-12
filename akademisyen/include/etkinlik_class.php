<?php

class Etkinlik{
	private $baslik;
	private $icerik;
	private $id;
	
	function getBaslik(){
		return $this->baslik;
	}
	function setBaslik($baslik){
		$this->baslik=$baslik;
	}

	function getIcerik(){
		return $this->icerik;
	}
	function setIcerik($icerik){
		$this->icerik=$icerik;
	}function getId(){
		return $this->id;
	}
	function setId($id){
		$this->id=$id;
	}
}



?>