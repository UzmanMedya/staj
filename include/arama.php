<?php

	if(@$_POST){
		
	$mail=@$_POST["kullaniciadi"];
	$sifre=@$_POST["sifre"];
	if($mail!="" && $sifre!=""){
		
		girisYap($mail,$sifre);
		
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
              <input type="text"  class="form-control">
        </div>
    </div>
	
	 <div class="satir">
    	<div class="sol">Kullanıcı Soyadı:</div>
        <div class="sag">
              <input type="text"  class="form-control">
        </div>
    </div>
	
	 <div class="satir">
    	<div class="sol">İçerik(Diller):</div>
        <div class="sag">
              <input type="text"  class="form-control">
        </div>
    </div>
	
    <div id="girisyap">
<input name="ara" type="submit" value="ARA" class="btn btn-default" />
</div>
</div>
</div>

</form>
