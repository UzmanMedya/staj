<?php
	
	require_once("include/config.php");
	session_start();

	function sayfa_getir()
	{
		$sayfa_adi=@$_GET["sayfa"];
		if($sayfa_adi=="uyeol"){
			include_once("uyeol.php");
		}
		else if($sayfa_adi=="giris"){
			include_once("giris.php");
		}
		else if($sayfa_adi=="duyuru"){
			$id=@$_GET["id"];
			//echo "id= ".$id;
			include_once("include/duyuru_detay.php");
		}
		else if($sayfa_adi=="etkinlik"){
			$id=@$_GET["id"];
			//echo "id= ".$id;
			include_once("include/etkinlik_detay.php");
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
		if(@mysqli_num_rows($sonuc) ==1)
		{
			$row=mysqli_fetch_array($sonuc);
			$rol=$row["rol"];
			$mail=$row["mail"];
			$id=$row["id"];
			$row_u;
			$adi ;
			$soyadi;
			if($rol=="1")
			{
				$row_u =KullaniciSorgu($id,"tbl_ogrenci");
				$adi =$row_u["adi"];
				$soyadi =$row_u["soyadi"];
					
			}
			else if($rol=="2")
			{
				$row_u =KullaniciSorgu($id,"tbl_akademisyen");
				$adi =$row_u["ad"];
				$soyadi =$row_u["soyad"];
			}
			else if($rol=="3")
			{
				$row_u =KullaniciSorgu($id,"tbl_isyeri");
				$adi =$row_u["adi"];
				$soyadi ="";
			}
			
			if(!is_null($row_u))
			{
				$user=new Session($id,$adi,$soyadi,$mail,$rol); //array("ID"=>$id,"Adi"=>$adi,"Soyadi"=>$soyadi,"Mail"=>$mail,"Rol"=>$rol);
				$_SESSION["staj"] =$user;
				if($rol == "1")
				{
					header("Location: ogrenci/index.php");
				}else if($rol == "2")
				{
					header("Location: akademisyen/index.php");
				}else if($rol == "3")
				{
					header("Location: isyeri/index.php");
				}
			}else
			{
				return "Bi hata oluştu tekrar deneyin.";
			}
		}else {
			return "Kullanıcı kayıtlıdeğil veya Onaylanmamış";
		}
	}

	function KullaniciSorgu($id,$tbl)
	{
		global $conn;
		$query ="select * from  $tbl where user_id=$id";
		$sonuc =mysqli_query($conn,$query);
		return mysqli_fetch_array($sonuc);
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
		{//Okul no veri alanı db de yok
			$query ="INSERT INTO tbl_ogrenci(adi, soyadi, cinsiyet, d_tarihi, il, ilce,adres,user_id)
			VALUES ('".$ogrenci->getAd()."','".$ogrenci->getSoyad()."',".$ogrenci->getCinsiyet().",'".$ogrenci->getDogumTarihi()."',".$ogrenci->getIl().",".$ogrenci->getIlce().",'".$ogrenci->getAdres()."',$id)";
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
				echo "eklendi";
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
	function duyuru_getir($id){
		global $conn;
		$sorgu="select*from tbl_duyuru where id=".$id;
		$sonuc=mysqli_query($conn,$sorgu);
		$sql=mysqli_fetch_array($sonuc);
		return $sql;
	}
	function etkinlik_getir($id){
		global $conn;
		$sorgu="select*from tbl_etkinlik where id=".$id;
		$sonuc=mysqli_query($conn,$sorgu);
		$sql=mysqli_fetch_array($sonuc);
		return $sql;
	}
	

	

?>