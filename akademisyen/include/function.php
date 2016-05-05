<?php
	require_once("../include/config.php");
	require_once("../session.php");
	
	session_start();
	
	function sosyalHesaplarKayder()
	{
		global $conn;
		$facebook =temizle($_POST["facebook"]);
		$gmail =temizle($_POST["gmail"]);
		$github =temizle($_POST["github"]);
		$website =temizle($_POST["websitesi"]);
		$tel =temizle($_POST["tel"]);
		$user_id =$_SESSION["staj"]->getID();
		
		
		$query ="INSERT INTO tbl_iletisim(facebook,gmail,github,web_site,tel,user_id) 
						VALUES ('$facebook','$gmail','$github','$website','$tel',$user_id)";
		$result =mysqli_query($conn,$query);
		if ($result) {
			return "Bilgiler Kaydedildi";
		}else
		{
			return "Bi Hata Oluştu Bilgiler Kaydedildi";
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

	function temizle($text)
	{
		$text =htmlspecialchars($text);
		//...diğer temizleme işlemleri
		return $text;
	}

?>