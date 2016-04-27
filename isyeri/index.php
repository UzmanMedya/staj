<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8"/>

<link rel="stylesheet" type="text/css" href="css/mainFooter.css">
<link rel="stylesheet" type="text/css" href="css/solMenuContent.css">
<link rel="stylesheet" type="text/css" href="css/mainHeader.css">
<link rel="stylesheet" type="text/css" href="css/mainStyle.css">
<link rel="stylesheet" type="text/css" href="css/profil.css">
<link rel="stylesheet" type="text/css" href="css/projeler.css">
<link rel="stylesheet" type="text/css" href="css/sosyalHesaplarStyle.css">
</head>
<body>
	<div id="header">
		<?php include_once("/include/mainHeader.php");?>
	</div>
	<div id="main">
		<div id="left"><?php include_once("/include/solMenuContent.php");?></div>
<<<<<<< HEAD
		<div id="right"><?php
		if(@$_GET['sayfa']=="iletisim") include_once("/include/sosyalHesaplar.php");
		if(@$_GET['sayfa']=="profil") echo "PROFİL EKLE";
		if(@$_GET['sayfa']=="mesajlar") include_once("/include/mesajlar.php");
		if(@$_GET['sayfa']=="projeler") include_once("/include/projeler.php");
		?></div>
=======
		<div id="right"></div>
>>>>>>> origin/master
		<div class="clear"></div>
	</div>
	<div id="footer">
		<?php include_once("../include/mainFooter.php");?>
	</div>
</body>
</html>