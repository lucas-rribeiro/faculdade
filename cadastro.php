<?php
	include("conexao.php");
	
	if(isset($_POST['submit'])){
		$sql = "INSERT INTO usuario (nome, email, telefone) VALUES ('".$_POST['nome']."', '".$_POST['email']."', '".$_POST['telefone']."')";
		$db->exec($sql);
		
		header("Location: http://localhost:8282");
	}	
?>
