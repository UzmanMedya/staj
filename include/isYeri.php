<?php 

class IsYeri
{
	private $id; // kullanici sayi tutulup artan sirada atanacak
	private $adi;
	private $il;
	private $ilce;
	private $adres;
	private $hizmet;
	private $mail;
	private $parola;
	

	function getId(){
        return $this->id;
    }
	function setId($id){  
		$this -> id = $id; 
	}
	
	function getAd(){
        return $this->adi;
    }
	function setAd($adi){  
		$this -> adi = $adi; 
	}
	
	function getIl(){
        return $this->il;
    }
	function setIl($il){  
		$this -> il = $il; 
	}
	
	function getIlce(){
        return $this->ilce;
    }
	function setIlce($ilce){  
		$this -> ilce = $ilce; 
	}
	
	function getAdres(){
      return  $this -> adres .' '. $this -> ilce.' / '.$this -> il ;
    }
	function setAdres($adres){  
		$this -> adres = $adres; 
	}
	
	function getHizmet (){
		return $this->hizmet;
	}
	function setHizmet ($hizmet){
		$this->hizmet = $hizmet;
	}
	
	function getMail(){
        return $this->mail;
    }
	function setMail ($mail){
		$this->mail=$mail;
	}
	
	function getParola(){
		return $this->parola;
	}
	function setParola($parola){
		$this->parola=$parola;
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