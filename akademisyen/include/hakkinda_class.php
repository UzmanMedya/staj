<?php

class Hakkinda{
	private $baslik;
	private $icerik;
	
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
	}
}



?>