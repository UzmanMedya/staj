<?php

if(@$_POST["kaydol"])
{
	echo "qqq";
	$yetki=@$_POST["yetki"];
	if($yetki==1)//ogrenci
	{
		echo $yetki;
		require_once("ogrenci/include/OgrenciProfilClass.php");
		
		
		$ogrenci=new Ogrenci();
		
		
		$ogrenci->setMail(@$_POST["mail"]);
		$ogrenci->setParola(@$_POST["parola"]);
		$ogrenci->setAd(@$_POST["adi"]);
		$ogrenci->setSoyad(@$_POST["soyadi"]);
		$ogrenci->setOkulNu(@$_POST["okulno"]);
		$ogrenci->setTelNu(@$_POST["telno"]);
		$ogrenci->setCinsiyet(@$_POST["cinsiyet"]);
		$ogrenci->setDogumTarihi(@$_POST["dogumtarihi"]);
		$ogrenci->setIl(@$_POST["sehir"]);
		$ogrenci->setIlce(@$_POST["ilce"]);
		$ogrenci->setKalanAdres(@$_POST["adres"]);
		
		kayitOlOgrenci($ogrenci);
		
	}else if($yetki==2)//akademisyen
	{
		
	}else//işveren
	{
		
	}
}
	?>
<form name="form1" method="post" action="">

<div id="genel">
<div class="aciklama">
Üyeol<br />Sosyal Staj Eğitim Platformu akademisyen, öğrenci ve iş yeri sahiplerinin buluştuğu nokta.<br /><br />
</div>
<div class="uyeol">
	<div class="satir">
    	<div class="sol">Mail:</div>
        <div class="sag">
              <input type="email" name="mail" class="form-control">
        </div>
    </div>
   <div class="satir">
    	<div class="sol">Parola:</div>
        <div class="sag">
            
              <input type="password" name="parola" class="form-control">
            
        </div>
    </div>
     <div class="satir">
    	<div class="sol">Parola Tekrar:</div>
        <div class="sag">
           
              <input type="password" name="parolatekrar" class="form-control">
             
        </div>
    </div>
     <div class="satir">
    	<div class="sol">Yetki:</div>
        <div class="sag">
            <select name="yetki" id="yetki" size="1" class="form-control">
			<option selected value="1">Öğrenci</option>
            <option value="2">Akademisyen</option>
			<option value="3">İşveren</option></select>

        </div>
    </div>
    <div class="orta" id="secilenRol">
        <?php include_once("ogrenciuyeol.php");?>
    </div>
    <div id="gonder">
<input name="kaydol" type="submit" value="Kaydol" class="btn btn-success btn-block" />
</div>
</div>
</div>
<div class="clear">
	
</div>
</form>




