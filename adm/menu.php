<script type="text/javascript">
	function mudaFoto(foto) {
		document.getElementById("icone").src = foto;
	}
</script>
<div id="sidebar-wrapper">
	<!-- /. NAV TOP  -->
	<nav class="navbar-default navbar-side" role="navigation">
		<div class="sidebar-collapse">
			<ul class="nav" id="main-menu">
				<li class="text-center">
					<img id="icone" src="../assets/img/find_user.png" class="user-image img-responsive" width="128px" height="128px"/>
				</li>
				<li onmouseover="mudaFoto('../images/painelinicial.png')" onmouseout="mudaFoto('../assets/img/find_user.png')">
					<a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Painel Inicial</a>
				</li>
				<li onmouseover="mudaFoto('../images/saladeaula.png')" onmouseout="mudaFoto('../assets/img/find_user.png')">
					<a  href="cursos.php"><i class="fa fa-book fa-3x"></i> Mais Cursos</a>
				</li>
				<li onmouseover="mudaFoto('../images/certificacao.png')" onmouseout="mudaFoto('../assets/img/find_user.png')">
					<a   href="certificados.php"><i class="fa fa-qrcode fa-3x"></i> Certificados</a>
				</li>
				<li onmouseover="mudaFoto('../images/dadosdoaluno.png')" onmouseout="mudaFoto('../assets/img/find_user.png')">
					<a  href="dados.php"><i class="fa fa-table fa-3x"></i> Dados do Aluno </a>
				</li>
				<li onmouseover="mudaFoto('../images/atendimento.png')" onmouseout="mudaFoto('../assets/img/find_user.png')">
					<a  href="form.php"><i class="fa fa-pencil-square fa-3x"></i> Atendimento </a>
				</li>
				<li onmouseover="mudaFoto('../images/atendimento.png')" onmouseout="mudaFoto('../assets/img/find_user.png')">
					<a  href="https://files42.hostinger.com.br/" target="_blank"><i class="fa fa-file fa-3x"></i> Gerenciador de Arquivos </a>
				</li>
				<li onmouseover="mudaFoto('../images/atendimento.png')" onmouseout="mudaFoto('../assets/img/find_user.png')">
					<a  href="https://webmail1.hostinger.com.br/" target="_blank"><i class="fa fa-envelope fa-3x"></i> Email </a>
				</li>
			</ul>

		</div>

	</nav>
</div>
