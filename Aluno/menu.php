<?php
	$email = $_SESSION['email'];
	// cria a instrução SQL que vai selecionar os dados
	$query = sprintf("SELECT img FROM aluno WHERE email = '$email'");
	// executa a query
	$dados = mysqli_query($conexao, $query) or die(mysqli_error());
	// transforma os dados em um array
	$linha = mysqli_fetch_assoc($dados);

	$img_perfil = ($linha['img'] != "" || $linha['img'] != NULL) ? 'images/users/'.$linha['img'] : '../assets/img/find_user.png';
?>
<!-- Sidebar menu  -->
<nav class="sidebar-menu">
	<ul class="menu">
		<img src="<?php echo $img_perfil; ?>" class="user-image img-responsive img-circle" width="128px" height="128px"/>
		
		<li>
			<a href="index.php"><i class="fa fa-dashboard fa-lg"></i> Painel Inicial</a>
		</li>
		<li>
			<a href="index.php?pagina=sala"><i class="fa fa-desktop fa-lg"></i> Sala de Aula</a>
		</li>
		<li>
			<a href="index.php?pagina=cursos"><i class="fa fa-book fa-lg"></i> Adicionar Cursos</a>
		</li>
		<li>
			<a href="index.php?pagina=certificados"><i class="fa fa-qrcode fa-lg"></i> Certificados</a>
		</li>
		<li>
			<a href="index.php?pagina=dados"><i class="fa fa-table fa-lg"></i> Dados do Aluno </a>
		</li>
		<li>
			<a href="index.php?pagina=form"><i class="fa fa-pencil-square fa-lg"></i> Atendimento </a>
		</li>
	</ul>
</nav>
<!-- Fim sidebar menu  -->