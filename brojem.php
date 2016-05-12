<?php
	session_start();
	require_once("include/config.php");
	$_SESSION['uyeId']=1;
	
	if($_POST){
		if($_POST["m"]=="gitti"){
			//Mesaj gönderme iþlemini burada yapýyorum
			$alici=$_POST["alici"];
			$konu=$_POST["konu"];
			$alicininMesaj=$_POST["alicininMesaj"];
			global $conn;
			$sorgu = "INSERT INTO `tbl_mesaj`(`gonderen_id`, `alici_id`, `konu`, `mesaj`, `tarih`) 
					VALUES ('".$_SESSION['uyeId']."' , '".$alici."' , '".$konu."' , '".$alicininMesaj."' , '11-11-2016')";
			$sonuc=mysqli_query($conn,$sorgu);
			if($sonuc)
				echo "za";
		}
		else{
			//Mesaj silme iþlemini burada yapýyorum
			global $conn;
			$sorgu = "DELETE FROM `tbl_mesaj` WHERE `id`=".$_POST["idgizli"]."";
			$sonuc=mysqli_query($conn,$sorgu);
		}
	}
	
?>

<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<link href="projem.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="mesaj">
	<div id="mesajright">
		<ul>
			<li id="yeniTikla">
				<img class="mesajimg" src="indir.jpg" />
				<span>Yeni Mesaj</span>
			</li>
			<li id="gelenTikla"  >
				<img class="mesajimg" src="indir.jpg" />
				<span>Gelen Kutusu</span>
			</li>
			<li id="gidenTikla" >
					<img class="mesajimg" src="indir.jpg" />
				<span>Giden Kutusu</span>
			</li>
		</ul>
	</div>
 
	<div id="mesajleft" class="gelenKutusu">
		<div class="mesaj-icerik">
			<center>
			<p>
			<div>
				<span><b>GELEN KUTUSU</b></span>
				<br/>
				<span>
				<b>
					<?php echo Date("j-n-o"); ?> 
				</b>
				</span>
			</div>
			</p>
			</center>
		</div>
		<?php
		global $conn;

		$sorgu = "SELECT `adi`,`soyadi`,`foto`,`tarih`,`tbl_mesaj`.`id` FROM `tbl_mesaj` LEFT JOIN `tbl_kullanici` ON tbl_mesaj.gonderen_id = tbl_kullanici.id WHERE `alici_id`='".$_SESSION['uyeId']."'";
		$sonuc=mysqli_query($conn,$sorgu);

		if($sonuc){
			while($sutun=mysqli_fetch_row($sonuc)){
				echo '
				<div class="mesaj-icerik">
						<div class="isaret">	
							<input type="checkbox" class="checkbox" />
							
							<div id="'.$sutun[4].'" class="mesajiicerik" ">
							
								<img src="'.$sutun[2].'"/>	
								<span>'.$sutun[0]." ".$sutun[1].'</span><span class="mesaj-tarih">'.$sutun[3].'</span>
								<div class="mesaj-konu"id="msjkonu"></div>
							</div>

						</div>
				</div>';
				
			}
		}
		?>
		
		

		
		
	</div>
	
	
	
	<div id="mesajleft" class="gidenKutusu">
		<div class="mesaj-icerik">
			<center>
			<p>
			<div>
				<span><b>GÝDEN KUTUSU</b></span>
				<br/>
				<span>
				<b>
					<?php echo Date("j-n-o"); ?> 
				</b>
				</span>
			</div>
			</p>
			</center>
		</div>
		<?php
		global $conn;

		$sorgu = "SELECT `adi`,`soyadi`,`foto`,`tarih`,`tbl_mesaj`.`id` FROM `tbl_mesaj` LEFT JOIN `tbl_kullanici` ON tbl_mesaj.alici_id = tbl_kullanici.id WHERE `gonderen_id`='".$_SESSION['uyeId']."'";
		$sonuc=mysqli_query($conn,$sorgu);

		if($sonuc){
			while($sutun=mysqli_fetch_row($sonuc)){
				echo 
				'<div class="mesaj-icerik">
						<div class="isaret">	
							<input type="checkbox" class="checkbox" />
							
							<div id="'.$sutun[4].'" class="mesajiicerikGiden"">
								<img src="'.$sutun[2].'"/>	
								<span>'.$sutun[0]." ".$sutun[1].'</span><span class="mesaj-tarih">'.$sutun[3].'</span>
								<div class="mesaj-konu" id="msjkonu"></div>
							</div>

						</div>
				</div>';
				
			}
		}
		?>
		
		
		
		
		
	</div>
	

	
	<!--  Mesaj içeðini buraya yazdýracaðým  -->
	
