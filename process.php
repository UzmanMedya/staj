<?php
	if(strtolower($_SERVER["HTTP_CONNECTION"]) != "xmlhttprequest")
	{
		include_once("/include/function.php");
		if(@$_GET["islem"]=="uyeol")
		{
			$rol =@$_POST["rol"];
			/*
				rol 1 :öğrenci
				rol 2 :Akademisyen
				rol 3 :İşyeri
			*/
			if($rol == 1)
			{
				include_once("/include/ogrenciuyeol.php");
			}else if($rol == 2)
			{
				include_once("/include/akademisyenuyeol.php");
			}else if($rol == 3)
			{
				include_once("/include/isyeriuyeol.php");
			}
		}
	}

?>