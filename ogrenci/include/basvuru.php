<?php
	
	$id=$_SESSION["staj"]->getID();
	
	global $conn;

	if(@$_POST["kaydet"])
	{
		$ad=$_POST["ad"];
		$onsoz=$_POST["onsoz"];
		$icerik=$_POST["icerik"];
		$tarih=$_POST["tarih"];
		
		$query ="Select * from tbl_isyeri where adi=\"".$ad."\"";
							
		$result =mysqli_query($conn,$query);
		$array;
		if(mysqli_num_rows($result) >=1)
		{
			
			$array=mysqli_fetch_array($result);
			$query ="INSERT INTO tbl_basvuru(isyeri_id, ogrenci_id, tarih, onsoz, aciklama) VALUES (".$array["user_id"].",".$id.",".$tarih.",'".$onsoz."','".$icerik."')";
							
			$result =mysqli_query($conn,$query);
			if($result)
			{
				echo "<script>alert(\"ba�vuru yap�ld�\");</script>";
			}
			
		}
		else
		{
			echo "�al��mad�";
		}
	}
		if(@$_GET["id"]!="")
		{
	$isyeriid=@$_GET["id"];
		$query2 ="Select * from tbl_isyeri where user_id=".$isyeriid;
		$result2 =mysqli_query($conn,$query2);
		$array;
		if(mysqli_num_rows($result2) >=1)
		{
			$array=mysqli_fetch_array($result2);
		}
		}
	
?>
<div id="govde">
<form action="" method="post" name="form1">
	<div class="satir">
		<div class="sol">Firma Ad�:</div>
		<div class="sag">
			<input type="text" name="ad" class="form-control" value="<?php echo $array["adi"]; ?>"/>
		</div>
	</div>
	<div class="satir">
		<div class="sol">Tarih:</div>
		<div class="sag">
			<input type="date" name="tarih" class="form-control" />
		</div>
	</div>
	
	<div class="satir">
		<div class="sol">�ns�z:</div>
		<div class="sag">
			<input type="text" name="onsoz" class="form-control" />
		</div>
	</div>
	
	<div class="satir">
		<div class="sol">A��klama:</div>
		<div class="sag">
			<input type="text" name="icerik" class="form-control"/>
		</div>
	</div>
	
<input type="hidden"  name="id" value="<?php echo $array["id"]; ?>" />
	<div class="satir">
		<input type="submit" value="BA�VUR" name="kaydet" class="btn btn-success btn-block" />
	</div>
</form>
</div>
