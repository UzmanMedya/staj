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
	private $k_adres;
	
	
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
      return  $this->okulNu;
    }
	function setFotoraf($fotoraf)
	{  
		$this -> fotoraf = $fotoraf; 
	}
	function getFotoraf() 
	{
      return  $this->fotoraf;
    }
	function setTelNu($telNu)
	{  
		$this -> telNu = $telNu; 
	}
	function getTelNu() 
	{
       return $this->telNu;
    }
	function setCinsiyet($cinsiyet)
	{  
		$this -> cinsiyet = $cinsiyet; 
	}
	function getCinsiyet() 
	{
      return  $this->cinsiyet;
    }
	function setKalanAdres($kalanAdres)
	{  
		$this -> kalanAdres = $kalanAdres; 
	}
	function getKalanAdres() 
	{
      return  $this->kalanAdres;
    }
	function setTcKimNo($tcKimNo)
	{  
		$this -> tcKimNo = $tcKimNo; 
	}
	function getTcKimNo() 
	{
      return  $this->tcKimNo;
    }
	function setDogumTarihi($dogumTarihi)
	{  
		$this -> dogumTarihi = $dogumTarihi; 
	}
	function getDogumTarihi() 
	{
       return $this->dogumTarihi;
    }
	function setMail($mail)
	{  
		$this -> mail = $mail; 
	}
	function getMail() 
	{
        return $this->mail;
    }
	function setFakulte($fakulte)
	{  
		$this -> fakulte = $fakulte; 
	}
	function getFakulte() 
	{
       return $this->fakulte;
    }	
	function setUniversite($universite)
	{  
		$this -> universite = $universite; 
	}
	function getUniversite() 
	{
       return $this->universite;
    }
	function setSinif($sinif)
	{  
		$this -> sinif = $sinif; 
	}
	function getSinif() 
	{
      return  $this->sinif;
    }
	function setIlce($ilce)
	{  
		$this -> ilce = $ilce; 
	}
	function getIlce() 
	{
       return $this->ilce;
    }
	function setIl($il)
	{  
		$this -> il = $il; 
	}
	function getIl() 
	{
      return  $this->il;
    }
	function setParola($parola)
	{  
		$this -> parola = $parola; 
	}
	function getParola() 
	{
      return  $this->parola;
    }
	
	function setAdres($adres)
	{  
		$this -> k_adres = $adres; 
	}
	function getAdres() 
	{
      return  $this->k_adres;
    }
	
}

?>