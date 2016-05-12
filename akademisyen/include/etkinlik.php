<?php
	require_once("../include/config.php");
	if(@$_POST["ekle"]){
		require_once("etkinlik_class.php");
		$etkinlik=new Etkinlik();
		$etkinlik->setId(@$_POST["id"]);
		$etkinlik->setBaslik(@$_POST["baslik"]);
		$etkinlik->setIcerik(@$_POST["icerik"]);
		
		etkinlik_gotur($etkinlik);
	}
	if(@$_POST["sil"]){
		$id=$_POST["etkinlik_id"];
		etkinlik_sil($id);
	}
	$sonuc=array("baslik"=>"","icerik"=>"","tarih"=>"","id"=>"-1");
	if(@$_POST["Duzenle"]){
		$id=$_POST["etkinlik_id"];
		$sorgu="SELECT*FROM tbl_etkinlik WHERE id=$id";
		global $conn;
		
		$result=mysqli_query($conn,$sorgu);
		$sonuc=mysqli_fetch_array($result);
		}
	
	
?>


<form id="etkinlik" action="" method="post">
<div id="akademisyen_etkinlik">

	<label id="akademisyen_etkinlik_baslik">Başlık :</label>
	<input type="text" id="akademisyen_etkinlik_onsoz" value="<?php echo $sonuc["baslik"];?>" name="baslik"></input> <br/>
	<label id="akademisyen_etkinlik_icerik">İçerik :</label>
	<textarea id="akademisyen_etkinlik_textarea" name="icerik"><?php echo $sonuc["icerik"];?></textarea><br>
	<input type="hidden" value=<?php echo $sonuc["id"];?> name="id"></input>
	<input id="akademisyen_etkinlik_ekle" type="submit" value="Ekle" name="ekle"></input>
	
</div>
</form>
<?php
$sorgu=etkinlik_getir();
while($sonuc=mysqli_fetch_array($sorgu)){
echo "<form method='POST'>";
echo "<div id='proje-content'>";
echo "<label id='proje-baslik'>".$sonuc["baslik"]."</label>";
echo "<label id='proje-icerik'>".$sonuc["icerik"]."</label>";
echo "<label id='proje-tarih'>".$sonuc["tarih"]."</label>";
echo "<label id='proje-tarih'>Tarih :</label>";
$id=$sonuc["id"];
echo "<input type='hidden' name='etkinlik_id' value='$id'/>";
echo "<input id='akademisyen_etkinlik_duzenle' type='submit' value='Düzenle' name='Duzenle'></input>";
echo "<input id='akademisyen_etkinlik_sil' type='submit' value='Sil' name='sil'></input>";
echo "</div>";
echo "</form>";
}
?>

