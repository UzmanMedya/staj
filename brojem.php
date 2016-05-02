<?php
	session_start();
	require_once("include/config.php");
	$_SESSION['uyeId']=1;
	echo $_SESSION['uyeId'];
?>

<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<link href="projem.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="mesaj">

<div id="mesajright" >
	<ul>
		<li id="gizle">
			<img class="mesajimg"src="indir2.jpg"  />
			<span>Sil</span>
		</li>
		<li onclick="yenimesajlarim('yenimesajlarim')">
			<img class="mesajimg" src="indir.jpg" />
			<span  >Yeni Mesaj</span>
		</li>
		<li onclick="anamesaj('mesajlarim')" >
			<img class="mesajimg" src="indir.jpg" />
			<span>Gelen Kutusu</span>
		</li>
		<li onclick="anamesaj('mesajlarim')">
				<img class="mesajimg" src="indir.jpg" />
			<span>Giden Kutusu</span>
		</li>
	</ul>
</div>
 
<div id="mesajleft"  >
	<div class="mesaj-icerik">
		<div class="isaret">	
		<input type="checkbox" class="checkbox" />
		
		<div class="mesajiicerik" onclick="mesajlarimmm('mesajlarim')">
		
			<img src="qw.jpg"/>	
			<span>Yazilim Muh.</span><span class="mesaj-tarih">16.05.2016 </span>
					<div class="mesaj-konu"id="msjkonu"></div>
		</div>

		</div>
	</div>
		

	<div class="mesaj-icerik">
		<div class="isaret">	
		<input type="checkbox" class="checkbox" />
		
		<div class="mesajiicerik" onclick="mesajlarimmm('mesajlarim')">
		
			<img src="qw.jpg"/>	
			<span>Yazilim Muh.</span><span class="mesaj-tarih">16.05.2016 </span>
					<div class="mesaj-konu"id="msjkonu"></div>
		</div>

		</div>
	</div>
	
	
	<div class="mesaj-icerik">
		<div class="isaret">	
		<input type="checkbox" class="checkbox" />
		
		<div class="mesajiicerik" onclick="mesajlarimmm('mesajlarim')">
		
			<img src="qw.jpg"/>	
			<span>Yazilim Muh.</span><span class="mesaj-tarih">16.05.2016 </span>
					<div class="mesaj-konu"id="msjkonu"></div>
		</div>

		</div>
	</div>
	
	
	<div class="mesaj-icerik">
		<div class="isaret">	
		<input type="checkbox" class="checkbox" />
		
		<div class="mesajiicerik" onclick="mesajlarimmm('mesajlarim')">
		
			<img src="qw.jpg"/>	
			<span>Yazilim Muh.</span><span class="mesaj-tarih">16.05.2016 </span>
					<div class="mesaj-konu"id="msjkonu"></div>
		</div>

		</div>
	</div>
	
	
	<div class="mesaj-icerik">
		<div class="isaret">	
		<input type="checkbox" class="checkbox" />
		
		<div class="mesajiicerik" onclick="mesajlarimmm('mesajlarim')">
		
			<img src="qw.jpg"/>	
			<span>Yazilim Muh.</span><span class="mesaj-tarih">16.05.2016 </span>
					<div class="mesaj-konu"id="msjkonu"></div>
		</div>

		</div>
	</div>
	
	
	<div class="mesaj-icerik">
		<div class="isaret">	
		<input type="checkbox" class="checkbox" />
		
		<div class="mesajiicerik" onclick="mesajlarimmm('mesajlarim')">
		
			<img src="qw.jpg"/>	
			<span>Yazilim Muh.</span><span class="mesaj-tarih">16.05.2016 </span>
					<div class="mesaj-konu"id="msjkonu"></div>
		</div>

		</div>
	</div>
</div>

<div id="mesajlarim" style="visibility: hidden">
<div id="yenimesajlarim" style="visibility: hidden">
	<form action="" method="post">
		<table border="0" width=400>
			<tr>
				<td>
					<strong>Alýcý:
				</td>
				<td> 
					<input type="text" id="textid">
				</td>
			</tr>
			<tr>
				<td>
					<strong>Ýleti Konusu:</strong>
				</td>
				<td>
					<input type="text" name="soyadi">
				</td>
			</tr>
			<tr>
				<td>
					<strong>Mesaj:</strong>
				</td>
				<td>
					<textarea name="mesaj" cols="100%" rows="10" id="textarea"></textarea>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type="submit" value="Gönder">
					<input type="reset" value="Temizle">
				</td>
			</tr>
		</table>
	</form>
</div>

<div id="gelenmesaj" >
	<table>
		<tr>
			<td>
				<strong>Ýleti Konusu:</strong>
			</td>
			<td>
				<input type="text" name="soyadi">
			</td>
		</tr>
		<tr>
			<td>
				<strong>Mesaj:</strong>
			</td>
			<td>
				<textarea name="mesaj" cols="100%" rows="20%"></textarea>
			</td>
		</tr>
	</table>
</div>


 </div>
</div>


<?php

global $conn;

$sorgu="SELECT * FROM tbl_mesaj WHERE `gonderen_id`='".$_SESSION['uyeId']."'";
$sonuc=mysqli_query($conn,$sorgu);

if($sonuc){
	while($sutun=mysqli_fetch_row($sonuc)){
		echo $sutun[1]."<br/>";
	}
}

?>

<script>
function mesajlarimmm(i) {
    document.getElementById(i).style.visibility='visible';
	 document.getElementById("yenimesajlarim").style.visibility='hidden';
}
function yenimesajlarim(i) {
    document.getElementById(i).style.visibility='visible';
	document.getElementById("mesajlarim").style.visibility='hidden';
}
function anamesaj(i) {
	document.getElementById("yenimesajlarim").style.visibility='hidden';
	document.getElementById("mesajlarim").style.visibility='hidden';
}


var checkBoxSayac = function() {
  var n = $( "input:checked" ).length;
  if(n==0){
	$("#gizle").css("display","none");
  }
  else{
	$("#gizle").css("display","inline");
  }
};
checkBoxSayac();
 
$( "input[type=checkbox]" ).on( "click", checkBoxSayac );



$(document).ready(function()
{
    $("msjkonu").click(function()
	{
        $("#msjkonu").load("brocem.html ");
    });
});

</script>
</body>
</html>
