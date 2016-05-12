<?php
$id=@$_GET["id"];

global $conn ;
if($conn)
{
	$query ="SELECT * from tbl_ogrenci where user_id=".$id;
	$sonuc = mysqli_query($conn,$query);
	$kayit=mysqli_fetch_array($sonuc);
	$query ="SELECT * from tbl_iletisim where user_id=".$id;
	$sonuc = mysqli_query($conn,$query);
	$kayit2=mysqli_fetch_array($sonuc);
	$query ="SELECT * from tbl_fakulte where id=".$kayit["fakulte"];
	$sonuc = mysqli_query($conn,$query);
	$kayit3=mysqli_fetch_array($sonuc);
	$query ="SELECT * from tbl_uni where id=".$kayit["uni"];
	$sonuc = mysqli_query($conn,$query);
	$kayit4=mysqli_fetch_array($sonuc);
	$query ="SELECT * from tbl_bolum where id=".$kayit["bolum"];
	$sonuc = mysqli_query($conn,$query);
	$kayit5=mysqli_fetch_array($sonuc);
		
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
				if(!$kayit2["web_site"]=="") 
				{
					echo "<li>Web Site : <a href=\"".$kayit2["web_site"]."\"><label>".$kayit2["web_site"]."</label></a></li>" ;
				}
				?>
					<li>Telefon : <label><?php printf( $kayit2["tel"]); ?></label></li>
					<li>Cinsiyet : <label><?php if($kayit["cinsiyet"]==1)echo "Erkek";else echo "Kadın"; ?></label></li>
					<li>Doğum Tarihi : <label><?php echo $kayit["d_tarihi"]; ?></label></li>
					<li>Adres : <label><?php printf( $kayit["adres"]);echo " ";printf( $kayit["ilce"]);echo " / ";printf( $kayit["il"]); ?></label></li>
					
				</ul>
				<li>Eğitim Bilgileri</li>
				<ul>
				<?php
				if(!$kayit4["uni_adi"]=="") 
				{
					echo "<li>Üniversite : <label>".$kayit4["uni_adi"]."</label></li>";
				}
				if(!$kayit3["fakulte_adi"]=="") 
				{
					echo "<li>Fakülte : <label>".$kayit3["fakulte_adi"]."</label></li>";
				}
				if(!$kayit5["bolum_adi"]=="") 
				{
					echo "<li>Bölüm : <label>".$kayit5["bolum_adi"]."</label></li>";
				}
				if(!$kayit["sinif"]=="") 
				{
					echo "<li>Sınıf : <label>".$kayit["sinif"]."</label></li>";
				}
				?>
					<li>Okul No : <label><?php printf( $kayit["okul_no"]); ?></label></li>
				</ul>
				<?php
				$query2 ="SELECT * from tbl_ogrenci INNER JOIN tbl_proje on tbl_ogrenci.user_id = tbl_proje.user_id WHERE tbl_ogrenci.user_id=".$id;
				$sonuc2 = mysqli_query($conn,$query2);
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
			<a id="mesajGonderButon" href="index.php?sayfa=mesajlar&id=<?php echo $id;?>">Mesaj Gönder</a>
		</h3>
		
	</div>
</div>