<div id="mesajlarim" >
	<div id="yenimesajlarim">
		<form action="brojem.php?m=gitti" method="post">
			<table border="0" cellpadding="10px">
				<tr>
					<td id="gonderenTd">
						<strong>Gönderen:</strong>
					</td>
					<td> 
						<input type="text" id="gonderen"></input>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Ýleti Konusu</strong>
					</td>
					<td>
						<input type="text" id="ileti"></input>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Mesaj</strong>
					</td>
					<td>
						<textarea name="mesaj" cols="100%" rows="10" id="gonderenMesaj"></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" id="idGizli" name="idgizli" /></input>
					</td>
					<td>
						<input type="submit" value="Mesajý Sil">
					</td>
				</tr>
			</table>
		</form>
	</div>
	
	<!-- Yeni Mesaj Yeri -->
	<div id="yeniMesajYolla">
		<form action="" method="post">
			<table border="0" cellpadding="10px">
				<tr>
					<td>
						<strong>Alýcý:
					</td>
					<td> 
						<input type="text" id="alici" name="alici">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Ýleti Konusu</strong>
					</td>
					<td>
						<input type="text" name="konu">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Mesaj</strong>
					</td>
					<td>
						<textarea name="alicininMesaj" cols="100%" rows="10" id="alicininMesaj"></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="m" value="gitti" />
					</td>
					<td>
						<input type="submit" value="Gönder">
						<input type="reset" value="Temizle">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>



</div>




<script>
/*
function mesajlarimmm(i) {
	console.log("mesajlarimmm("+i+")");
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                console.log(xmlhttp.responseText);
            }
        };
        xmlhttp.open("GET", "mesajIcerikGetir.php?q=" + i, true);
        xmlhttp.send();
}

function yenimesajlarim(i) {
    document.getElementById(i).style.visibility='visible';
	document.getElementById("mesajlarim").style.visibility='hidden';
}
function anamesaj(i) {
	document.getElementById("yenimesajlarim").style.visibility='hidden';
	document.getElementById("mesajlarim").style.visibility='hidden';
}
*/


/*
var checkBoxSayac = function() {
  var n = $( "input:checked" ).length;
  if(n==0){
	$("#gizle").css("display","none");
  }
  else{
	$("#gizle").css("display","inline");
  }
}
checkBoxSayac();
 
$( "input[type=checkbox]" ).on( "click", checkBoxSayac );
*/


$(document).ready(function()
{
	console.log("ss");
	$(".gidenKutusu").hide();
	$("#yeniMesajYolla").hide();
	//document.getElementsByClassName('gidenKutusu').style.visibility='hidden';
    $("msjkonu").click(function()
	{
        $("#msjkonu").load("brocem.html ");
    });
	
	$("#gelenTikla").click(function(){
		console.log("gelen kutusu tiklandi");
		$("#yeniMesajYolla").hide();
		$(".gidenKutusu").hide();
		$(".gelenKutusu").show();
		$("#yenimesajlarim").show();
	});
	
	
	$("#gidenTikla").click(function(){
		console.log("giden kutusu tiklandi");
		$("#yeniMesajYolla").hide();
		$(".gelenKutusu").hide();
		$(".gidenKutusu").show();
		$("#yenimesajlarim").show();
	});
	
	$("#yeniTikla").click(function(){	
		$(".gelenKutusu").show();
		$(".gidenKutusu").hide();
		$("#yenimesajlarim").hide();
		$("#yeniMesajYolla").show();
		console.log("tiklandi");
	});
	
	$(".mesajiicerik").click(function(){
		console.log("this: "+ this.id);
		$.ajax({
		  method: "POST",
		  url: "mesajIcerikGetir.php",
		  data: { "q" : this.id },
		  dataType: "json",
		  success:function(veri){
			if(veri.don=="bbb"){
				console.log("döndü");
			}
			else{
				console.log("girdi");
				console.log(veri);
				console.log(veri["durum"]);
				if(veri=="")
				{ 
					console.log("veri boþ"); 
				}
				if(veri["durum"]==true){
					$("#gonderen").val(veri["adi"]);
					$("#ileti").val(veri["konu"]);
					$("#gonderenMesaj").val(veri["mesaj"]);
					$("#gonderenTd").text("");
					$("#gonderenTd").html("<strong>Gönderen</strong>");
					$("#idGizli").val(veri["id"]);
					//alert($("#gonderen").val())
					//console.log($("#gonderen").val());;  
					console.log(veri["adi"]);
					console.log(veri["soyadi"]);
					console.log(veri["mesaj"]);
				}
				else{
					console.log("girmedi");
				}
			}
			
		  }
		});
	});
	
	
	
	$(".mesajiicerikGiden").click(function(){
		console.log("this: "+ this.id);
		$.ajax({
		  method: "POST",
		  url: "mesajGidenMesajGetir.php",
		  data: { "q" : this.id },
		  dataType: "json",
		  success:function(veri){
			if(veri.don=="bbb"){
				console.log("döndü");
			}
			else{
				console.log("girdi");
				console.log(veri);
				console.log(veri["durum"]);
				if(veri=="")
				{ 
					console.log("veri boþ"); 
				}
				if(veri["durum"]==true){
					$("#gonderen").val(veri["adi"]);
					$("#ileti").val(veri["konu"]);
					$("#gonderenMesaj").val(veri["mesaj"]);
					$("#gonderenTd").text("");
					$("#gonderenTd").html("<strong>Alýcý</strong>");
					$("#idGizli").val(veri["id"]);
					//alert($("#gonderen").val())
					//console.log($("#gonderen").val());;  
					console.log(veri["adi"]);
					console.log(veri["soyadi"]);
					console.log(veri["mesaj"]);
				}
				else{
					console.log("girmedi");
				}
			}
			
		  }
		});
	});
	
	
});

</script>
</body>
</html>
