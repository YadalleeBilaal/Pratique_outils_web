<?php
	
	try
	{
		$lienBDD = new PDO("mysql:host=localhost;dbname=AJAX","root","root");	
	
	}catch(PDOException $e){
		die($e->getMessage());
	}

	