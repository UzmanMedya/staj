<?php
$id=@$_GET["id"];

global $conn ;
if($conn)
{
	$query ="SELECT * FROM tbl_isyeri  INNER JOIN tbl_proje on tbl_isyeri.user_id = tbl_proje.user_id  INNER JOIN tbl_iletisim on tbl_iletisim.user_id=tbl_isyeri.user_id INNER JOIN tbl_hakkimizda on tbl_isyeri.user_id=tbl_hakkimizda.user_id where tbl_kullanici.id=".$id;
	$sonuc = mysqli_query($conn,$query);
	$kayit=mysqli_fetch_array($sonuc);
		
}else
{
	echo "baðlanmadý";
}

?>




<div id="akademisyenGor">

	<div id="fotoraf">
		<img src="<?php if($kayit["foto"]=="") echo "img/profil.png"; else printf( $kayit["foto"]); ?>"></img>
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
				<?php 
				if(!$kayit["web_site"]=="") 
				{
					echo "<li>Web Site : <a href=\"".$kayit["web_site"]."\"><label>".$kayit["web_site"]."</label></a></li>";
				}
				?>
					<?php 
				if(!$kayit["tel"]=="") 
				{
					echo "<li>Telefon : <label>".$kayit["tel"]."</label></li>";
				}
				?>
					<li>Adres : <label><?php echo $kayit["adres"];echo " ";echo $kayit["ilce"];echo " / ";echo $kayit["il"]; ?></label></li>
					
				
					<li>Sektör : <label><?php echo $kayit["aciklama"];?></label></li>
				
				</ul>
				<?php 
				if(!$kayit["baslik"]=="" && !$kayit["icerik"]) 
				{
					echo "<li>Hakkýmýzda</li><ul>
					<li>".$kayit["baslik"].": <label>".$kayit["icerik"]." </label></li>
					
					
				</ul>";
				}
				?>
				
				<?php
					$query2 ="SELECT * FROM `tbl_isyeri` INNER JOIN tbl_isyeri_teknoloji on tbl_isyeri.id=tbl_isyeri_teknoloji.isyeri_id INNER JOIN tbl_teknoloji on tbl_isyeri_teknoloji.teknoloji_id=tbl_teknoloji.id where user_id=".$id;
					$sonuc2 = mysqli_query($conn,$query2);
					if(mysqli_affected_rows($conn))
					{
						echo "<li>Kullanýlan Teknolojiler</li>
						<ul>";
						while($array2=mysqli_fetch_array($sonuc2))
						{
							echo "<li> <label>".$array2["teknoloji"]."</label></li>";
						}
				
					echo "</ul>" ;
				}
				?>
				</ul>
				<?php
				$query3 ="SELECT * FROM tbl_isyeri INNER JOIN tbl_isyeri_teknoloji on tbl_isyeri.id = tbl_isyeri_teknoloji.isyeri_id INNER JOIN tbl_proje on tbl_isyeri.user_id = tbl_proje.user_id INNER JOIN tbl_teknoloji on tbl_isyeri_teknoloji.teknoloji_id = tbl_teknoloji.id where tbl_isyeri.user_id=".$id;
				$sonuc3 = mysqli_query($conn,$query3);
				if(mysqli_affected_rows($conn))
				{
					echo "<li>Projeler</li>
					<ul>";
					while($array3=mysqli_fetch_array($sonuc3))
					{
						echo "<li>".$array3["p_adi"]." : <label>".$array3["p_icerik"]."</label></li>";
					}
				
					echo "</ul>" ;
				}
				?>
				
				<li>Sosyal Aðlar : </li>
				<ul>
				<?php
				if(!$kayit["facebook"]=="") 
				{
					echo "<li><a href=\"".$kayit["facebook"]."\"><img src=\"img/facebook.png\"></img></a>";
				}	
				if(!$kayit["github"]=="") 
				{
					echo "<a href=\"".$kayit["github"]."\"><img src=\"img/github.png\"></img></a>";
				}
					?>
					<a href="<?php echo $kayit["gmail"]; ?>"><img src="img/gmail.png"></img></a></li>
				</ul>
				
				
			</ol>
		</h3>
		
	</div>
</div>
