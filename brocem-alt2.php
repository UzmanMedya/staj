<div id="gelenmesaj" >
	<table>
		<tr>
			<td>
				<strong>İleti Konusu:</strong>
			</td>
			<td>
				<input type="text" name="soyadi">
			</td>
		</tr>
		<tr>
			<td>
				<strong>Mesaj:</strong>
			</td>
			<td>
				<textarea name="mesaj" cols="100%" rows="20%"></textarea>
			</td>
		</tr>
	</table>
</div>






<div id="mesajlarim" style="visibility: hidden">
	<div id="yenimesajlarim" style="visibility: hidden">
		<form action="" method="post">
			<table border="0" width=400>
				<tr>
					<td>
						<strong>Alıcı:
					</td>
					<td> 
						<input type="text" id="textid">
					</td>
				</tr>
				<tr>
					<td>
						<strong>İleti Konusu</strong>
					</td>
					<td>
						<input type="text" name="soyadi">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Mesaj</strong>
					</td>
					<td>
						<textarea name="mesaj" cols="100%" rows="10" id="textarea"></textarea>
					</td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="submit" value="Gönder">
						<input type="reset" value="Temizle">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>



<div id="mesajright">
		<ul>
			<li id="gizle">
				<img class="mesajimg"src="indir2.jpg"  />
				<span id="islemSil">Sil</span>
				<br/>
			</li>
			<li >
				<img class="mesajimg" src="indir.jpg" />
				<span>Yeni Mesaj</span>
			</li>
			<li id="gelenTikla"  >
				<img class="mesajimg" src="indir.jpg" />
				<span>Gelen Kutusu</span>
			</li>
			<li id="gidenTikla" >
					<img class="mesajimg" src="indir.jpg" />
				<span>Giden Kutusu</span>
			</li>
		</ul>
	</div>



<div id="mesajleft">
	<div class="mesaj-icerik">
		<div class="isaret">	
		<input type="checkbox" class="checkbox" />
		
		<div class="mesajiicerik" onclick="mesajlarimmm('mesajlarim')">
		
			<img src="qw.jpg"/>	
			<span>Yazilim Muh.</span><span class="mesaj-tarih">16.05.2016 </span>
			<div class="mesaj-konu"id="msjkonu"></div>
		</div>

		</div>
	</div>
	<?php
	global $conn;

	$sorgu = "SELECT `adi`,`soyadi`,`foto`,`tarih` FROM `tbl_mesaj` LEFT JOIN `tbl_kullanici` ON tbl_mesaj.alici_id = tbl_kullanici.id WHERE `gonderen_id`='".$_SESSION['uyeId']."'";
	$sonuc=mysqli_query($conn,$sorgu);

	if($sonuc){
		while($sutun=mysqli_fetch_row($sonuc)){
			echo '
			<div class="mesaj-icerik">
					<div class="isaret">	
						<input type="checkbox" class="checkbox" />
						
						<div class="mesajiicerik" onclick="mesajlarimmm(\'mesajlarim\')">
						
							<img src="'.$sutun[2].'"/>	
							<span>'.$sutun[0]." ".$sutun[1].'</span><span class="mesaj-tarih">'.$sutun[3].'</span>
							<div class="mesaj-konu"id="msjkonu"></div>
						</div>

					</div>
			</div>';
			
		}
	}
	?>
</div>



############################






<?php

global $conn;

$sorgu="SELECT * FROM tbl_mesaj WHERE `gonderen_id`='".$_SESSION['uyeId']."'";
$sonuc=mysqli_query($conn,$sorgu);

if($sonuc){
	while($sutun=mysqli_fetch_row($sonuc)){
		echo $sutun[0] ."<br/>". $sutun[1] ."<br/>". $sutun[2] ."<br/>". $sutun[3] ."<br/>". $sutun[4] ."<br/>";
		echo "---------------.<br/>";
	}
}

$sorgu1 = "SELECT `foto` FROM `tbl_mesaj` LEFT JOIN `tbl_kullanici` ON tbl_mesaj.alici_id = tbl_kullanici.id WHERE `gonderen_id`='".$_SESSION['uyeId']."'";
$sonuc=mysqli_query($conn,$sorgu1);
if($sonuc){
	while($sutun=mysqli_fetch_row($sonuc)){
		echo "<img src=".$sutun[0]." />" ."<br/>";
		echo "---------------.<br/>";
	}
}

?>













