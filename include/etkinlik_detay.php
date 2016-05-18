<?php
	$sql=etkinlik_getir($id);
?>
<html>
<head>
<title>
</title>
</head>
<body>
	<form id="etkinlik_detay" action="" method="post">
		<div id="etkinlik">
			<label id="baslik"><?php
				echo $sql["baslik"];
			?></label>
			<label id="tarih"><?php
				echo "Tarih: ".$sql["tarih"];
			?></label>
			<label id="icerik"><?php
				echo $sql["icerik"];
			?></label>
		</div>
	</form>
</body>
</html>