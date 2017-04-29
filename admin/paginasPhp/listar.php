<?php
	include_once("conectar.inc.php");


	$busca = "SELECT * FROM contatos";
	$todos = mysqli_query($conexao,$busca);

	echo"teste";
	$dados = mysqli_fetch_array($todos));
	echo"$dados['nome']";

?>