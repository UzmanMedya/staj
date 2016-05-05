<?php
	global $conn;
	$query ="select * from tbl_iletisim where user_id =".$_SESSION['staj']->getID();
	$row =mysqli_fetch_array(mysqli_query($conn,$query));
	
?>

<div id="genel">
	<form method="POST">
		<div class="satir">
			<img src="../../isyeri/img/github.png" />
		</div>
        <div class="satir">
			<div class="sol">Adı</div>
        	<div class="sag"><input type="text" name="adi" value=<?php echo "'".$_SESSION['staj']->getAdi()."'";?> ></div>
		</div>
        <div class="satir">
			<div class="sol">Soyadi</div>
        	<div class="sag"><input type="text" name="adi" value=<?php echo "'".$_SESSION['staj']->getSoyadi()."'";?>></div>
		</div>
         <div class="satir"><div class="sol"> <strong>İletisim</strong></div>
  		</div>
      
      
      
      <div class="satir">
			<div class="iletisimsol">Telefon</div>
        	<div class="sag"><input type="text" name="telefon" value=<?php echo "'".$row['tel']."'";?>></div>
		</div>

        <div class="satir">
			<div class="iletisimsol">Facebook</div>
        	<div class="sag"><input type="text" name="facebook" value=<?php echo "'".$row['facebook']."'";?>></div>
		</div>
        <div class="satir">
			<div class="iletisimsol">Gmail</div>
        	<div class="sag"><input type="text" name="gmail" value=<?php echo "'".$row['gmail']."'";?>></div>
		</div>
      
       <div class="satir">
			
        	<input type="submit" name="Guncelle"  value="Güncelle">
		</div>
      
      </form>
      
       
   
        
		
</div>