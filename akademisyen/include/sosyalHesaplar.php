<?php
	$sonuc="";
	if(@$_POST["kaydet"])
	{
		$sonuc=sosyalHesaplarKayder();
	}
?>
<div id="govde">
<form action="" method="post" name="form1">
	<div class="satir">
		<div class="sol">Web Sitesi:</div>
		<div class="sag">
			<input type="text" name="websitesi" class="form-control" />
		</div>
	</div>
	
	<div class="satir">
		<div class="sol">Facebook:</div>
		<div class="sag">
			<input type="text" name="facebook" class="form-control" />
		</div>
	</div>
	
	<div class="satir">
		<div class="sol">Github:</div>
		<div class="sag">
			<input type="text" name="github" class="form-control" />
		</div>
	</div>
	
	<div class="satir">
		<div class="sol">Gmail:</div>
		<div class="sag">
			<input type="email" name="gmail" class="form-control" />
		</div>
	</div>
	
	<div class="satir">
		<div class="sol">Tel:</div>
		<div class="sag">
			<input type="text" name="tel" class="form-control" />
		</div>
	</div>

	<div class="satir">
		<input type="submit" value="KAYDET" name="kaydet" class="btn btn-success btn-block" />
	</div>
	<div class="satir">
		<label><?php echo $sonuc;?></label>
	</div>
</form>
</div>
