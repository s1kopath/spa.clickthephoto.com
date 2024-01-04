<?php

	$DB_HOST = 'localhost';
	$DB_USER = 'clickthep_profile_user';
	$DB_PASS = 'pro@pass_20';
	$DB_NAME = 'clickthep_profile';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
?>