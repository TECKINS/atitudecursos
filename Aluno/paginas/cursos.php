<div class="row">
	<div class="col-md-12">
		<!-- breadcrumb -->
		<ul class="breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="../index.php">Home</a>
				<i class="icon-angle-right"></i>
			</li>

			<li>
				<a href="index.php">
				Painel Inicial                       </a>
				<i class="icon-angle-right"></i>
			</li>
			<li>
				<a href="cursos.php">
				Mais Cursos                      </a>
				<i class="icon-angle-right"></i>
			</li>


		</ul>
		<!-- breadcrumb -->
		<h2>Mais Cursos</h2>   
		<h5><?php echo "Olá <strong>". $_SESSION['nome'] ."</strong>, escolha um curso que combina com você"?></h5>
	</div>
</div>
<!-- /. ROW  -->
<hr />
<div class="row">

	<section class="mar-20">

		<div class="box first">

			<ul class="portfolio-filter">
				<li class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:5px;"><a class="btn btn-primary active" href="#" data-filter=".info" style="width:100%;">Informática</a></li>
				<li class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:5px;"><a class="btn btn-primary" href="#" data-filter=".nr" style="width:100%;">Normas Regulamentadoras</a></li>
				<li class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:5px;"><a class="btn btn-primary disabled" href="#" data-filter=".mac" style="width:100%;">Mecânica</a></li>
				<li class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:5px;"><a class="btn btn-primary disabled" href="#" data-filter=".emp" style="width:100%">Empresa</a></li>
				<li class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:5px;"><a class="btn btn-primary disabled" href="#" data-filter=".port" style="width:100%">Portuário</a></li>
				<li class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:5px;"><a class="btn btn-primary active" href="#" data-filter=".prog" style="width:100%;" disabled="">Programação</a></li><li class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:5px;"><a class="btn btn-primary active" href="#" data-filter=".adm" style="width:100%;" disabled="">Administração</a></li><li class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:5px;"><a class="btn btn-primary disabled" href="#" data-filter=".idi" style="width:100%">Idiomas</a></li>


				<form class="navbar-form navbar-left" role="search" style="width:100%;">
					<div class="form-group">
						<input type="text" placeholder="Nome do Curso ..." class="form-control" style="width:400px; margin: 20px;">
					</div><button type="submit" class="btn btn-danger" style="width:80px;"><i class="fa fa-search"></i></button>
				</form>

				<?php
				$sql = mysqli_query($conexao,"SELECT id, nome, link, descricao, categoria, page, acao FROM cad_cursos ");

				while($valor = mysqli_fetch_array($sql)) {
					$id = $valor['id']; 
					?>
				</ul><!--/#portfolio-filter-->
				<ul class="portfolio-items col-3">
					<li class="portfolio-item apps <?=$valor["categoria"]?>">
						<div class="item-inner">
							<div class="portfolio-image">
								<img src="<?php echo $valor["link"]; ?>" alt="">
								<div class="overlay">
									<?php echo "<a href=\"add.php?id=$id\"><button class='preview btn btn-success'><i class='fa fa-plus'></i> Adicionar Curso </button></a>"; ?>
								</div>
							</div>
							<div class="blank">
								<h4><?=$valor["nome"]?></h4>
								<p><?=$valor["descricao"]?></p>
							</div>
						</div>
					</li><!--/.portfolio-item-->

					<?php
				}
				?>

			</ul>  


		</div><!--/.box-->

	</section><!--/#portfolio-->


</div>  <!-- /. ROW  -->