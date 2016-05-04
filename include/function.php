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
				session_start();
				
				printf( $_SESSION["staj"]);
				header("Location: ogrenci/index.php");
			}
			if($rol=="2")
			{
				$query ="select * from  tbl_akademisyen where user_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				$sayi=mysqli_num_rows($sonuc);
				
				$array=mysqli_fetch_array($sonuc);
				
				$nesne=new Session($array["user_id"],$array["ad"],$array["soyad"],$rol,$mail);
				$_SESSION["staj"]=$nesne;
				
				session_start();
				header("Location: akademisyen/index.php");
			}
			if($rol=="3")
			{
				$query ="select * from  tbl_isyeri where user_id='$id' ";
				$sonuc =mysqli_query($conn,$query);
				
				$array=mysqli_fetch_array($sonuc);
			    
				$_SESSION["staj"]=new Session($array["user_id"],$array["adi"],$array["adi"],$array["aciklama"],"isyeri");
				session_start();
				header("Location: isyeri/index.php");
					printf( $_SESSION["staj"]);
			}
		}
	}

		
	function kullanici_ekle($mail,$parola,$rol)
	{
		global $conn;
		$query ="INSERT INTO tbl_kullanici(mail, parola, rol, onay)
		VALUES ('".$mail."','".$parola."',$rol,0)";
		$sonuc=mysqli_query($conn,$query);
		if($sonuc)
		{
			
			return mysqli_insert_id($conn);
		}
		else{
			
			return -1;
		}
	}
	function kayitOlOgrenci($ogrenci){
		 global $conn;
		$id= kullanici_ekle($ogrenci->getMail(),$ogrenci->getParola(),1);

		if($id !=-1)
		{
			$query ="INSERT INTO tbl_ogrenci(adi, soyadi, cinsiyet, d_tarihi, il, ilce,adres,okul_no,user_id)
			VALUES ('".$ogrenci->getAd()."','".$ogrenci->getSoyad()."',".$ogrenci->getCinsiyet().",'".$ogrenci->getDogumTarihi()."',".$ogrenci->getIl().",".$ogrenci->getIlce().",'".$ogrenci->getAdres()."','".$ogrenci->getOkulNu()."',$id)";
			echo $query;
			$sonuc=mysqli_query($conn,$query);
			if($sonuc){
				echo "eklendi";
			}
			else{
				echo "hata!";
			}
			
		}
	}
	function kayitOlAkademisyen($akademisyen){
		 global $conn;
		$id= kullanici_ekle($akademisyen->getMail(),$akademisyen->getParola(),2);
		if($id !=-1)
		{
			$query ="INSERT INTO tbl_akademisyen(ad, soyad, tc, unvan, user_id)
			VALUES ('".$akademisyen->getAdi()."','".$akademisyen->getSoyadi()."','".$akademisyen->getTc()."','".$akademisyen->getUnvan()."',$id)";
			echo $query;
			$sonuc=mysqli_query($conn,$query);
			if($sonuc){
				echo "eklendi";
			}
			else{
				echo "hata!";
			}
			
		}
	}
	
	function kayitOlIsYeri($isyeri){
		global $conn;
		$id=kullanici_ekle($isyeri->getMail(),$isyeri->getParola(),3);
		if($id!=-1)
		{
			$query="INSERT INTO tbl_isyeri(adi, il, ilce, adres, aciklama, user_id)
			VALUES ('".$isyeri->getAd()."','".$isyeri->getIl()."','".$isyeri->getIlce()."','".$isyeri->getAdres()."','".$isyeri->getHizmet()."',$id)";
			echo $query;
			$sonuc=mysqli_query($conn,$query);
			if($sonuc){
				echo "eklendi"
			}
			else{
				echo "hata!";
			}
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