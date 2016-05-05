<?php
	include("include/config.php");
	$value=$_POST["value"];
	global $conn;
		$sorgu = "SELECT * FROM tbl_kullanici WHERE adi LIKE '%$value%' ";  
	    $sonuc=mysqli_query($conn,$sorgu);
		 if($sonuc)
		 {
			while($sutun=mysqli_fetch_row($sonuc))
			{
			 echo "<a class='arama_link' href='#'><div class='arama_icerik'>".$sutun[1]."   ".$sutun[2]." </div></a><br>";
			}
		 }
		 else
		 {
			 echo "Aranan Kayıt Bulunamadı";
		 }
		 
?>