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
			include_once("include/slider.php");
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
		$query ="select * from tbl_kullanici where mail='$mail' and parola='$sifre' and onay=1";
		
		$sonuc =mysqli_query($conn,$query);
		$sayi=@mysqli_num_rows($sonuc);
		if($sayi>0){
			$array=mysqli_fetch_array($sonuc);
			$rol=$array["rol"];
			$mail=$array["mail"];
			$id=$array["id"];
			if($rol=="1"){
				$query ="select * from  tbl_ogrenci where login_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				$array=mysqli_fetch_array($sonuc);
			
				$_SESSION["staj"]=new Session($array["user_id"],$array["adi"],$array["soyadi"],$array["mail"],"öğrenci");
				printf( $_SESSION["staj"]);
			}
			if($rol=="2"){
				$query ="select * from  tbl_akademisyen where user_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				$array=mysqli_fetch_array($sonuc);
				
				$_SESSION["staj"]=new Session($array["user_id"],$array["ad"],$array["soyad"],$rol,$mail);
				header("Location: akademisyen/index.php");
			}
			if($rol=="3"){
				$query ="select * from  tbl_isyeri where user_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				$array=mysqli_fetch_array($sonuc);
			
				$_SESSION["staj"]=new Session($array["user_id"],$array["adi"],$array["adi"],$array["aciklama"],"isyeri");
					printf( $_SESSION["staj"]);
			}
		}
		}
		
		function kayitOlOgrenci($ogrenci){
		 //
		}
		function kayitOlAkademisyen($akademisyen){
		 //
		}
		function kayitOlIsYeri($isyeri){
		 //
		}
		
		
		
	
	

?>