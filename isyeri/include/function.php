<?php
	
	require_once("../include/config.php");
	require_once("../session.php");
	session_start();

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
		  include_once("profil.php");
		}
	}

	function temizle($text)
	{
		$text =htmlspecialchars($text);
		//...diðer temizleme iþlemleri
		return $text;
	}

	function session_kontrol()
	{
		// session atanmamş sa login.php ye yönlendir
		if(!isset($_SESSION["staj"]) || $_SESSION["staj"]->getYetki() != 3){

			header("Location: ../index.php?sayfa=giris");
		}
	}
	

?>