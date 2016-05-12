<?php
$sorgu=duyuru_getir();
while($sonuc=mysqli_fetch_array($sorgu)){
echo "<form method='POST'>";
echo "<div id='proje-content'>";
echo "<label id='proje-baslik'>".$sonuc["baslik"]."</label>";
echo "<label id='proje-icerik'>".$sonuc["icerik"]."</label>";
echo "<label id='proje-tarih'>".$sonuc["tarih"]."</label>";
echo "<label id='proje-tarih'>Tarih :</label>";
echo "</div>";
echo "</form>";
}
?>

