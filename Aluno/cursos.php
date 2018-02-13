<?php
session_start();

include("../php/config.php");
protegePagina();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-88350404-1', 'auto');
  ga('send', 'pageview');
</script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
	google_ad_client: "ca-pub-9095521793912977",
	enable_page_level_ads: true
  });
</script>
	  <meta charset="utf-8" />
	  <link rel="shortcut icon" href="../images/ico/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposede.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Cursos</title>
	<!-- BOOTSTRAP STYLES-->
	<link href="../assets/css/bootstrap.css" rel="stylesheet"/>
	 <!-- FONTAWESOME STYLES-->
	<link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	 <!-- MORRIS CHART STYLES-->
	<link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<!-- CUSTOM STYLES-->
	<link href="../assets/css/simple-sidebar.css" rel="stylesheet"/>
	<link href="../assets/css/custom.css" rel="stylesheet" />
	 <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
</head>
<body>
	<?php include("../php/cabecalho.php"); ?>
	<?php include("menu.php"); ?>
		<!-- /. NAV SIDE  -->
		<div id="page-wrapper" >
			<div id="page-inner">
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
					$sql = mysqli_query($conexao,"SELECT id,nome,link,descricao,categoria,page,acao FROM cad_cursos ");
					
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
									<?php echo "<a href=\"add.php?id=$id\"><button class='preview btn btn-success'><i class='fa fa-plus'></i> Adiconar Curso </button></a>"; ?>
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
	</div>
			 <!-- /. PAGE INNER  -->
			</div>
		 <!-- /. PAGE WRAPPER  -->
		</div>
	<?php include("../php/rodape.php"); ?>
	 <!-- /. WRAPPER  -->
	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="../assets/js/jquery-1.10.2.js"></script>
	  <!-- BOOTSTRAP SCRIPTS -->
	<script src="../assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	  <!-- CUSTOM SCRIPTS -->
	<script src="../assets/js/main.js"></script>
	<script src="../assets/js/jquery.isotope.min.js"></script>
	<script src="../assets/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript">
	$("#menu-toggle").click(function(e) {
	    e.preventDefault();
	    $("#wrapper").toggleClass("toggled");
	});
	</script>
</body>
</html>
