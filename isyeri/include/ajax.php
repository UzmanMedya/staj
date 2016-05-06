<?php
	include("../../include/config.php");
	$value=$_POST["value"];
	global $conn;
		$sorgu = "SELECT * FROM tbl_kullanici WHERE adi LIKE '%$value%' ";  
	    $sonuc=mysqli_query($conn,$sorgu);
		 if($sonuc)
		 {
			while($sutun=mysqli_fetch_row($sonuc))
			{
				if($sutun["rol"]==1)
					$rol="ogrenciGor";
				else if($sutun["rol"]==2)
					$rol="akademisyenGor";
				else
					$rol="isyeriGor";
				
			 echo "<a class='arama_link' href='index.php?sayfa=".$rol."&id=".$sutun["id"]."'><div class='arama_icerik'>".$sutun["adi"]."   ".$sutun["soyadi"]." </div></a><br>";
			}
		 }
		 else
		 {
			 echo "Aranan Kayıt Bulunamadı";
		 }
		 
?>