<?php
	$db = new SQLite3('cadastro.db');
	$query = "CREATE TABLE IF NOT EXISTS usuario (nome STRING, email STRING, telefone STRING)";
	$db->exec($query);
?>