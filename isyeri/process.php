<?php
	if(strtolower($_SERVER["HTTP_CONNECTION"]) != "xmlhttprequest")
	{
		include_once("/include/function.php");
		if(@$_GET["islem"]=="bildirim_oku")
		{
			global $conn;
			$id=$_POST["id"];
			$query ="update tbl_bildirimlerim set durum =1 where id=$id";
			$sonuc =mysqli_query($conn,$query);
			if($sonuc)
			{
				
				echo "Okundu";
				
			}else
			{
				echo "Okunmadı";
			}
		}
	}

?>