<?php
include_once("../include/config.php");
global $conn;

if(!$conn){
	echo "veritabani bağlanti hatasi";
}else{
	
	$sorgu="select * from tbl_akademisyen where user_id=".$_SESSION["staj"]->getID()."";
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
	
	$sorgu="Update tbl_akademisyen SET foto='$target_path' where user_id=".$_SESSION["staj"]->getID()."";
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
	$acik=@$_POST["soyad"];
	$tc=@$_POST["tc"];
	$unvan=@$_POST["unvan"];


if(!$conn){
	echo "veritabani bağlanti hatasi";
}else{
	
	$sorgu="Update tbl_akademisyen SET  ad='$adi',soyad='$acik',tc='$tc',unvan='$unvan' where user_id=".$_SESSION["staj"]->getID()."";
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
 
Adı :<input type="text" name="adi" id="adi" value="<?php echo $array["ad"] ?>"/> 
Soyadı :<input type="text" name="soyad" id="adi" value="<?php echo $array["soyad"] ?>"/> 
Tc :<input type="text" id="adi" name="tc" value="<?php echo $array["tc"] ?>"/><br/><br>
Unvan :<input type="text" name="unvan" id="il" value="<?php echo $array["unvan"] ?>"/>  
<br/>
<br/>


<br>
<input class="buttonSosyalHesapKaydet" name="duzenle" type="submit" value="Düzenle" />

</form>
</div>