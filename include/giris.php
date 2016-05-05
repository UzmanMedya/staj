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
<div class="aciklama">
Giriş<br />aciklama<br /><br />bölümü<br /><br />
</div>
<div class="giris">
	<div class="satir">
    	<div class="sol">Kullanıcı Adı:</div>
        <div class="sag">
              <input type="text" onkeypress="kontro2()" name="kullaniciadi" class="form-control">
        </div>
    </div>
   <div class="satir">
    	<div class="sol">Şifre:</div>
        <div class="sag">
            
              <input type="password" onkeypress="kontrol()" name="sifre" class="form-control">
            
        </div>
    </div>
    <div id="girisyap">
<input name="giris" type="submit" value="giris" class="btn btn-default" />
</div>
 <div id="cont"></div>
</div>
</div>

     <script type="text/javascript" language="javascript">
          function kontro2() {
              var duzenli = new RegExp(/^[a-z]{1}[\d\w\.-]+@[\d\w-]{3,}\.[\w]{2,3}(\.\w{2})?$/);
              var mail = form1.kullaniciadi.value;
              if (duzenli.test(mail)) {
                  document.getElementById("cont").innerHTML = "<b>Mail geçerli</b>";
                  document.getElementById("cont").style.color = "Green";
                  document.getElementById("cont").style.fontsize = "16px";
              }
              else {
                  document.getElementById("cont").innerHTML = "<b>Mail geçersiz</b>";
                  document.getElementById("cont").style.color = "Red";
                  document.getElementById("cont").style.fontsize = "16px";
              }
          }
          function kontrol() {

              var duzenli = new RegExp(/^[a-z]{1}[\d\w\.-]+@[\d\w-]{3,}\.[\w]{2,3}(\.\w{2})?$/);
              var mail = form1.sifre.value;
              if (duzenli.test(mail)) {
                  document.getElementById("cont").innerHTML = "mail geçerli";
              }
              var s = form1.sifre.value.length;
              if (s <= 6) {
                  document.getElementById("cont").style.color = "Red";
                  document.getElementById("cont").style.fontsize = "16px";
                  document.getElementById("cont").innerHTML = "<b>Şifre yetersiz</b>";
              }
              else {
                  document.getElementById("cont").style.color = "Green";
                  document.getElementById("cont").style.fontsize = "16px";
                  document.getElementById("cont").innerHTML = "<b>Şifre yeterli</b>";
              }
          }
    </script>
</form>