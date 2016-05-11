<?php
	
	$id=$_SESSION["staj"]->getID();
	
	$sonuc="";
	if(@$_POST["kaydet"])
	{
		$sonuc=sosyalHesaplarKaydet();
	}

	global $conn;
	$query ="Select * from tbl_iletisim where user_id=".$id;
						
	$result =mysqli_query($conn,$query);
	$array;
	if(mysqli_num_rows($result) >=1)
	{
		$array=mysqli_fetch_array($result);
	}else
	{
		$array=array("id"=>-1,"web_site"=>"","facebook"=>"","github"=>"","gmail"=>"","tel"=>"");
	}
	
?>
<div id="govde">
<form action="" method="post" name="form1">
	<div class="satir">
		<div class="sol">Web Sitesi:</div>
		<div class="sag">
			<input type="text" name="websitesi" class="form-control" value=<?php echo "'".$array["web_site"]."'";?>/>
		</div>
	</div>
	
	<div class="satir">
		<div class="sol">Facebook:</div>
		<div class="sag">
			<input type="text" name="facebook" class="form-control" value=<?php echo "'".$array["facebook"]."'";?>/>
		</div>
	</div>
	
	<div class="satir">
		<div class="sol">Github:</div>
		<div class="sag">
			<input type="text" name="github" class="form-control" value=<?php echo "'".$array["github"]."'";?>/>
		</div>
	</div>
	
	<div class="satir">
		<div class="sol">Gmail:</div>
		<div class="sag">
			<input type="email" name="gmail" class="form-control" value=<?php echo "'".$array["gmail"]."'";?>/>
		</div>
	</div>
	
	<div class="satir">
		<div class="sol">Tel:</div>
		<div class="sag">
			<input type="text" name="tel" class="form-control" value=<?php echo "'".$array["tel"]."'";?>/>
		</div>
	</div>
<input type="hidden"  name="id" value="<?php echo $array["id"]; ?>" />
	<div class="satir">
		<input type="submit" value="KAYDET" name="kaydet" class="btn btn-success btn-block" />
	</div>
	<div class="satir">
		<label><?php echo $sonuc;?></label>
	</div>
</form>
</div>
