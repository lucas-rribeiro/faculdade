<?php
	include("conexao.php");

	$json = array();
	$data = $db->query("SELECT nome, email, telefone FROM usuario");

	while ($row = $data->fetchArray()) {
		array_push($json, array(
			'nome' => $row['nome'],
			'email' => $row['email'],
			'telefone' => $row['telefone']
		));
	}

	header("Content-Type: application/json");
	echo json_encode($json);

	die();
?>
