<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
<link href="css/mainFooter.css" rel="stylesheet" type="text/css" />
<link href="css/mainHeader.css" rel="stylesheet" type="text/css" />
<link href="css/uyeol.css" rel="stylesheet" type="text/css" />
<link href="css/giris.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery1.10.1nin.js"></script>
<script type="text/javascript" src="js/myscript.js"></script>
<link rel="stylesheet" type="text/css" href="css/myscriptstil.css" />

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" />
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/duyuru.css" />
<link rel="stylesheet" type="text/css" href="css/etkinlik.css" />
<meta charset="utf-8"/>
<?php
	include_once("/include/function.php");
	include_once("session.php");
?>
</head>
<body><div id="header">
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