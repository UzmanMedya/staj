<?php
	$sql=duyuru_getir($id);
?>
<html>
<head>
<title>
</title>
</head>
<body>
	<form id="duyuru_detay" action="" method="post">
		<div id="duyuru">
			<label id="baslik"><?php
				echo $sql["baslik"];
			?></label>
			<label id="tarih"><?php
				echo $sql["tarih"];
			?></label>
			<label id="icerik"><?php
				echo $sql["icerik"];
			?></label>
		</div>
	</form>
</body>
</html>