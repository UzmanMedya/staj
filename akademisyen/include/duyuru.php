<?php
	require_once("../include/config.php");
	if(@$_POST["ekle"]){
		require_once("duyuru_class.php");
		$duyuru=new Duyuru();
		$duyuru->setId(@$_POST["id"]);
		$duyuru->setBaslik(@$_POST["baslik"]);
		$duyuru->setIcerik(@$_POST["icerik"]);
		
		duyuru_gotur($duyuru);
	}
	if(@$_POST["sil"]){
		$id=$_POST["duyuru_id"];
		duyuru_sil($id);
	}
	$sonuc=array("baslik"=>"","icerik"=>"","tarih"=>"","id"=>"-1");
	if(@$_POST["Duzenle"]){
		$id=$_POST["duyuru_id"];
		$sorgu="SELECT*FROM tbl_duyuru WHERE id=$id";
		global $conn;
		
		$result=mysqli_query($conn,$sorgu);
		$sonuc=mysqli_fetch_array($result);
		}
	
	
?>


<form id="duyuru" action="" method="post">
<div id="akademisyen_duyuru">

	<label id="akademisyen_duyuru_baslik">Başlık :</label>
	<input type="text" id="akademisyen_duyuru_onsoz" value="<?php echo $sonuc["baslik"];?>" name="baslik"></input> <br/>
	<label id="akademisyen_duyuru_icerik">İçerik :</label>
	<textarea id="akademisyen_duyuru_textarea" name="icerik"><?php echo $sonuc["icerik"];?></textarea><br>
	<input type="hidden" value=<?php echo $sonuc["id"];?> name="id"></input>
	<input id="akademisyen_duyuru_ekle" type="submit" value="Ekle" name="ekle"></input>
	
</div>
</form>
<?php
$sorgu=duyuru_getir();
while($sonuc=mysqli_fetch_array($sorgu)){
echo "<form method='POST'>";
echo "<div id='proje-content'>";
echo "<label id='proje-baslik'>".$sonuc["baslik"]."</label>";
echo "<label id='proje-icerik'>".$sonuc["icerik"]."</label>";
echo "<label id='proje-tarih'>".$sonuc["tarih"]."</label>";
echo "<label id='proje-tarih'>Tarih :</label>";
$id=$sonuc["id"];
echo "<input type='hidden' name='duyuru_id' value='$id'/>";
echo "<input id='akademisyen_duyuru_duzenle' type='submit' value='Düzenle' name='Duzenle'></input>";
echo "<input id='akademisyen_duyuru_sil' type='submit' value='Sil' name='sil'></input>";
echo "</div>";
echo "</form>";
}
?>

