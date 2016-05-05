<div class="satir">
    	<div class="sol">İşyeri Adı:</div>
        <div class="sag">
              <input type="text" name="adi" class="form-control"> 
        </div>
    </div>
      <div class="satir">
    	<div class="sol">Şehir:</div>
         <div class="sag">
              <select name="sehir" size="1" id="il-sec" class="form-control">
                 <option value="-1">ilk seç</option>
                 <?php 
                    il_listele();
                ?>
              </select>
        </div>
    </div>
    <div class="satir">
    	<div class="sol">İlçe:</div>
        <div class="sag">
              <select name="ilce" size="1" id="ilce-sec" class="form-control">
                 
              </select>
        </div>
    </div>
     <div class="satir">
    	<div class="sol">Adres:</div>
        <div class="sag">
              <textarea name="adres" rows="3" class="form-control"></textarea>
        </div>
    </div>
    
     <div class="satir">
    	<div class="sol">Hizmet Alanı:</div>
        <div class="sag">
              <textarea name="hizmet" rows="3" class="form-control"></textarea>
        </div>
    </div>
    
    