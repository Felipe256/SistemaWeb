<?php
	require_once("controle/ControleCadastro.php");
	
	$controle = new cadastroController();
	$resultado = $controle->excluir($_GET['id']);
	
?>