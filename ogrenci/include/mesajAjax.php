<?php
	include("../../include/config.php");
	$value=$_POST["value"];
	global $conn;
		$sorgu = "SELECT * FROM tbl_kullanici WHERE adi LIKE '%$value%' ";  
	    $sonuc=mysqli_query($conn,$sorgu);
		 if($sonuc)
		 {
			 while($sutun=mysqli_fetch_array($sonuc))
			{	
			 echo "<a class='arama_link' href='index.php?sayfa=".$rol."&id=".$sutun["id"]."'><div class='arama_icerik'>".$sutun["adi"]."   ".$sutun["soyadi"]." </div></a><br>";
			}
		 }
		 else
		 {
			 echo "Aranan Kayıt Bulunamadı";
		 }
		 
?>