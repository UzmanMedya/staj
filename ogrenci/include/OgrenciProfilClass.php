<?php 
class Ogrenci
{
	private $id; //sonra bakýlacak
	private $ad;
	private $soyad;
	private $bolum;
	private $fakulte;
	private $universite;
	private $sinif;
	private $okulNu;
	private $fotoraf;
	private $telNu;
	private $cinsiyet;
	private $kalanAdres;
	private $tcKimNo;
	private $dogumTarihi;
	private $mail;
	private $il;
	private $ilce;
	private $parola;
	
	function Ogrenci ()
	{
		
	}
	function getId() 
	{
        return $this->id;
    }
	function setAd($ad)
	{  
		$this -> ad = $ad; 
	}
	function getAd() 
	{
        return $this->ad;
    }
	function setSoyad($soyad)
	{  
		$this -> soyad = $soyad; 
	}
	function getSoyad() 
	{
        return $this->soyad;;
    }
	function setOkulNu($okulNu)
	{  
		$this -> okulNu = $okulNu; 
	}
	function getOkulNu() 
	{
        $this->okulNu;
    }
	function setFotoraf($fotoraf)
	{  
		$this -> fotoraf = $fotoraf; 
	}
	function getFotoraf() 
	{
        $this->fotoraf;
    }
	function setTelNu($telNu)
	{  
		$this -> telNu = $telNu; 
	}
	function getTelNu() 
	{
        $this->telNu;
    }
	function setCinsiyet($cinsiyet)
	{  
		$this -> telNu = $cinsiyet; 
	}
	function getCinsiyet() 
	{
        $this->cinsiyet;
    }
	function setKalanAdres($kalanAdres)
	{  
		$this -> kalanAdres = $kalanAdres; 
	}
	function getKalanAdres() 
	{
        $this->kalanAdres;
    }
	function setTcKimNo($tcKimNo)
	{  
		$this -> tcKimNo = $tcKimNo; 
	}
	function getTcKimNo() 
	{
        $this->tcKimNo;
    }
	function setDogumTarihi($dogumTarihi)
	{  
		$this -> dogumTarihi = $dogumTarihi; 
	}
	function getDogumTarihi() 
	{
        $this->dogumTarihi;
    }
	function setMail($mail)
	{  
		$this -> mail = $mail; 
	}
	function getMail() 
	{
        $this->mail;
    }
	function setFakulte($fakulte)
	{  
		$this -> fakulte = $fakulte; 
	}
	function getFakulte() 
	{
        $this->fakulte;
    }	
	function setUniversite($universite)
	{  
		$this -> universite = $universite; 
	}
	function getUniversite() 
	{
        $this->universite;
    }
	function setSinif($sinif)
	{  
		$this -> sinif = $sinif; 
	}
	function getSinif() 
	{
        $this->sinif;
    }
	function setIlce($ilce)
	{  
		$this -> ilce = $ilce; 
	}
	function getIlce() 
	{
        $this->ilce;
    }
	function setIl($il)
	{  
		$this -> il = $il; 
	}
	function getIl() 
	{
        $this->il;
    }
	function setParola($parola)
	{  
		$this -> parola = $parola; 
	}
	function getParola() 
	{
        $this->parola;
    }
	
	
}

?>