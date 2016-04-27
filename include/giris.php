<?php

	if(@$_POST){
		echo "geldi";
	$mail=@$_POST["kullaniciadi"];
	$sifre=@$_POST["sifre"];
	if($mail!="" && $sifre!=""){
		echo "geldi";
		girisYap($mail,$sifre);
		
	}
	
	
}

?>
<form name="form1" method="post" action="">
<div id="genel">
<div class="aciklama">
Giriş<br />aciklama<br /><br />bölümü<br /><br />
</div>
<div class="giris">
	<div class="satir">
    	<div class="sol">Kullanıcı Adı:</div>
        <div class="sag">
              <input type="text" name="kullaniciadi" class="form-control">
        </div>
    </div>
   <div class="satir">
    	<div class="sol">Şifre:</div>
        <div class="sag">
            
              <input type="password" name="sifre" class="form-control">
            
        </div>
    </div>
    <div id="girisyap">
<input name="giris" type="submit" value="giris" class="btn btn-default" />
</div>
</div>
</div>

</form>