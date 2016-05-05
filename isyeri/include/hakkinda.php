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

	<label id="isyeri_hakkinda_baslik">Önsöz :</label>
	<input type="text" id="isyeri_hakkinda_onsoz" value="" name="baslik"> <br/>
	<label id="isyeri_hakkinda_icerik">İçerik :</label>
	<textarea id="isyeri_hakkinda_textarea" name="icerik"></textarea><br>
	<input id="isyeri_hakkinda_duzenle" type="submit" value="Ekle" name="ekle">
	
</div>
</form>



<div id="proje-content">
<label id="proje-baslik">Sosyal Yardımlaşma Platformu </label><br/><br/>
<label id="proje-icerik">Türkiye'de toplumda Sosyal Yardımlaşma bilincinin kazanması ve pekiştirilmesini amaçlayan bu proje, 3 Modül den oluşmakta birlikte bunlar;
 İhtiyaç Sahibi, Gönüllü ve Yöneticidir. Gönüllü yardımda bulunmak istediği ürünü sisteme genel bilgileri ile girer.Sisteme kayıtlı olan İhtiyaç Sahibi ihtiyaç duyduğu ürünü
 rezerve eder. Yönetici bu rezerveyi uygun bulması halinde onaylar ve ürün ihtiyaç sahibi ile eşleşir.Gerçek iletim aşaması başlar.</label><br>
<label id="proje-ekleyen">Ömür Buruk</label><label id="proje-ekleyen">Ekleyen : </label>
<label id="proje-tarih">28.04.2016</label><label id="proje-tarih">Tarih :</label>
