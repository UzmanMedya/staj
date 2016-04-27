<?php
	
	require_once("config.php");

	function sayfa_getir()
	{
		$sayfa_adi=@$_GET["sayfa"];
		if($sayfa_adi=="uyeol"){
			include_once("uyeol.php");
		}
		else if($sayfa_adi=="giris"){
			include_once("giris.php");
		}
		else
		{
			//slaydır çağırılacak
		}
	}

	function temizle($text)
	{
		$text =htmlspecialchars($text);
		//...diğer temizleme işlemleri
		return $text;
	}

	function OgrenciKayit($ogr)
	{
		global $conn;
		$query ="";
		$result =mysqli_query($conn,$query);
		if ($result) {
			//kaydedildi.
		}else
		{
			//Kaydedilemedi
		}
	}
	function girisYap($mail,$sifre){
		$mail=temizle($mail);
		$sifre=MD5($sifre);
		global $conn;
		$query ="select * from uyeol_login where mail='$mail' and parola='$sifre' and onay=1";
		
		$sonuc =mysqli_query($conn,$query);
		$sayi=@mysqli_num_rows($sonuc);
		if($sayi>0){
			$array=mysqli_fetch_array($sonuc);
			$rol=$array["rolu"];
			$mail=$array["mail"];
			$id=$array["id"];
			if($rol=="öğrenci"){
				$query ="select * from  ogrenci where login_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				$array=mysqli_fetch_array($sonuc);
			
				$_SESSION["staj"]=new Session($array["login_id"],$array["adi"],$array["soyadi"],$array["mail"],"öğrenci");
				printf( $_SESSION["staj"]);
			}
			if($rol=="akademisyen"){
				$query ="select * from  akademisyen where login_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				$array=mysqli_fetch_array($sonuc);
				
				$_SESSION["staj"]=new Session($array["login_id"],$array["ad"],$array["soyad"],$rol,$mail);
				header("Location: akademisyen/index.php");
			}
			if($rol=="isyeri"){
				$query ="select * from  isyeri where login_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				$array=mysqli_fetch_array($sonuc);
			
				$_SESSION["staj"]=new Session($array["login_id"],$array["adi"],$array["soyadi"],$array["mail"],"isyeri");
					printf( $_SESSION["staj"]);
			}
		}
		}
		
	
	

?>