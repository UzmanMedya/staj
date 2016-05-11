<?php 
	require_once("../include/config.php");
	require_once("../session.php");
	
	session_start();
	
	function sosyalHesaplarKaydet()
	{
		global $conn;
		$facebook =temizle($_POST["facebook"]);
		$gmail =temizle($_POST["gmail"]);
		$github =temizle($_POST["github"]);
		$website =temizle($_POST["websitesi"]);
		$tel =temizle($_POST["tel"]);
		$user_id =$_SESSION["staj"]->getID();
		
		$id =temizle($_POST["id"]);
		$query ="";
		if($id == -1)
		{
			 $query="INSERT INTO tbl_iletisim(facebook,gmail,github,web_site,tel,user_id) 
						VALUES ('$facebook','$gmail','$github','$website','$tel',$user_id)";
		}else
		{
			 $query="UPDATE tbl_iletisim SET facebook='$facebook',gmail ='$gmail'
			 		,github ='$github',web_site ='$website',tel ='$tel' WHERE $id";
		}
		
		
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
		else if($sayfa_adi=="akademisyenGor"){
			include_once("include/akademisyenGor.php");
		}
		else if($sayfa_adi=="ogrenciGor"){
			include_once("../ogrenci/include/ogrenciGor.php");
		}
		else if($sayfa_adi=="isyeriGor"){
			include_once("../isyeri/include/isyeriGor.php");
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
	function projeEkle($proje)
	{
		 global $conn;
		
		$sorgu=mysqli_query($conn," SELECT * FROM tbl_akademisyen  WHERE  user_id=".$proje->getLoginId()."");
		$say=mysqli_num_rows($sorgu);
       // echo "say".$say;
        if($say>0) 
		{
			 
			$sorgu2=mysqli_query($conn,"INSERT INTO  tbl_proje ( p_adi, p_icerik,tarih,user_id) VALUES
			('".$proje->getProjeAdi()."','".$proje->getProjeIcerik()."','".$proje->getTarih()."','".$proje->getLoginId()."')");
			if($sorgu2)
			{
				echo "
                <script>  alert('Başalı Bir Şekilde Proje Eklendi...');
								window.location='index.php?sayfa=projeler';
		        </script> ";
			}
			else{
				echo "
                <script>  alert('Ekleme İşlemi Başarısız...');
		        </script> ";
			}
		}
		else{
			echo "hatalı";
		}
		
	}
	function projeDuzenle($proje)
	{
		 global $conn;
		
		$sorgu=mysqli_query($conn," SELECT * FROM tbl_akademisyen  WHERE  user_id=".$proje->getLoginId()."");
		$say=mysqli_num_rows($sorgu);
       // echo "say".$say;
        if($say>0) 
		{
			
			$sorgu2=mysqli_query($conn," UPDATE tbl_proje SET id=".$proje->getId().",p_adi='".$proje->getProjeAdi()."',p_icerik='".$proje->getProjeIcerik()."',tarih='".$proje->getTarih()."',user_id='".$proje->getLoginId()."' WHERE id=".$proje->getId()." ");
			if($sorgu2)
			{
				echo "
                <script>  alert('Başalı Bir Şekilde Proje Güncellendi...');
				window.location='index.php?sayfa=projeler';
		        </script> ";
			}
			echo "Proje =".$proje->getLoginId()."adi ".$proje->getProjeAdi()." icerik ".$proje->getProjeIcerik()." tarih ".$proje->getTarih()."ID=".$proje->getId();
			echo "SORGU =".$sorgu2;
		}
		else{
			echo "hatalı";
		}
		
	}
	function projeListele($proje)
	{
		 global $conn;
		
		$sorgu=mysqli_query($conn," SELECT * FROM tbl_akademisyen  WHERE  user_id=".$proje->getLoginId()."");
		$say=mysqli_num_rows($sorgu);
       // echo "say".$say;
        if($say>0) 
		{
			    $user=mysqli_fetch_array($sorgu);
			$sorgu2=mysqli_query($conn,"SELECT * FROM tbl_proje 	 WHERE  user_id=".$proje->getLoginId()." ");

			while($kayit=mysqli_fetch_array($sorgu2)){
			echo '
				<link rel="stylesheet" type="text/css" href="../css/projeler.css">
				<div id="proje-content">
				<label id="proje-baslik">'.$kayit["p_adi"].' </label><br/><br/>
				<label id="proje-icerik">'.$kayit["p_icerik"] .'</label><br>
				<label id="proje-ekleyen">'.$user["adi"].'</label><label id="proje-ekleyen">Ekleyen : </label>
				<label id="proje-tarih">'.$kayit["tarih"].'</label><label id="proje-tarih">Tarih :</label>
			
				<label class="proje-button">
				<form name="form1" method="post" action="">
				<input type="text" style="visibility: hidden; position:absolute;"  name="projeID"  value="'.@$kayit["id"].'">
				<input type="submit" value="Projeyi Sil " name="sil" id="sil" class="buttonSil" >
				</form>
				</label>
				
				<label class="proje-button">
				<form name="form1" method="post" action="">
				<input type="text"  style="visibility: hidden; position:absolute;"  id="proje_hakkinda_onsoz" name="isimi" value="'.$kayit["p_adi"].'"> 
				<input type="date"  style="visibility: hidden; position:absolute;"  name="tarih" class="form-control" value="'.$kayit["tarih"].'">
				<textarea id="proje_hakkinda_textarea"  name="icerik"  style="visibility: hidden; position:absolute;" >'.$kayit["p_icerik"] .'</textarea>
				<input type="text" style="visibility: hidden; position:absolute;"  name="projeID"  value="'.$proje->getLoginId().'">
				<input type="text" style="visibility: hidden; position:absolute;"  name="ID"  value="'.$kayit["id"].'">
				<input type="submit" value="Projeyi Düzenle " name="gonder" id="duzenle" class="buttonDuzenle" >
				</form>
				</label>
				
				</div>';
			}
		}
		else{
			echo "hatalı";
		}
		
	}
	
	function projeSil($proje)
	{
		 global $conn;
		
		$sorgu=mysqli_query($conn," SELECT * FROM tbl_proje  WHERE  user_id=".$proje->getLoginId()."");
		$say=mysqli_num_rows($sorgu);
       // echo "say".$say;
        if($say>0) 
		{
			    
			$sorgu2=mysqli_query($conn,"DELETE FROM tbl_proje WHERE  id=".$proje->getId()." ");
			if($sorgu2)
			{
				echo "
                <script>  alert('Başalı Bir Şekilde Silidi...');
		        </script> ";
			}
			else{
				echo "
                <script>  alert('Silme İşlemi Başarısız...');
		        </script> ";
			}
		}
		else{
			echo "hatalı";
		}
		
	}
	function hakkinda_ekle($hakkinda){
		global $conn;
		$kontrol="SELECT*FROM tbl_hakkimizda where user_id= ".$_SESSION["staj"]->getId();
		$kont=mysqli_query($conn,$kontrol);
		$num_rows = mysqli_num_rows($kont);
	
		if($num_rows==0){
			$tarih=date('Ymd');
			$query="INSERT INTO tbl_hakkimizda(user_id, baslik, icerik, tarih)
			VALUES ('".$_SESSION["staj"]->getId()."','".str_replace("'","\'",$hakkinda->getBaslik())."','".str_replace("'","\'",$hakkinda->getIcerik())."',$tarih.)";
			$sonuc=mysqli_query($conn,$query);
		}
		else if($num_rows==1){
			$tarih=date('Ymd');
			$query="UPDATE tbl_hakkimizda SET baslik='".str_replace("'","\'",$hakkinda->getBaslik())."',icerik='".str_replace("'","\'",$hakkinda->getIcerik())."',tarih='".$tarih."' 
			WHERE user_id='".$_SESSION["staj"]->getId()."'";
			$sonuc=mysqli_query($conn,$query);
		}
	}
	
	
	function hakkinda_goster(){
		global $conn;
		$query="SELECT user_id, baslik, icerik, tarih FROM tbl_hakkimizda WHERE user_id= ".$_SESSION["staj"]->getId();
		$sorgu=mysqli_query($conn,$query);
		
		$sql=mysqli_fetch_array($sorgu);
		
		return $sql;
	}
	function hakkinda_user_goster(){
		global $conn;
		$query="SELECT mail FROM tbl_kullanici WHERE id= ".$_SESSION["staj"]->getId();
		$sorgu=mysqli_query($conn,$query);
		$sql=mysqli_fetch_array($sorgu);
		return $sql;
	}
	



?>