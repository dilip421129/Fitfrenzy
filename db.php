<?php
	$host = 'localhost'; //change this to your host
	$dbname = 'ecomm'; //change this to your database name
	$user = 'root'; //change this to your database user
	$pass = ''; //change this to your database password

	try{
		$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		die('Error connecting to database: '.$e->getMessage());
	}
?>
