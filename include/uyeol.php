<?php

if(@$_POST["kaydol"])
{
	
	$yetki=@$_POST["yetki"];
	if($yetki==1)//ogrenci
	{
		
		require_once("ogrenci/include/OgrenciProfilClass.php");
		
		
		$ogrenci=new Ogrenci();
		
		
		$ogrenci->setMail(@$_POST["mail"]);
		$ogrenci->setParola(MD5(@$_POST["parola"]));
		$ogrenci->setAd(@$_POST["adi"]);
		$ogrenci->setSoyad(@$_POST["soyadi"]);
		$ogrenci->setOkulNu(@$_POST["okulno"]);
		$ogrenci->setTelNu(@$_POST["telno"]);
		$ogrenci->setCinsiyet(@$_POST["cinsiyet"]);
		$ogrenci->setDogumTarihi(@$_POST["dogumtarihi"]);
		$ogrenci->setIl(@$_POST["sehir"]);
		$ogrenci->setIlce(@$_POST["ilce"]);
		$ogrenci->setAdres(@$_POST["adres"]);
		
		kayitOlOgrenci($ogrenci);
		
	}else if($yetki==2)//akademisyen
	{
		
		require_once("akademisyen/include/akademisyen.php");

		$akademisyen=new AkademisyenGuncelle();
		
		 
		$akademisyen->setAdi(@$_POST["adi"]);
		$akademisyen->setSoyadi(@$_POST["soyadi"]);
		$akademisyen->setTc(@$_POST["tcno"]);
		$akademisyen->setUnvan(@$_POST["unvan"]);
		$akademisyen->setMail(@$_POST["mail"]);		
		$akademisyen->setParola(MD5(@$_POST["parola"]));
		
		
		kayitOlAkademisyen($akademisyen);
	}else if($yetki==3)//işveren
	{
		require_once("isyeri/include/isYeri.php");
		
		$isyeri=new IsYeri();
		
		$isyeri->setAd(@$_POST["adi"]);
		$isyeri->setIl(@$_POST["sehir"]);
		$isyeri->setIlce(@$_POST["ilce"]);
		$isyeri->setAdres(@$_POST["adres"]);
		$isyeri->setHizmet(@$_POST["hizmet"]);
		$isyeri->setMail(@$_POST["mail"]);
		$isyeri->setParola(MD5(@$_POST["parola"]));
		
		kayitOlIsYeri($isyeri);
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
    	<div class="sol">Yetki:</div>
        <div class="sag">
            <select name="yetki" id="yetki" size="1" class="form-control">
			<option selected value="1">Öğrenci</option>
            <option value="2">Akademisyen</option>
			<option value="3">İşveren</option></select>

        </div>
    </div>
	<div class="satir">
    	<div class="sol">Mail:</div>
        <div class="sag">
              <input type="email" onkeypress="kontro2()"  id="mail" name="mail" class="form-control">
			  	<div id="cont"> </div>
        </div>
	
    </div>
   <div class="satir">
    	<div class="sol">Parola:</div>
        <div class="sag">
            
              <input type="password" id="parola" name="parola"  onkeypress="kontrol()" class="form-control">
            <div id="contParola"> </div>
        </div>
    </div>
     <div class="satir">
    	<div class="sol">Parola Tekrar:</div>
        <div class="sag">
           
              <input type="password" name="parolatekrar" id="parola2" onkeypress="kontrolParolaTekrar()" class="form-control">
             <div id="contParolaTekrar"> </div>
        </div>
    </div>

    <div class="orta" id="secilenRol">
        <?php include_once("ogrenciuyeol.php");?>
    </div>
    <div id="gonder">
<input name="kaydol" id="kaydol" type="submit" value="Kaydol" class="btn btn-success btn-block" />
</div>
</div>
</div>
<div class="clear">
	
</div>
 
</form>

 <script type="text/javascript" language="javascript">
          function kontro2() {
              var duzenli = new RegExp(/^[a-z]{1}[\d\w\.-]+@[\d\w-]{3,}\.[\w]{2,3}(\.\w{2})?$/);
              var mail = form1.mail.value;
              if (duzenli.test(mail)) {
				  document.getElementById("kaydol").type = 'submit';
                  document.getElementById("cont").innerHTML = "<b>Mail geçerli</b>";
                  document.getElementById("cont").style.color = "Green";
                  document.getElementById("cont").style.fontsize = "16px";
              }
              else {
				  document.getElementById("kaydol").type = 'button';
                  document.getElementById("cont").innerHTML = "<b>Mail geçersiz</b>";
                  document.getElementById("cont").style.color = "Red";
                  document.getElementById("cont").style.fontsize = "16px";
              }
          }
          function kontrol() {

              var duzenli = new RegExp(/^[a-z]{1}[\d\w\.-]+@[\d\w-]{3,}\.[\w]{2,3}(\.\w{2})?$/);
              var mail = form1.parola.value;
              if (duzenli.test(mail)) {
				    document.getElementById("kaydol").type = 'submit';
                  document.getElementById("contParola").innerHTML = "mail geçerli";
              }
              var s = form1.parola.value.length;
              if (s <= 6) {
				  document.getElementById("kaydol").type = 'button';
                  document.getElementById("contParola").style.color = "Red";
                  document.getElementById("contParola").style.fontsize = "16px";
                  document.getElementById("contParola").innerHTML = "<b>Şifre yetersiz</b>";
              }
              else {
				  document.getElementById("kaydol").type = 'submit';
                  document.getElementById("contParola").style.color = "Green";
                  document.getElementById("contParola").style.fontsize = "16px";
                  document.getElementById("contParola").innerHTML = "<b>Şifre yeterli</b>";
              }
          }
		   function kontrolParolaTekrar() {

              var duzenli = new RegExp(/^[a-z]{1}[\d\w\.-]+@[\d\w-]{3,}\.[\w]{2,3}(\.\w{2})?$/);
              var mail = form1.parola2.value;
              if (duzenli.test(mail)) {
				    document.getElementById("kaydol").type = 'submit';
                  document.getElementById("contParolaTekrar").innerHTML = "mail geçerli";
              }
              var s = form1.parola2.value.length;
              if (s <= 6) {
				 // document.getElementById('kaydol').type = 'olumsuz';
                  document.getElementById("contParolaTekrar").style.color = "Red";
                  document.getElementById("contParolaTekrar").style.fontsize = "16px";
                  document.getElementById("contParolaTekrar").innerHTML = "<b>Şifre yetersiz</b>";
              }
              else {
                  document.getElementById("contParolaTekrar").style.color = "Green";
                  document.getElementById("contParolaTekrar").style.fontsize = "16px";
                  document.getElementById("contParolaTekrar").innerHTML = "<b>Şifre yeterli</b>";
              }
          }
    </script>




