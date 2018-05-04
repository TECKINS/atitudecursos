<?php
	session_start();

	include("../php/config.php");
	protegePagina();

	$name = $_SESSION['nome']; 
	$email = $_SESSION['email'];
	$message = $_POST['message'];

	$sql = mysqli_query($conexao, "INSERT INTO mensagem (remetente, destinatario, message, date)
		VALUES('{$name}', '{$email}', '{$message}', now())");

	echo "<script> URL=javascript=history.back();</script>";
?>