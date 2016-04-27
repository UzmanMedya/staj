
<form name="form1" method="post" action="">
<div id="genel">
<div class="aciklama">
Üyeol<br />açıklama<br /><br />bölümü
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
			<option selected value="0">Öğrenci</option>
            <option value="1">Akademisyen</option>
			<option value="2">İşveren</option></select>

        </div>
    </div>
    <div class="orta" id="secilenRol">
        <?php include_once("ogrenciuyeol.php");?>
    </div>
    <div id="gonder">
<input name="kaydol" type="button" value="Kaydol" class="btn btn-success btn-block" />
</div>
</div>
</div>
<div class="clear">
	
</div>
</form>




