<?php
	if(@$_POST["ekle"]){
		require_once("hakkinda_class.php");
		
		$hakkinda=new Hakkinda();
		
		$hakkinda->setBaslik(@$_POST["baslik"]);
		$hakkinda->setIcerik(@$_POST["icerik"]);
		
		hakkinda_ekle($hakkinda);
	}
?>

<link rel="stylesheet" type="text/css" href="../css/hakkinda.css">
<form id="hakkinda" action="" method="post">
<div id="isyeri_hakkinda">
<label id="isyeri_hakkinda_baslik">
Önsöz :
</label>
<input type="text" id="isyeri_hakkinda_onsoz" value="" name="baslik"> <br/>
<label id="isyeri_hakkinda_icerik">
İçerik :
</label>
<textarea id="isyeri_hakkinda_textarea" name="icerik"></textarea><br>

<input id="isyeri_hakkinda_duzenle" type="submit" value="Ekle" name="ekle">
</div>
</form>
