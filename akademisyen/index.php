<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/mainFooter.css">

<link rel="stylesheet" type="text/css" href="css/solMenuContent.css">
<link rel="stylesheet" type="text/css" href="css/mainHeader.css">
<link rel="stylesheet" type="text/css" href="css/mainStyle.css">
<link rel="stylesheet" type="text/css" href="css/sosyalHesaplarStyle.css">

<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/bildirim.js"></script>
</head>
<body>
	<div id="header">
		<?php include_once("/include/mainHeader.php");?>
	</div>
	<div id="main">
		<div id="left"><?php include_once("/include/solMenuContent.php");?></div>
		<div id="right">
		<div id="right"><?php
		if(@$_GET['sayfa']=="iletisim") include_once("/include/sosyalHesaplar.php");
		if(@$_GET['sayfa']=="profil") echo"PROFİL EKLENECEK";
		if(@$_GET['sayfa']=="mesajlar") include_once("/include/mesajlar.php");
		if(@$_GET['sayfa']=="projeler") include_once("/include/projeler.php");
		?></div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer">
		<?php include_once("../include/mainFooter.php");?>
	</div>
</body>
</html>