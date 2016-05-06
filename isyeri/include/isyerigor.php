<?php
$id=@$_GET["id"];

global $conn ;
if($conn)
{
	$query ="SELECT * FROM tbl_isyeri  INNER JOIN tbl_proje on tbl_isyeri.user_id = tbl_proje.user_id  INNER JOIN tbl_iletisim on tbl_iletisim.user_id=tbl_isyeri.user_id INNER JOIN tbl_hakkimizda on tbl_isyeri.user_id=tbl_hakkimizda.user_id where tbl_isyeri.user_id=".$id;
	$sonuc = mysqli_query($conn,$query);
	$kayit=mysqli_fetch_array($sonuc);
		
}else
{
	echo "ba�lanmad�";
}

?>




<div id="akademisyenGor">

	<div id="fotoraf">
		<img src="<?php echo $kayit["foto"]; ?>"></img>
	</div>
	
	<div id="adSoyad">
		<h2><label><?php echo $kayit["adi"]; ?></label></h2>
	</div>
	
	<div id="temizlemeDiv"></div>
	
	<div id="bilgiler">
		<h3>
			<ol>
				<li>Temel Bilgiler</li>
				<ul>
					<li>Web Site : <a href="<?php echo $kayit["web_site"]; ?>"><label><?php echo $kayit["web_site"]; ?></label></a></li>
					<li>Telefon : <label><?php echo $kayit["tel"]; ?></label></li>
					
					<li>Adres : <label><?php echo $kayit["adres"];echo " ";echo $kayit["ilce"];echo " / ";echo $kayit["il"]; ?></label></li>
					
				</ul>
					<li>Hakk�m�zda</li>
				<ul>
					
					<li><?php echo($kayit["baslik"]); ?> : <label><?php echo $kayit["icerik"]; ?> </label></li>
					
					
				</ul>
					<li>Kullan�lan Teknolojiler</li>
				<ul>
				<?php
					$query ="SELECT * FROM `tbl_isyeri` INNER JOIN tbl_isyeri_teknoloji on tbl_isyeri.id=tbl_isyeri_teknoloji.isyeri_id INNER JOIN tbl_teknoloji on tbl_isyeri_teknoloji.teknoloji_id=tbl_teknoloji.id where user_id=".$id;
					$sonuc2 = mysqli_query($conn,$query);
					
					while($kayit=mysqli_fetch_array($sonuc2))
					{
						echo "<li> <label>".$kayit["teknoloji"]."</label></li>";
					}
				?>
				</ul>
				<li>Projeler</li>
				<ul>
				<?php
					$query ="SELECT * FROM tbl_isyeri INNER JOIN tbl_isyeri_teknoloji on tbl_isyeri.id = tbl_isyeri_teknoloji.isyeri_id INNER JOIN tbl_proje on tbl_isyeri.user_id = tbl_proje.user_id INNER JOIN tbl_teknoloji on tbl_isyeri_teknoloji.teknoloji_id = tbl_teknoloji.id where tbl_isyeri.user_id=".$id;
					$sonuc = mysqli_query($conn,$query);
					
					while($kayit=mysqli_fetch_array($sonuc))
					{
						echo "<li>".$kayit["p_adi"]." : <label>".$kayit["p_icerik"]."</label></li>";
					}
				?>
				</ul>
				<li>Sosyal A�lar : </li>
				<ul>
					<li><a href="<?php echo $kayit["facebook"]; ?>"><img src="img/facebook.png"></img></a>
					<a href="<?php echo $kayit["github"]; ?>"><img src="img/github.png"></img></a>
					<a href="<?php echo $kayit["gmail"]; ?>"><img src="img/gmail.png"></img></a></li>
				</ul>
				
				
			</ol>
		</h3>
		
	</div>
</div>
