<?php
class Sms{
	var $_uid;
	var $_pass;
	var $_auth;
	function __construct() {
		$this->_uid="802651";
		$this->_pass="kfyw666";
		$this->_auth=md5("mixingkfyw666");
	}
	
	private function __clone() {
	}
	
	function sendMsg($msg,$mobile){
		$url='http://210.5.158.31:9011/hy?uid='.$this->_uid.'&auth='.$this->_auth.'&mobile='.$mobile.'&msg='.urlencode($msg).'&expid=0&encode=utf-8';
		return $this->Get($url);
	}
	
	function Get($url){
		if(function_exists('file_get_contents')){
			$file_contents = file_get_contents($url);
		}else{
			$ch = curl_init();
			$timeout = 5;
			curl_setopt ($ch, CURLOPT_URL, $url);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$file_contents = curl_exec($ch);
			curl_close($ch);
		}
		return $file_contents;
	}
}
