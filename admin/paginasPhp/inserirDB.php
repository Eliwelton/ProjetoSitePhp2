<?php

	include_once("conectar.inc.php");
	
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];

	// Inserindo no banco de dados
	$query = "INSERT INTO contatos VALUES('','$nome','$email','$telefone','$mensagem')"; 
	$inserir = mysqli_query($conexao,$query);
		
		
	if($inserir){
		 echo" Cadastro feito com sucesso";
	}else{
		echo" Erro no cadastro !!";
	}
	
?>