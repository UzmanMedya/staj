<?php
	class Duyuru
	{
		private $DuyuruId;
		private $Ekleyenıd;
		private $Başlık;
		private $Icerik;
		
		function Duyuru($Ekid,$Başlık,$Icerik){
			$this->Ekleyenıd=$Ekid
			$this->Başlık=$Başlık
			$this->Icerik=$Icerik
			
			
		}
		
		
		function getDuyuruId(){
			return $this->DuyuruId;
		}
		function setDuyuruId($DuyuruId){
			$this->DuyuruId=$DuyuruId;
		}
		
		function getEkleyenıd(){
			return $this->Ekleyenıd;
		}
		function setEkleyenıd($Ekleyenıd){
			$this->Ekleyenıd=$Ekleyenıd;
		}
		
		function getBaşlık(){
			return $this->Başlık;
		}
		function setBaşlık($Başlık){
			$this->Başlık=$Başlık;
		}
		
		function getIcerik(){
			return $this->Icerik;
		}
		function setIcerik($Icerik){
			$this->Icerik=$Icerik;
		}

	}
		

?>