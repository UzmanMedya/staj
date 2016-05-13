 <div id="proje_hakkinda">
<form name="form1" method="post" action="">
<label id='proje_hakkinda_baslik'>
<center>Bildirimler</center>
</label>
<?php
 require_once("include/config.php");
 global $conn;
 $sorgu=mysqli_query($conn," SELECT * FROM tbl_userbildirim ");
		$say=mysqli_num_rows($sorgu);
       // echo "say".$say;
        if($say>0) 
		{ 
			while($kayit=mysqli_fetch_array($sorgu))
			{
?>

<div id="proje-content">
<label id="proje-baslik"><?php echo $kayit["baslik"]; ?></label><br/><br/>
<label id="proje-icerik"><?php echo $kayit["icerik"]; ?>
</label><br>
			
				<hr/>
				</div>
<?php
			}
		}
?>

</form>
</div>
