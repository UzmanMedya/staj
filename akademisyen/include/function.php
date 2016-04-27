<?php
	require_once("../include/config.php");
	
	function AkademisyenGuncelle($akademisyen)
	{
		global $conn;
		$query ="";
		$result =mysql_query($query,$conn);
		if ($result) {
			//kaydedildi.
		}else
		{
			//Kaydedilemedi
		}
	}
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
		else if($sayfa_adi=="iletisim"){
			include_once("include/sosyalHesaplar.php");
		}
		else
		{
			
		  include_once("include/profil.php");
		}
	}


?>