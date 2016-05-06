<?php
$id=@$_GET["id"];

global $conn ;
if($conn)
{
	$query ="SELECT * from tbl_ogrenci inner join tbl_il on tbl_ogrenci.il=tbl_il.id  inner join tbl_ilce on tbl_ogrenci.ilce=tbl_ilce.id   inner join tbl_fakulte on tbl_ogrenci.fakulte=tbl_fakulte.id inner join tbl_uni on tbl_ogrenci.uni=tbl_uni.id INNER JOIN tbl_bolum on tbl_ogrenci.bolum=tbl_bolum.id INNER JOIN tbl_iletisim on tbl_ogrenci.user_id=tbl_iletisim.user_id INNER JOIN tbl_kullanici on tbl_ogrenci.user_id=tbl_kullanici.id where tbl_ogrenci.id=".$id;
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
					<li>Cinsiyet : <label><?php if($kayit["cinsiyet"]==1)echo "Erkek";else echo "Kadın"; ?></label></li>
					<li>Adres : <label><?php printf( $kayit["adres"]);echo " ";printf( $kayit["ilce"]);echo " / ";printf( $kayit["il"]); ?></label></li>
					
				</ul>
				<li>Eğitim Bilgileri</li>
				<ul>
					<li>Üniversite : <label><?php printf( $kayit["uni_adi"]); ?></label></li>
					<li>Fakülte : <label><?php printf( $kayit["fakulte_adi"]); ?></label></li>
					<li>Bölüm : <label><?php printf( $kayit["bolum_adi"]); ?></label></li>
					<li>Sınıf : <label><?php printf( $kayit["sinif"]);?></label></li>
					<li>Okul No : <label><?php printf( $kayit["okul_no"]); ?></label></li>
				</ul>
					<li>Projeler</li>
				<ul>
				<?php
					$query ="SELECT * from tbl_ogrenci INNER JOIN tbl_proje on tbl_ogrenci.user_id = tbl_proje.user_id WHERE tbl_ogrenci.user_id=".$id;
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
