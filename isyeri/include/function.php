<?php
	
	require_once("../../include/config.php");

	function sayfa_getir()
	{
		$sayfa_adi=@$_GET["sayfa"];
		if($sayfa_adi=="profil"){
			include_once("profil.php");
		}
		else if($sayfa_adi=="hakkinda"){
			include_once("hakkinda.php");
		}
		else if($sayfa_adi=="projeler"){
			include_once("projeler.php");
		}
		else if($sayfa_adi=="sosyalhesaplar"){
			include_once("sosyalhesaplar.php");
		}
		else
		{
		  include_once("profil.php");
		}
	}

	function temizle($text)
	{
		$text =htmlspecialchars($text);
		//...diðer temizleme iþlemleri
		return $text;
	}

	
	

?>