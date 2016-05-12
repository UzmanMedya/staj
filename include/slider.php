<div class="ana" >
	<div class="gosteri">
		<ul>
			<li><img src="img/1.jpg" title="awd" class="slimg" /></li>
			<li><img src="img/2.jpg" title="jgyjgy" class="slimg" /></li>
			<li><img src="img/3.jpg" class="slimg"  /></li>
			<li><img src="img/4.jpg" class="slimg"  /></li>
			<li><img src="img/5.jpg" class="slimg"  /></li>
			<li><img src="img/6.jpg" class="slimg"  /></li>
			<li><img src="img/7.jpg" class="slimg"  /></li>
			<li><img src="img/8.jpg" class="slimg"  /></li>
			<li id="bitti"><img src="" class="slimg" /></li>
		</ul>
	</div>
	<div class="secici">1/8</div>
	

	<div class="islem">
		<div class="duyurular">
		DUYURULAR<br/>
			<?php
				global $conn;
				$sorgu="select*from tbl_duyuru";
				$sonuc=mysqli_query($conn,$sorgu);
				echo "<ul>";
				while($sonuc2=mysqli_fetch_array($sonuc)){
					echo "<li><a href=index.php?sayfa=duyuru&id=".$sonuc2["id"].">".$sonuc2["baslik"]."</a></li>";//a href=index.php?sayfa=".$sonuc_duyuru["id"].">".$sonuc_duyuru["baslik"]."</a></li><br />";
					//id=".$sonuc2["id"]."
				}
				echo "</ul>";
			?>
		</div>
		<div class="etkinlikler">
			ETKÝNLÝKLER<br/>
			<?php
				global $conn;
				$sorgu="select*from tbl_etkinlik";
				$sonuc=mysqli_query($conn,$sorgu);
				echo "<ul>";
				while($sonuc2=mysqli_fetch_array($sonuc))
					echo "<li><a href=index.php?sayfa=etkinlik&id=".$sonuc2["id"].">".$sonuc2["baslik"]."</a></li>";//a href=index.php?sayfa=".$sonuc_duyuru["id"].">".$sonuc_duyuru["baslik"]."</a></li><br />";
				echo "</ul>";
			?>
		</div>
	</div>
</div>
