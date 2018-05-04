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
				<a href="certificados.php">
				Certificados                       </a>
				<i class="icon-angle-right"></i>
			</li>


		</ul>
		<!-- breadcrumb -->
		<h2>Certificados</h2>   
		<h5><?php echo "Olá <strong>". $_SESSION['nome'] ."</strong>, aqui você encontra os certificados dos cursos que você concluiu."?></h5>
	</div>
</div>
<!-- /. ROW  -->
<hr/>
<div class="row">

	<section class="mar-20">

		<div class="box first">

			<?php
			$sql = mysqli_query($conexao,"SELECT id,nome,link,descricao,categoria,page FROM cad_cursos ");

			while($valor = mysqli_fetch_array($sql)) {
				$id = $valor['id'];
				?>
			</ul><!--/#portfolio-filter-->
			<ul class="portfolio-items col-3">
				<li class="portfolio-item apps <?=$valor["categoria"]?>">
					<div class="item-inner">
						<div class="portfolio-image">
							<img src="<?=$valor["link"]?>" alt="">
							<div class="overlay">
								<?php echo "<button class='preview btn btn-success'><i class='fa fa-certificate'></i> Ver Certificado</button>"; ?>
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