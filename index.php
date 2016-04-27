<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<link href="css/mainFooter.css" rel="stylesheet" type="text/css" />
<link href="css/mainHeader.css" rel="stylesheet" type="text/css" />
<link href="css/uyeol.css" rel="stylesheet" type="text/css" />
<link href="css/giris.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery1.10.1nin.js"></script>
<script type="text/javascript" src="js/myscript.js"></script>
<link rel="stylesheet" type="text/css" href="css/myscriptstil.css" />
<?php
	include_once("/include/function.php");
	include_once("session.php");
?>
<meta charset="utf-8"/>
</head>
<body>
	<div id="header">
	<?php include_once("/include/mainHeader.php");?>
	</div>
	<div id="main">
		<?php sayfa_getir();?>
		
	</div>
	<div id="footer">
		<?php include_once("/include/mainFooter.php");?>
	</div>
</body>
</html>
<script type="text/javascript" src="js/ajax.js"></script>