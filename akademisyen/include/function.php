<?php
	require_once("../include/config.php");
	require_once("../session.php");
	session_start();
	
	function sosyalHesaplarGuncelle($adi,$soyad,$hesap)
	{
		global $conn;
		$query ="update ";
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
		else if($sayfa_adi=="akademisyen"){
			include_once("include/sosyalHesaplar.php");
		}
		else
		{
		  include_once("include/profil.php");
		}
	}

	function session_kontrol()
	{
		// session atanmamş sa login.php ye yönlendir
		if(!isset($_SESSION["staj"]) || $_SESSION["staj"]->getYetki() != 2){

			header("Location: ../index.php?sayfa=giris");
		}
	}



?>