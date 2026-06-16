<?php
	@session_start();
	$tz = 'Asia/Calcutta';   
	date_default_timezone_set($tz);
	if($_SERVER['HTTP_HOST'] == 'localhost:8000' || $_SERVER['HTTP_HOST'] == 'localhost' ){ 
		error_reporting(E_ALL);
		$baseurl = 'http://localhost/urjasteels2026/';
		$_host = "localhost";
		$_username = "root";
		$_password = "";
		$_database = "urjasteels";
	}else{
		error_reporting(0);
		$baseurl = 'https://urjasteels.com/';
		$_host = "localhost";
		$_username = "urjasteels_dbusr";
		$_password = "seDAD2hd{YBn";
		$_database = "urjasteels_db";

	} 
	define('SITE_URL',$baseurl);	
	$conn = new mysqli($_host,$_username,$_password,$_database);
	if ($conn -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}
	

	
	
?>