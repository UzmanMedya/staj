<?php
	class hakkinda
	{
		private $hakkindaId;
		private $kullaniciId;
		private $onsoz;
		private $icerik;
		
		function hakkinda(){
			
		}
		
		function gethakkindaId(){
			return $this->hakkindaId;
		}
		function sethakkindaId($hakkindaId){
			$this->hakkindaId=$hakkindaId;
		}
		
		function getkullaniciId(){
			return $this->kullaniciId;
		}
		function setkullaniciId($kullaniciId){
			$this->kullaniciId=$kullaniciId;
		}
		
		function getonsoz(){
			return $this->onsoz;
		}
		function setonsoz($onsoz){
			$this->onsoz=$onsoz;
		}
		
		function geticerik(){
			return $this->icerik;
		}
		function seticerik($icerik){
			$this->icerik=$icerik;
		}
		
		
	}
	
?>