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
		<img src="<?php printf( $kayit["foto"]); ?>"></img>
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
					<li>Web Site : <a href="<?php printf( $kayit["web_site"]); ?>"><label><?php printf( $kayit["web_site"]); ?></label></a></li>
					<li>Telefon : <label><?php printf( $kayit["tel"]); ?></label></li>
					<li>TC Kimlik No : <label><?php printf( $kayit["tc"]); ?></label></li>
					
				</ul>
				<li>Eğitim Bilgileri</li>
				<ul>
					<li>Unvan : <label><?php printf( $kayit["unvan"]); ?></label></li>
					<li>Üniversite : <label><?php printf( $kayit["uni_adi"]); ?></label></li>
				</ul>
				<li>Projeler</li>
				<ul>
				<?php
					$query ="SELECT * from tbl_akademisyen INNER JOIN tbl_proje on tbl_akademisyen.user_id = tbl_proje.user_id WHERE tbl_akademisyen.user_id=".$id;
					$sonuc2 = mysqli_query($conn,$query);
					
					while($array=mysqli_fetch_array($sonuc2))
					{
						echo "<li>".$array["p_adi"]." : <label>".$array["p_icerik"]."</label></li>";
					}
				?>
				</ul>
				<li>Sosyal Ağlar : </li>
				<ul>
					<li><a href="<?php printf( $kayit["facebook"]); ?>"><img src="img/facebook.png"></img></a>
					<a href="<?php printf( $kayit["github"]); ?>"><img src="img/github.png"></img></a>
					<a href="<?php printf( $kayit["gmail"]); ?>"><img src="img/gmail.png"></img></a></li>
				</ul>
				
				
			</ol>
		</h3>
		
	</div>
</div>
