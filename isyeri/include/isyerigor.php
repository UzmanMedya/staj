<?php
$id=@$_GET["id"];

global $conn ;
if($conn)
{
	$query ="SELECT * FROM tbl_isyeri where user_id=".$id;
	$sonuc = mysqli_query($conn,$query);
	$kayit=mysqli_fetch_array($sonuc);
	
	$query ="SELECT * FROM tbl_iletisim where user_id=".$id;
	$sonuc = mysqli_query($conn,$query);
	$kayit2=mysqli_fetch_array($sonuc);
		
	$query ="SELECT * FROM tbl_hakkimizda where user_id=".$id;
	$sonuc = mysqli_query($conn,$query);
	$kayit3=mysqli_fetch_array($sonuc);
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
				if(!$kayit2["web_site"]=="") 
				{
					echo "<li>Web Site : <a href=\"".$kayit2["web_site"]."\"><label>".$kayit2["web_site"]."</label></a></li>";
				}
				?>
					<?php 
				if(!$kayit2["tel"]=="") 
				{
					echo "<li>Telefon : <label>".$kayit2["tel"]."</label></li>";
				}
				?>
					<li>Adres : <label><?php echo $kayit["adres"];echo " ";echo $kayit["ilce"];echo " / ";echo $kayit["il"]; ?></label></li>
					
				
					<li>Sektör : <label><?php echo $kayit["aciklama"];?></label></li>
				
				</ul>
				<?php 
				if(!$kayit3["baslik"]=="" && !$kayit3["icerik"]) 
				{
					echo "<li>Hakkýmýzda</li><ul>
					<li>".$kayit3["baslik"].": <label>".$kayit3["icerik"]." </label></li>
					
					
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
				if(!$kayit2["facebook"]=="") 
				{
					echo "<li><a href=\"".$kayit2["facebook"]."\"><img src=\"img/facebook.png\"></img></a>";
				}	
				if(!$kayit2["github"]=="") 
				{
					echo "<a href=\"".$kayit2["github"]."\"><img src=\"img/github.png\"></img></a>";
				}
					?>
					<a href="<?php echo $kayit2["gmail"]; ?>"><img src="img/gmail.png"></img></a></li>
				</ul>
				
				
			</ol>
			<a id="mesajGonderButon" href="index.php?sayfa=mesajlar&id=<?php echo $id;?>">Mesaj Gönder</a>
		</h3>
		
	</div>
</div>
