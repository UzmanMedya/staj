<?php
include_once("../include/config.php");
global $conn;

if(!$conn){
	echo "veritabani bağlanti hatasi";
}else{
	
	$sorgu="select * from tbl_ogrenci where user_id=".$_SESSION["staj"]->getID()."";
		$he=1;
		if($sonuc=mysqli_query($conn,$sorgu)){
			
		 $array=mysqli_fetch_array($sonuc);
		}
		else { 
				echo "Yuklenmedi.";

      
	
}
}
if(@$_POST["yukle"]){
	$target_path = "../img/profilresim/";
	
	$target_path = $target_path . basename($_FILES['image']['name']);

try {
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
        throw new Exception('Resim Yuklenemedi');
    }

  
}
catch (Exception $e) {
    die('Dosya yuklenemedi: ' . $e->getMessage());
}	

if(!$conn){
	echo "veritabani bağlanti hatasi";
}else{
	
	$sorgu="Update tbl_ogrenci SET foto='$target_path' where user_id=".$_SESSION["staj"]->getID()."";
$he=1;
		if(mysqli_query($conn,$sorgu)){
			
			echo "Yuklendi.";
		}
		else { 
				echo "Yuklenmedi.";
				
				

}
$sorgu="Update tbl_kullanici SET foto='$target_path' where id=".$_SESSION["staj"]->getID()."";
$he=1;
		if(mysqli_query($conn,$sorgu)){
			
			echo "Yuklendi.";
		}
		else { 
				echo "Yuklenmedi.";


}
}}
if(@$_POST["duzenle"]){
	
	$adi=@$_POST["adi"];
	$soyadi=@$_POST["soyadi"];
	$no=@$_POST["okulno"];
	$tamadres=@$_POST["tamadres"];



if(!$conn){
	echo "veritabani bağlanti hatasi";
}else{
	
	$sorgu="Update tbl_ogrenci SET  adi='$adi',soyadi='$soyadi',adres='$tamadres',okul_no=$no where user_id=".$_SESSION["staj"]->getID()."";
$he=1;
		if(mysqli_query($conn,$sorgu)){
			
			echo "Güncellendi.";
		}
		else { 
				echo "Güncellenemedi.";

      
	
}
	
}
}
?>
<div id="profil_content">
<form enctype="multipart/form-data" action="" method="POST">
<img id="foto" src="<?php echo $array["foto"] ?>"  >
 <input type="file" name="image" > <input type="submit" name="yukle" value="Yukle"><br/>
Adı :<input type="text" name="adi" id="adi" value="<?php echo $array["adi"] ?>"/> 
Soyadi:<input type="text" id="soyadi" name="soyadi" value="<?php echo $array["soyadi"] ?>"/><br/><br>
Okul No :<input type="text" id="il" name="okulno" value="<?php echo $array["okul_no"] ?>"/>  
<br/>
<br/>
Adres :
<input type="text" name="tamadres" id="tamadres" value="<?php echo $array["adres"] ?>"/>

<br>
<input class="buttonSosyalHesapKaydet" name="duzenle" type="submit" value="Düzenle" />

</form>
</div>