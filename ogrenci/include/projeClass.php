<?php
class Proje {
   private $id;
   private $p_adi;
   private $p_icerik;
   private $tarih;
   private $id_user;
   
   
   function Proje ($id,$p_adi,$p_icerik,$tarih,$id_user)
	{
		$this -> id=$id;
		$this -> p_adi=$p_adi;
		$this -> p_icerik=$p_icerik;
		$this -> tarih=$tarih;
		$this -> id_user=$id_user;
		
	}
	function getId() 
	{
        return $this->id;
    }
	function setId($id)
	{  
		$this -> id = $id; 
	}
	function getLoginId() 
	{
        return $id_user->id_user;
    }
	function setLoginId($id_user)
	{  
		$this -> id_user = $id_user; 
	}
	function getProjeAdi() 
	{
        return $this->p_adi;;
    }
	function setProjeAdi($p_adi)
	{  
		$this -> p_adi = $p_adi; 
	}
	function getProjeIcerik() 
	{
        $this->p_icerik;
    }
	function setProjeIcerik($p_icerik)
	{  
		$this -> p_icerik = $p_icerik; 
	}
	function getTarih() 
	{
        $this->tarih;
    }
	function setTarih($tarih)
	{  
		$this -> tarih = $tarih; 
	}
	

   
}

?>