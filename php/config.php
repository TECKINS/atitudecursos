﻿<?php

$conexao = mysqli_connect('mysql.hostinger.com.br','u998161308_root', '1000atitudes', 'u998161308_users');
$conexao->set_charset("utf8");

function protegePaginaAdm() {
	if (!isset($_SESSION['id']) OR !isset($_SESSION['nome'])) {
		// Não há usuário logado, manda pra página de login
		expulsaVisitante();
	} else if (!isset($_SESSION['id']) OR !isset($_SESSION['nome'])) {
		// Há usuário logado, verifica se precisa validar o login novamente
		if ($_SG['validaSempre'] == true) {
			// Verifica se os dados salvos na sessão batem com os dados do banco de dados
			if (!validaUsuario($_SESSION['email'], $_SESSION['senha'])) {
				// Os dados não batem, manda pra tela de login
				expulsaVisitante();
			}
		}
	}
	if ($_SESSION['nivel'] != '2'){
		expulsaVisitante();
	}

}

function protegePagina() {

	if (!isset($_SESSION['id']) OR !isset($_SESSION['nome'])) {
		// Não há usuário logado, manda pra página de login
		expulsaVisitante();
	} else if (!isset($_SESSION['id']) OR !isset($_SESSION['nome'])) {
		// Há usuário logado, verifica se precisa validar o login novamente
		if ($_SG['validaSempre'] == true) {
			// Verifica se os dados salvos na sessão batem com os dados do banco de dados
			if (!validaUsuario($_SESSION['email'], $_SESSION['senha'])) {
			// Os dados não batem, manda pra tela de login
			expulsaVisitante();
			}
		}
	}
}


function expulsaVisitante() {

	// Remove as variáveis da sessão (caso elas existam)
	unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email'], $_SESSION['senha']);

	// Manda pra tela de login
	$login = "../Login.html";
	header("Location: $login");
}
?>
