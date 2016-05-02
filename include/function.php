<?php
	
	require_once("include/config.php");
 
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
	function girisYap($mail,$sifre)
	{
		$mail=temizle($mail);
		$sifre=MD5($sifre);
		global $conn;
		$query ="select * from tbl_kullanici where mail='$mail' and parola='$sifre' and onay=1";
		
		$sonuc =mysqli_query($conn,$query);
		$sayi=@mysqli_num_rows($sonuc);
		if($sayi>0)
		{
			$array=mysqli_fetch_array($sonuc);
			$rol=$array["rol"];
			$mail=$array["mail"];
			$id=$array["id"];
			if($rol=="1")
			{
				$query ="select * from  tbl_ogrenci where login_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				$array=mysqli_fetch_array($sonuc);
			
				$_SESSION["staj"]=new Session($array["user_id"],$array["adi"],$array["soyadi"],$array["mail"],"öğrenci");
				printf( $_SESSION["staj"]);
			}
			if($rol=="2")
			{
				$query ="select * from  tbl_akademisyen where user_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				$array=mysqli_fetch_array($sonuc);
				
				$_SESSION["staj"]=new Session($array["user_id"],$array["ad"],$array["soyad"],$rol,$mail);
				header("Location: akademisyen/index.php");
			}
			if($rol=="3")
			{
				$query ="select * from  tbl_isyeri where user_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				$array=mysqli_fetch_array($sonuc);
			
				$_SESSION["staj"]=new Session($array["user_id"],$array["adi"],$array["adi"],$array["aciklama"],"isyeri");
					printf( $_SESSION["staj"]);
			}
		}
	}
		
	function kayitOlOgrenci($ogrenci){
		 //veritabı
	}
	function kayitOlAkademisyen($akademisyen){

	 //veritabı
	}
	
	function kayitOlIsYeri($isyeri){
		 //veritabı
		 
		global $conn;
		$query1 ="INSERT INTO tbl_kullanici('mail', 'parola', 'rol', 'onay')
		VALUES ('".$isyeri->getMail()."','".$isyeri->getParola()."','".$isyeri->getRol()."','0')";
		$sonuc1=mysqli_query($conn,$query1);
		if($sonuc1){
			$id_gelen = mysqli_insert_id($conn);
			echo "eklendi";
			
			$query2 ="INSERT INTO tbl_isyeri('adi', 'il', 'ilce', 'adres', 'aciklama', 'user_id')
			VALUES ('".$isyeri->getAd()."','".$isyeri->getIl()."','".$isyeri->getIlce()."','".$isyeri->getAdres()."','".$isyeri->getHizmet()."',,'".$id_gelen."')";
			$sonuc2=mysqli_query($conn,$query2)
			if($sonuc2){
				echo "eklendi";
			}
			else{
				echo "hata!";
			}
		}
		else{
			echo "hata!";
		}
	}
		
	function il_listele()
	{
		global $conn;
		$query = "select * from tbl_il";
		$sonuc = mysqli_query($conn,$query);
		if($sonuc)
		{	
			while ($row = mysqli_fetch_array($sonuc)) {
				echo "<option value=".$row['id'].">".$row['il']."</option>";
			}
		}
	}
	
	function ilce_listele($il_id)
	{
		global $conn;
		$query ="select * from tbl_ilce where il_id = $il_id";
		$sonuc =mysqli_query($conn,$query);
		if($sonuc)
		{
			echo "<option value='-1'>ilçe seç</option>";
			while ($row = mysqli_fetch_array($sonuc)) {
				echo "<option value=".$row['id'].">".$row['ilce']."</option>";
			}
		}
	}
	

	

?>