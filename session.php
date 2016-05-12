<?php
	/**
	*  
	*/
	class Session
	{
		private $id;
		private $adi;
		private $soyadi;
		private $mail;
		private $yetki;
		private $bildirim;
		
		function __construct($id,$adi,$soyadi,$mail,$yetki)
		{
			$this->id =$id;
			$this->adi =$adi;
			$this->soyadi =$soyadi;
			$this->mail =$mail;
			$this->yetki =$yetki;	
		}

		function getID()
		{
			return $this->id;
		}

		function getAdi()
		{
			return $this->adi;
		}

		function getSoyadi()
		{
			return $this->soyadi;
		}

		function getMail()
		{
			return $this->mail;
		}
		function getYetki()
		{
			return $this->yetki;
		}
		
		function getBildirim()
		{
			return $this->bildirim;
		}
		function setBildirim($bildirim_sayisi)
		{
			return $this->bildirim=$bildirim_sayisi;
		}
			
	}
	
	
?>