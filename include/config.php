<?php
	define("host","localhost");
	define("user","root");
	define("pass","");
	define("db","staj_blg_veritabani");

	$conn = mysqli_connect(host,user,pass,db) or die("Veri tabanı bağlanti hatası");
	
?>