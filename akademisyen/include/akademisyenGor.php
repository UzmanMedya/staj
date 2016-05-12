<?php
$id=@$_GET["id"];

global $conn ;
if($conn)
{
	$query ="SELECT * FROM `tbl_akademisyen` where user_id=".$id;
	$sonuc = mysqli_query($conn,$query);
	$kayit=mysqli_fetch_array($sonuc);
	$query ="SELECT * FROM tbl_iletisim where user_id=".$id;
	$sonuc = mysqli_query($conn,$query);
	$kayit2=mysqli_fetch_array($sonuc);
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
		<h2><label><?php echo $kayit["ad"]." ".$kayit["soyad"]; ?></label></h2>
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
				
				if(!$kayit2["tel"]=="") 
				{
					echo "<li>Telefon : <label>".$kayit2["tel"]."</label></li>";
				}
				?>
					<li>TC Kimlik No : <label><?php echo $kayit["tc"];?> </label></li>
				
					
				</ul>
				<li>Eğitim Bilgileri</li>
				<ul>
					<li>Unvan : <label><?php printf( $kayit["unvan"]); ?></label></li>
				
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
				if(!$kayit2["facebook"]=="") 
				{
					echo "<li><a href=\"".$kayit2["facebook"]."\"><img src=\"img/facebook.png\"></img></a>";
				}	
				if(!$kayit2["github"]=="") 
				{
					echo "<a href=\"".$kayit2["github"]."\"><img src=\"img/github.png\"></img></a>";
				}
					?>
					<a href="<?php printf( $kayit2["gmail"]); ?>"><img src="img/gmail.png"></img></a></li>
				</ul>
				
				
			</ol>
			<a id="mesajGonderButon" href="index.php?sayfa=mesajlar">Mesaj Gönder</a>
		</h3>
		
	</div>
</div>
