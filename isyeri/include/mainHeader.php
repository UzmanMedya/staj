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
			<label id="bildirimSayisi">5</label>
			<div id="bildirim-icerik">
				<img src="img/isaret.png" id="isaret"/>

				<?php $i=0; while($i<5)
				{
				?>
				<div class="bildirim">
					<a href="<?php echo 'index.php?sayfa=mesaj&id='.$i;?>">
						<div>
							<img src="../profil/user.png"/>
							<span>Yeni mesaj</span><br/>
							<label>asdsa asd :)</label>
						</div>
					</a>
				</div>
				<?php
					$i++;
				}
				?>


			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>