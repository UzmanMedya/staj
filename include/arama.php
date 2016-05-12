<?php

if(@$_POST["ara"])
{
	
	$yetki=@$_POST["yetki"];
	if($yetki==1)//ogrenci
	{
		aramaYap($yetki,@$_POST["adi"],@$_POST["soyadi"],@$_POST["icerik"]);
	}
	else if($yetki==2)//akademisyen
	{
		aramaYap($yetki,@$_POST["adi"],@$_POST["soyadi"],@$_POST["icerik"]);
	}else if($yetki==3)//işveren
	{
		aramaYap($yetki,@$_POST["adi"],@$_POST["soyadi"],@$_POST["icerik"]);
	}
	
}

?>

<form name="form1" method="post" action="">
<div id="genel">
<div class="giris">
		<div class="satir">
    	<div class="sol">Yetki:</div>
        <div class="sag">
            <select name="yetki" id="yetki" size="1" class="form-control">
			<option selected value="1">Öğrenci</option>
            <option value="2">Akademisyen</option>
			<option value="3">İşveren</option></select>

        </div>
    </div>
	
   <div class="satir">
    	<div class="sol">Kullanıcı Adı:</div>
        <div class="sag">
              <input type="text" name="adi"  class="form-control">
        </div>
    </div>
	
	 <div class="satir">
    	<div class="sol">Kullanıcı Soyadı:</div>
        <div class="sag">
              <input type="text" name="soyadi" class="form-control">
        </div>
    </div>
	
	 <div class="satir">
    	<div class="sol">İçerik(Diller):</div>
        <div class="sag">
              <input type="text" name="icerik" class="form-control">
        </div>
    </div>
	
    <div id="girisyap">
<input name="ara" type="submit" value="ARA" class="btn btn-default" />
</div>
</div>
</div>

</form>
