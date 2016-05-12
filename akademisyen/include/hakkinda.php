<?php
	if(@$_POST["ekle"]){
		require_once("hakkinda_class.php");
		
		$hakkinda=new Hakkinda();
		
		$hakkinda->setBaslik(@$_POST["baslik"]);
		$hakkinda->setIcerik(@$_POST["icerik"]);
		
		hakkinda_ekle($hakkinda);
	}
	$sonuc=hakkinda_goster();
	$user_id=hakkinda_user_goster();
	
?>


<form id="hakkinda" action="" method="post">
<div id="akademisyen_hakkinda">

	<label id="akademisyen_hakkinda_baslik">Başlık :</label>
	<input type="text" id="akademisyen_hakkinda_onsoz" value="" name="baslik"></input> <br/>
	<label id="akademisyen_hakkinda_icerik">İçerik :</label>
	<textarea id="akademisyen_hakkinda_textarea" name="icerik"></textarea><br>
	<input id="akademisyen_hakkinda_duzenle" type="submit" value="Ekle" name="ekle"></input>
	
</div>
</form>

<div id="proje-content">
<label id="proje-baslik"><?php echo $sonuc["baslik"]; ?></label>
<label id="proje-icerik"><?php echo $sonuc["icerik"]; ?></label>
<label id="proje-ekleyen"><?php echo $user_id["mail"]; ?></label>
<label id="proje-ekleyen">Ekleyen : </label>
<label id="proje-tarih"><?php echo $sonuc["tarih"]; ?></label>
<label id="proje-tarih">Tarih :</label>
</div>
