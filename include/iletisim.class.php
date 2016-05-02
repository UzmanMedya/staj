<?php
	class iletisim
	{
		private $websitesi;
		private $facebook;
		private $github;
		private $gmail;
		
		function iletisim(){
			
		}
		
		
		function getwebsitesi(){
			return $this->websitesi;
		}
		function setwebsitesi($websitesi){
			$this->websitesi=$websitesi;
		}
		
		function getfacebook(){
			return $facebook->facebook;
		}
		function setfacebook($facebook){
			$this->facebook=$facebook;
		}
		
		function getgithub(){
			return $this->github;
		}
		function setgithub($github){
			$this->github=$github;
		}
		
		function getgmail(){
			return $this->gmail;
		}
		function setgmail($gmail){
			$this->gmail=$gmail;
		}
		

	}
	
?>