<?php 

class IsYeri
{
	private $id; // kullanici sayi tutulup artan sirada atanacak
	private $adi;
	private $il;
	private $ilce;
	private $adres;
	private $mail;
	private $sifre;
	private $hizmet;
	
	function IsYeri ($mail,$sifre)
	{
		$this -> mail=$mail;
		$this -> sifre=$sifre;
	}
	function setId($id)
	{  
		$this -> id = $id; 
	}
	function getId() 
	{
        return $this->id;
    }
	function getMail() 
	{
        return $this->mail;
    }
	function setAd($ad)
	{  
		$this -> ad = $ad; 
	}
	function getAd() 
	{
        return $this->ad;
    }
	function setIl($il)
	{  
		$this -> il = $il; 
	}
	function getIl() 
	{
        return $this->il;
    }
	function setIlce($ilce)
	{  
		$this -> ilce = $ilce; 
	}
	function getIlce() 
	{
        return $this->ilce;
    }
	function setAdres($adres)
	{  
		$this -> adres = $adres; 
	}
	function getAdres() 
	{
      return  $this -> adres .' '. $this -> ilce.' / '.$this -> il ;
    }
	function setHizmet ($hizmet)
	{
		$this->hizmet = $hizmet;
	}
	function getHizmet ($hizmet)
	{
		return $this->hizmet;
	}
	
	function Kaydet(){
	
	 // veritabani->Kaydol($this) ;
	}
	
}
	// Test 
/*	$s=new IsYeri("buruk61","1234");
	$s->setAd("Buruk Holding");
	$s->setIl("Trabzon ");
	$s->setIlce("Akçaabat");
	$s->setAdres("Salacýk Mahallesi Serna Caddesi Buruklar Sokak Buruk Aptmaný No:1/15 ");
	print_r($s->getAd() );
	print_r("<br/>");
	print_r($s->getIl());
	print_r("<br/>");
	print_r($s->getIlce());
	print_r("<br/>");
	print_r($s->getAdres());
	print_r("<br/>");
	print_r("ÝD : ");print_r($s->getId());
	print_r("<br/>");
	print_r("Kullaniciadi : ");print_r($s->getKullaniciadi());
	*/
?>