<div id="headerAnaDiv">
	<div id="headerLeft">
		<div id="headerLogo">
			<img src="../profil/user.png">
		</div>
		</div>
	
	<div id="aramabolumu">
	     <input  type ="text" id="arama" name="arama_text"> </input>
		 <div class="karama_sonuc">
		 
		 <div class="arama_sonuc"  onclick="location.href='index.php'" style="cursor:pointer">
			<span  >Sonuc</span>
		 </div>
		 </div>
	</div>
	
	
	
	
	<div id="headerRight">
		
		<a href="cikis.php">
			<div id="headerButon">
				<span>Çıkış</span>
			</div>
		</a>
		<div id="bildirim">
			<img src="img/notification.png">
			<label id="bildirimSayisi"><?php echo $_SESSION["staj"]->getBildirim(); ?></label>
			<div id="bildirim-icerik">
				<img src="img/isaret.png" id="isaret"/>
				<?php //mesajları yükle
					$sonuc =getMesaj();
					while($row = mysqli_fetch_array($sonuc))
					{
						$id =$row["id"];
						$isim =$row["adi"]." ".$row["soyadi"];
						$foto =$row["foto"];
						$mesaj =$row["mesaj"];
						if($foto =="")
						{
							$foto ="../profil/user.png";
						}
				?>	<div class="bildirim">
						<div>
							<img src="<?php echo $foto; ?>"/>
							<span><?php echo $isim ?></span><br/>
							<label><?php echo $mesaj ?></label>
						</div>
					</a>
					</div>
				<?php
					}
				?>
				
				<?php //bildirimleri yükle
					$sonuc =getBildirimler();
					while($row = mysqli_fetch_array($sonuc))
					{
						$id =$row["id"];
						$isim =$row["adi"]." ".$row["soyadi"];
						$foto =$row["foto"];
						$baslik =$row["baslik"];
						$bil_id =$row["bil_id"];
						if($foto =="")
						{
							$foto ="../profil/user.png";
						}
				?>	<div class="bildirim">
					<a href=<?php echo "'index.php?sayfa=bildirim&id=$id'"; echo " onclick='oku($bil_id,this)'";?>>
						<div>
							<img src="<?php echo $foto; ?>"/>
							<span><?php echo $isim ?></span><br/>
							<label><?php echo $baslik ?></label>
						</div>
					</a>
					</div>
				<?php
					}
				?>
				
			</div>
		</div>


	</div>
	<div class="clear"></div>
</div>