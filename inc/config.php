<?php 
	$path = "/";
	$whitelist = array('127.0.0.1','::1');
	if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
	   $path = "/gettext-starter/";
	}

	//GETTEXT
	$lang = (isset($_REQUEST["lang"])) ? trim(strip_tags($_REQUEST["lang"])) : "es_ES";
	putenv("LC_ALL=$lang");
	setlocale(LC_ALL, $lang);
	bindtextdomain("messages", "./locale");
	textdomain("messages");
?>