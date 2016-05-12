<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/mainFooter.css">

<link rel="stylesheet" type="text/css" href="css/solMenuContent.css">
<link rel="stylesheet" type="text/css" href="css/projem.css">
<link rel="stylesheet" type="text/css" href="css/akademisyenGor.css">
<link rel="stylesheet" type="text/css" href="css/mainHeader.css">
<link rel="stylesheet" type="text/css" href="css/mainStyle.css">
<link rel="stylesheet" type="text/css" href="css/sosyalHesaplarStyle.css">
<link rel="stylesheet" type="text/css" href="css/profil.css">
<link rel="stylesheet" type="text/css" href="css/projeler.css">
<link rel="stylesheet" type="text/css" href="css/hakkinda.css">

<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/bildirim.js"></script>

<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" />
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript">
			$(function()
			{
				$(".arama_sonuc").hide();
				$("input[name=arama_text]").keyup(function(){
					var value=$(this).val();
					var konu="value="+value;
					if(value!="")
					{
						$.ajax({
							type:"POST",
							url:"include/ajax.php",
							data:konu,
							success:function(sonuc)
							{
								$(".arama_sonuc").show().html(sonuc);
							}
						});
					}
					else{
						$(".arama_sonuc").hide();
					}
				});
			});
		</script>
</head>
<body>
	<div id="header">
		<?php 
		include_once("/include/function.php");
		session_kontrol();
		include_once("/include/mainHeader.php");?>
	</div>
	<div id="main">
		<div id="left"><?php include_once("/include/solMenuContent.php");?></div>
		
		<div id="right"><?php
		 include_once("include/function.php");
		 sayfa_getir();
		?></div>
		
		<div class="clear"></div>
	</div>
	<div id="footer">
		<?php include_once("../include/mainFooter.php");?>
	</div>
</body>
</html>