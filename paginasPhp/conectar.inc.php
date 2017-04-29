<?php
	// Se conectando ao servidor
	$conexao = mysqli_connect("localhost","root","");
	
	// Se conectando BD criado
	$bd = mysqli_select_db($conexao,"curso");
	
	// Testando a conexao com banco 
	if($bd){
		echo" banco conectado !<br>";
	}else{
		echo" Erro na conexão !";
	}
	
	// Inserindo dados no banco
	$nome = $_POST['nome'];
	$dataNasc = $_POST['dataNasc'];
	
	$query = "INSERT INTO aluno VALUES('','$nome','$dataNasc')"; 
	$inserir = mysqli_query($conexao,$query);
	
	if($inserir){
		echo" Cadastro feito com sucesso";
	}else{
		echo" Erro no cadastro !!";
	}
	
	
	// buscar dados no banco
	$quary1 = "SELEC *FROM aluno";
	
	$busca = mysqli_query($conexao,$quary1);
	echo"$busca";
	/*
	// Executando query e retornando valores da tabela "cliente"
	$query = mysqli_query($conexao,"select from * cliente");
	
	//Listando valores retornados da tabela "cliente"
    while($tabela = mysqli_fetch_array($query)){
        
        echo $tabela['nome']. "<br>";
        echo $tabela['email']. "<br>" ;
        echo $tabela['telefone']. "<br>";
        echo $tabela['assunto']. "<br>";
        echo $tabela['mensagem'];
	}
	*/
?>