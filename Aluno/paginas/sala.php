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
				<a href="sala.php">
				Sala de Aula                       </a>
				<i class="icon-angle-right"></i>
			</li>


		</ul>
		<!-- breadcrumb -->
		<h2>Sala de Aula</h2>   
		<h5><?php echo "Bem vindo <strong>". $_SESSION['nome'] ."</strong>, a sua área de estudos "?></h5>
	</div>
</div>
<!-- /. ROW  -->
<hr />
<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-calendar fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">10</div>
						<div>Eventos</div>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer">
					<span class="pull-left">Ver mais detalhes</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-tasks fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">120</div>
						<div>Livros</div>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer">
					<span class="pull-left">Ver mais detalhes</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-bullhorn fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">24</div>
						<div>Palestras</div>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer">
					<span class="pull-left">Ver mais detalhes</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-support fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">5</div>
						<div>Instrucões</div>
					</div>
				</div>
			</div>
			<a href="#">
				<div class="panel-footer">
					<span class="pull-left">Ver mais detalhes</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>

</div>
<hr />

<!-- /. ROW  -->



<?php
$sql = mysqli_query($conexao,"SELECT id,curso,link,nota,code,img FROM cursos ORDER BY id DESC ");
?>

<h1><i class="fa fa-laptop"></i> Meus Cursos</h1>

<?php

while($valor = mysqli_fetch_array($sql)) {
	if($valor['code'] == $_SESSION['id']){
		$id = $valor["id"];
		?>
		<ul class="portfolio-items col-4 mar-20">
			<li class="portfolio-item apps">
				<div class="item-inner">
					<div class="portfolio-image">
						<img src="<?=$valor["img"]?>" alt="">
						<div class="overlay">
							<a href="<?=$valor["link"]?>" class="preview btn btn-danger"><i class="fa fa-eye"></i> Assistir</a>
						</div>
					</div>
					<div id="caixa" class="blank"><h4><?=$valor["curso"]?></h4>

						<h5><i class="fa fa-check-square-o"></i> Nota: <?=$valor["nota"]?>.0</h5><?php echo "<button type='button' id='trash' class='btn btn-default pull-right per-max' data-toggle='modal' data-target='#delete'><i class='fa fa-trash-o'></i></button>"; ?>

					</div>

				</div>

			</li><!--/.portfolio-item-->

			<div class="modal fade" id="delete" role="dialog">
				<div class="modal-dialog modal-md">

					<div class="modal-content">
						<div class="modal-body">
							<p>Você tem certeza que deseja excluir este curso?</p>
						</div>
						<div class="modal-footer">
							<?php echo "<a href=\"delete.php?id=$id\" type=\"button\" class=\"btn btn-danger\">Confirmar</a>"; ?>

							<button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
						</div>
					</div>

				</div>
			</div>

			<?php
		}
	}
	?>