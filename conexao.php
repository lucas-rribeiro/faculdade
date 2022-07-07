<?php
	
	// OLD - $conn = new mysqli($server = "localhost", $user = "root", $password = "", $database = "cadastro");
	

	//Create a new SQLite3 Database
	$db = new SQLite3('cadastro.db');
 
	//Create a new table to our database 
	$query = "CREATE TABLE IF NOT EXISTS usuario (nome STRING, email STRING, senha STRING)";
	$db->exec($query);
 

	
	
?>