<?php
	class Duyuru
	{
		private $DuyuruId;
		private $Tarih;
		private $Baslik;
		private $Icerik;
		
	/*	function Duyuru($Tarih,$Baslik,$Icerik,$DuyuruId){
			$this->$Tarih=$Tarih
			$this->$Baslik=$Baslik
			$this->$Icerik=$Icerik
			$this->$DuyuruId=$DuyuruId
			
			
		}*/
		
		
		function getDuyuruId(){
			return $this->DuyuruId;
		}
		function setDuyuruId($DuyuruId){
			$this->DuyuruId=$DuyuruId;
		}
		
		function getTarih(){
			return $this->Tarih;
		}
		function setTarih($Tarih){
			$this->Tarih=$Tarih;
		}
		
		function getBaslik(){
			return $this->Baslik;
		}
		function setBaslik($Baslik){
			$this->Baslik=$Baslik;
		}
		
		function getIcerik(){
			return $this->Icerik;
		}
		function setIcerik($Icerik){
			$this->Icerik=$Icerik;
		}

	}
	global $conn;
	$sql = "Select * from tbl_duyuru where 1 ";	
	if($sonuc=@mysqli_query($conn,$sql))
	{
			while($satir = mysqli_fetch_array($sonuc))
		{
		echo"<!doctype html> 
		<head><title></title></head><body><table border=1 ><tr>
		<td width='1000' height='50'><p><strong>".$satir['baslik']."
		</strong></p></td></tr></table></body></html>";
		}
	}

?>