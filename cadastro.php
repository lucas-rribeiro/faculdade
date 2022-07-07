<?php

	include("conexao.php");
	
	//$nome = $_POST['nome'];
	//$email = $_POST['email'];
	//$senha = md5($_POST['senha']);

	//if ($db = sqlite_open("c:/users/lucas.ribeiro/desktop/faculdade ou cursos/site/cadastro.db", 0666, $error)) {
    //echo "Banco de dados encontrado e aberto...";
	//sqlite_query($db, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
    if(isset($_POST['submit'])){
		//include our connection
		include 'conexao.php';		
    	//insert query
		$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('".$_POST['nome']."', '".$_POST['email']."', '".$_POST['senha']."')";
		$db->exec($sql);

		$sql1 = ("SELECT nome, email FROM usuario");
		$db ->exec($sql1);


	//visualiza os dados gravados
    while ($i = sqlite_fetch_array($db)) {
          echo "<br><br>";
          echo "nome: ".$i['nome']."<br>";
          echo "email: ".$i['email'];
      }//fecha while
		header("index.html");
	}
?>




 




 
