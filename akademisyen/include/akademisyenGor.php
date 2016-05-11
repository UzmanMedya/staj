<?php
$id=@$_GET["id"];

global $conn ;
if($conn)
{
	$query ="SELECT * FROM `tbl_akademisyen` INNER JOIN tbl_akademisyen_uni on tbl_akademisyen.user_id = tbl_akademisyen_uni.user_id INNER JOIN tbl_iletisim on tbl_akademisyen.user_id = tbl_iletisim.user_id INNER JOIN tbl_kullanici On tbl_akademisyen.user_id = tbl_kullanici.id INNER JOIN tbl_uni On tbl_akademisyen_uni.id = tbl_akademisyen_uni.id where tbl_kullanici.id=".$id;
	$sonuc = mysqli_query($conn,$query);
	$kayit=mysqli_fetch_array($sonuc);
		
}else
{
	echo "bağlanmadı";
}

?>




<div id="akademisyenGor">

	<div id="fotoraf">
		<img src="<?php if($kayit["foto"]=="") echo "img/profil.png"; else printf( $kayit["foto"]); ?>"></img>
	</div>
	
	<div id="adSoyad">
		<h2><label><?php printf( $kayit["adi"]." ".$kayit["soyadi"]); ?></label></h2>
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
				
				if(!$kayit["tel"]=="") 
				{
					echo "<li>Telefon : <label>".$kayit["tel"]."</label></li>";
				}
				?>
					<li>TC Kimlik No : <label><?php echo $kayit["tc"];?> </label></li>
				
					
				</ul>
				<li>Eğitim Bilgileri</li>
				<ul>
					<li>Unvan : <label><?php printf( $kayit["unvan"]); ?></label></li>
				<?php 
				if(!$kayit["uni_adi"]=="") 
				{
					echo "<li>Üniversite : <label>".$kayit["uni_adi"]."</label></li>";
				}
				?>
				</ul>
				<?php
				$query ="SELECT * from tbl_akademisyen INNER JOIN tbl_proje on tbl_akademisyen.user_id = tbl_proje.user_id WHERE tbl_akademisyen.user_id=".$id;
				$sonuc2 = mysqli_query($conn,$query);
				if(mysqli_affected_rows($conn))
				{
					echo "<li>Projeler</li>
					<ul>";
					while($array=mysqli_fetch_array($sonuc2))
					{
						echo "<li>".$array["p_adi"]." : <label>".$array["p_icerik"]."</label></li>";
					}
				
					echo "</ul>" ;
				}
				?>
				<li>Sosyal Ağlar : </li>
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
					<a href="<?php printf( $kayit["gmail"]); ?>"><img src="img/gmail.png"></img></a></li>
				</ul>
				
				
			</ol>
		</h3>
		
	</div>
</div>
